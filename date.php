<?php

    ## Dates ##

    // echo date('d'); // Day
    // echo date('m'); // Month
    // echo date('Y'); // Year
    // echo date('l'); // Day of the week

    // echo date('Y/m/d'); // Year, Month, Day
    // echo date('m-d-Y'); // Month, Day, Year
    
    // echo date('h'); // Hour
    // echo date('i'); // Minute
    // echo date('s'); // Seconds
    // echo date('a'); // AM or PM


    // Set Time Zone
    date_default_timezone_set('America/New_York');

    // echo date('h:i:sa'); // MoHournth, Minute, Seconds, AM or PM

    /*

        A Unix timestamp is a long integer containing the number of seconds
        between the Unix Epoch ( January 1 1970 00:00:00 GMT ) and the
        time specified.

    */

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);

    // echo $timestamp;

    // echo date('m/d/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow'); // Gives date for tomorrow
    $timestamp4 = strtotime('next Sunday'); // Gives date for the next Sunday
    $timestamp5 = strtotime('+2 Months'); // Shows what date is two months from now

    echo $timestamp2;

    echo date('m/d/Y h:i:sa', $timestamp5);

?>