<?php
    function get_calendar_custom( $initial = true, $echo = true ) {
    global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

    $key   = md5( $m . $monthnum . $year );
    $cache = wp_cache_get( 'get_calendar', 'calendar' );

    if ( $cache && is_array( $cache ) && isset( $cache[ $key ] ) ) {
        /** This filter is documented in wp-includes/general-template.php */
        $output = apply_filters( 'get_calendar', $cache[ $key ] );

        if ( $echo ) {
            echo $output;
            return;
        }

        return $output;
    }

    if ( ! is_array( $cache ) ) {
        $cache = array();
    }

    // Quick check. If we have no posts at all, abort!
    if ( ! $posts ) {
        $gotsome = $wpdb->get_var( "SELECT 1 as test FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 1" );
        if ( ! $gotsome ) {
            $cache[ $key ] = '';
            wp_cache_set( 'get_calendar', $cache, 'calendar' );
            return;
        }
    }

    if ( isset( $_GET['w'] ) ) {
        $w = (int) $_GET['w'];
    }
    // week_begins = 0 stands for Sunday
    $week_begins = (int) get_option( 'start_of_week' );

    // Let's figure out when we are
    if ( ! empty( $monthnum ) && ! empty( $year ) ) {
        $thismonth = zeroise( intval( $monthnum ), 2 );
        $thisyear  = (int) $year;
    } elseif ( ! empty( $w ) ) {
        // We need to get the month from MySQL
        $thisyear = (int) substr( $m, 0, 4 );
        //it seems MySQL's weeks disagree with PHP's
        $d         = ( ( $w - 1 ) * 7 ) + 6;
        $thismonth = $wpdb->get_var( "SELECT DATE_FORMAT((DATE_ADD('{$thisyear}0101', INTERVAL $d DAY) ), '%m')" );
    } elseif ( ! empty( $m ) ) {
        $thisyear = (int) substr( $m, 0, 4 );
        if ( strlen( $m ) < 6 ) {
            $thismonth = '01';
        } else {
            $thismonth = zeroise( (int) substr( $m, 4, 2 ), 2 );
        }
    } else {
        $thisyear  = current_time( 'Y' );
        $thismonth = current_time( 'm' );
    }

    $unixmonth = mktime( 0, 0, 0, $thismonth, 1, $thisyear );
    $last_day  = date( 't', $unixmonth );

    // Get the next and previous month and year with at least one post
    $previous = $wpdb->get_row(
        "SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
		FROM $wpdb->posts
		WHERE post_date < '$thisyear-$thismonth-01'
		AND post_type = 'post' AND post_status = 'publish'
			ORDER BY post_date DESC
			LIMIT 1"
    );
    $next     = $wpdb->get_row(
        "SELECT MONTH(post_date) AS month, YEAR(post_date) AS year
		FROM $wpdb->posts
		WHERE post_date > '$thisyear-$thismonth-{$last_day} 23:59:59'
		AND post_type = 'post' AND post_status = 'publish'
			ORDER BY post_date ASC
			LIMIT 1"
    );

    /* translators: Calendar caption: 1: month name, 2: 4-digit year */
    $calendar_caption = _x( '%1$s %2$s', 'calendar caption' );
    $calendar_output  = '<table id="wp-calendar">
	<caption>' . sprintf(
            $calendar_caption,
            $wp_locale->get_month( $thismonth ),
            date( 'Y', $unixmonth )
        ) . '</caption>
	<thead>
	<tr>';

    $myweek = array();

    for ( $wdcount = 0; $wdcount <= 6; $wdcount++ ) {
        $myweek[] = $wp_locale->get_weekday( ( $wdcount + $week_begins ) % 7 );
    }

    foreach ( $myweek as $wd ) {
        $day_name         = $initial ? $wp_locale->get_weekday_initial( $wd ) : $wp_locale->get_weekday_abbrev( $wd );
        $wd               = esc_attr( $wd );
        $calendar_output .= "\n\t\t<th scope=\"col\" title=\"$wd\">$day_name</th>";
    }

    $calendar_output .= '
	</tr>
	</thead>

	<tfoot>
	<tr>';

    if ( $previous ) {
        $calendar_output .= "\n\t\t" . '<td colspan="3" id="prev"><a href="' . get_month_link( $previous->year, $previous->month ) . '">&laquo; ' .
            $wp_locale->get_month_abbrev( $wp_locale->get_month( $previous->month ) ) .
            '</a></td>';
    } else {
        $calendar_output .= "\n\t\t" . '<td colspan="3" id="prev" class="pad">&nbsp;</td>';
    }

    $calendar_output .= "\n\t\t" . '<td class="pad">&nbsp;</td>';

    if ( $next ) {
        $calendar_output .= "\n\t\t" . '<td colspan="3" id="next"><a href="' . get_month_link( $next->year, $next->month ) . '">' .
            $wp_locale->get_month_abbrev( $wp_locale->get_month( $next->month ) ) .
            ' &raquo;</a></td>';
    } else {
        $calendar_output .= "\n\t\t" . '<td colspan="3" id="next" class="pad">&nbsp;</td>';
    }

    $calendar_output .= '
	</tr>
	</tfoot>

	<tbody>
	<tr>';

    $daywithpost = array();

    // Get days with posts
    $dayswithposts = $wpdb->get_results(
        "SELECT DISTINCT DAYOFMONTH(post_date)
    FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
    AND post_type = 'post' AND post_status in ('publish', 'future')
    AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'",
        ARRAY_N
    );

    $post_date_test = $wpdb->get_results("SELECT id, DAYOFMONTH(post_date)
    FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
    AND post_type = 'post' AND post_status in ('publish', 'future')
    AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'", ARRAY_N);


    $form_link = [];
    foreach ($post_date_test as $post_cus){
        $form_link[$post_cus[1]] = get_post_permalink($post_cus[0]);
    }

    if ( $dayswithposts ) {
        foreach ( (array) $dayswithposts as $daywith ) {
            $daywithpost[] = $daywith[0];
        }
    }

    // See how much we should pad in the beginning
    $pad = calendar_week_mod( date( 'w', $unixmonth ) - $week_begins );
    if ( 0 != $pad ) {
        $calendar_output .= "\n\t\t" . '<td colspan="' . esc_attr( $pad ) . '" class="pad">&nbsp;</td>';
    }

    $newrow      = false;
    $daysinmonth = (int) date( 't', $unixmonth );

    for ( $day = 1; $day <= $daysinmonth; ++$day ) {
        if ( isset( $newrow ) && $newrow ) {
            $calendar_output .= "\n\t</tr>\n\t<tr>\n\t\t";
        }
        $newrow = false;

        if ( $day == current_time( 'j' ) &&
            $thismonth == current_time( 'm' ) &&
            $thisyear == current_time( 'Y' ) ) {
            $calendar_output .= '<td id="today">';
        } else {
            $calendar_output .= '<td>';
        }

        if ( in_array( $day, $daywithpost ) ) {
            // any posts today?
            $date_format = date( _x( 'F j, Y', 'daily archives date format' ), strtotime( "{$thisyear}-{$thismonth}-{$day}" ) );
            /* translators: Post calendar label. %s: Date */
            $label            = sprintf( __( 'Posts published on %s' ), $date_format );
            $href = $form_link[$day];
            $calendar_output .= sprintf(
                '<a href="'.$href.'" for="%s" aria-label="%s" class="active_date">%s</a>',
                get_day_link( $thisyear, $thismonth, $day ),
                esc_attr( $label ),
                $day
            );
            /*$calendar_output .= sprintf(
                '<a href="%s" aria-label="%s" class="active_date">%s</a>',
                get_day_link( $thisyear, $thismonth, $day ),
                esc_attr( $label ),
                $day
            );*/
        } else {
            $calendar_output .= $day;
        }
        $calendar_output .= '</td>';

        if ( 6 == calendar_week_mod( date( 'w', mktime( 0, 0, 0, $thismonth, $day, $thisyear ) ) - $week_begins ) ) {
            $newrow = true;
        }
    }

    $pad = 7 - calendar_week_mod( date( 'w', mktime( 0, 0, 0, $thismonth, $day, $thisyear ) ) - $week_begins );
    if ( $pad != 0 && $pad != 7 ) {
        $calendar_output .= "\n\t\t" . '<td class="pad" colspan="' . esc_attr( $pad ) . '">&nbsp;</td>';
    }
    $calendar_output .= "\n\t</tr>\n\t</tbody>\n\t</table>";

    $cache[ $key ] = $calendar_output;
    wp_cache_set( 'get_calendar', $cache, 'calendar' );

    if ( $echo ) {
        /**
         * Filters the HTML calendar output.
         *
         * @since 3.0.0
         *
         * @param string $calendar_output HTML output of the calendar.
         */
        echo apply_filters( 'get_calendar', $calendar_output );
        return;
    }
    /** This filter is documented in wp-includes/general-template.php */
    return apply_filters( 'get_calendar', $calendar_output );
}

    function get_planned_dates( $initial = true, $echo = true )
    {
        global $wpdb, $m, $monthnum, $year, $wp_locale, $posts;

        $thisyear = current_time('Y');
        $thismonth = current_time('m');

        $unixmonth = mktime( 0, 0, 0, $thismonth, 1, $thisyear );
        $last_day  = date( 't', $unixmonth );
        // Get the next and previous month and year with at least one post

        $daywithpost = array();

        // Get days with posts
        $dayswithposts = $wpdb->get_results(
                "SELECT id, DAYOFMONTH(post_date), post_title
        FROM $wpdb->posts WHERE post_date >= '{$thisyear}-{$thismonth}-01 00:00:00'
        AND post_type = 'post' AND post_status in ('publish', 'future')
        AND post_date <= '{$thisyear}-{$thismonth}-{$last_day} 23:59:59'",
                ARRAY_N
        );

        function formatMouth($date){
            switch ($date){
                case "01":
                    return 'января';
                case "02":
                    return 'февраля';
                case "03":
                    return 'марта';
                case "04":
                    return 'апреля';
                case "05":
                    return 'мая';
                case "06":
                    return 'июня';
                case "07":
                    return 'июля';
                case "08":
                    return 'августа';
                case "09":
                    return 'сентября';
                case "10":
                    return 'октября';
                case "11":
                    return 'ноября';
                case "12":
                    return 'декабря';
            }
        }

        $planned_dates = [];
        foreach ($dayswithposts as $post_cus){
            $planned_dates[$post_cus[1]]['date'] = $post_cus[1].' '.formatMouth($thismonth);
            $planned_dates[$post_cus[1]]['link'] = get_post_permalink($post_cus[0]);
            $planned_dates[$post_cus[1]]['title'] = $post_cus[2];
        }

        ksort($planned_dates);

        return $planned_dates;
    };
?>