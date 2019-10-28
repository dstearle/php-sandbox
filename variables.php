<?php

    // Single line comment
    # Single line comment
    /*
        Multi line comment
    */

    ## Variables ##
    /*
        Rules for variables:
            - Prefix $
            - Start with a letter or an underscore
            - Only letters, numbers and underscores
            - Case sensitive
            - Ex: $variable = "Hello World!";
    */

    ## Data Types ##
    /*
        Rules for data types:
            - Strings: $output = "Hello World!";
            - Integers: $num = 4;
            - Floats: $float = 4.4;
            - Booleans: $bool = true;
            - Arrays
            - Objects
            - NULL
            - Resource
    */

    ## Concatenation ##
    /*
        Rules for concatenation:
            - Use '+' for integers
            - Use '.' for strings
            - You can use double quotes "" for faster concatenation of strings (see $greeting2)
    */

        $num1 = 4;
        $num2 = 10;
        $sum = $num1 + $num2; // Put $sum into echo to retrieve the sum of both numbers (14)
        
        $string1 = 'Hello';
        $string2 = 'World';
        $greeting = $num1 . ' ' . $num2 . '!'; // Put $greeting into echo to retrieve the string of "Hellow World!"
        $greeting2 = "$string1 $string2"; // Put $greeting into echo to retrieve the string of "Hellow World!"

    ## Escape Sequences ##

        $string3 = 'They\'re here';
        $string4 = "They\"re here";

    ## Constants ##

        define('GREETING', 'Hello Everyone');
        // echo GREETING;
        define('GREETING', 'Hello Everyone', true);
        // echo greeting;

    ## Basic Greeting ##

        $output = "Hello World!";
        echo $output;

?>