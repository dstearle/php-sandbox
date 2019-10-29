<?php

    ## substr() ##
    // Returns a portion of a string

        // $output = substr('Hello', 1);
        // echo $output; // Outputs 'ello'

        // $output2 = substr('Hello', 1, 3);
        // echo $output2; // Outputs 'ell'

        // $output3 = substr('Hello', -2);
        // echo $output3; // Outputs 'lo'

    ## strlen() ##
    // Returns the length of a string

        // $output = strlen('Hello World!');
        // echo $output; // Outputs '12'

    ## strpos() ##
    // Finds position of the first occurence of a substring

        // $output = strpos('Hello World!', 'o');
        // echo $output; // Outputs '4'

    ## strrpos() ##
    // Finds position of the last occurence of a substring

        // $output = strrpos('Hello World!', 'o');
        // echo $output; // Outputs '7'

    ## trim() ##
    // Strips whitespace

        // $text = 'Hello World!                                 ';
        // var_dump($text); // Outputs '45'

        // $trimmed = trim($text);
        // var_dump($trimmed); // Outputs '12'

    ## strtoupper() ##
    // Makes everything upper case

        // $output = strtoupper('Hello World');
        // echo $output; // Outputs 'HELLO WORLD'

    ## strtolower() ##
    // Makes everything lower case

        // $output = strtolower('Hello World');
        // echo $output; // Outputs 'hello world'

    ## ucwords() ##
    // Capitalizes every word

        // $output = ucwords('hello world');
        // echo $output; // Outputs 'Hello World'

    ## str_replace() ##
    // Replaces all occurences of a search string with a replacement

        // $text = 'Hello World';
        // $output = str_replace('World', 'Everyone, $text);
        // echo $output; // Outputs 'Hello Everyone'

    ## is_string() ##
    // Checks if string

        // $val = 'Hello';
        // $output = is_string($val);
        // echo $output; // Outputs '1' which means true

    ## gzcompress() ##
    // Compresses a string

        // $string = 'Yabadaba doo Scooby Doo!'; // The string to be compressed
        // $compressed = gzcompress($string); // Compresses the string
        // echo $compressed;

        // $original = gzuncompress($compressed); // Uncompresses the string
        // echo $original;



