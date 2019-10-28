<?php 

    ## Conditionals ##
    /*
        - ==
        - ===
        - >
        - <
        - >=
        - <=
        - !=
        - !==
    */

        $num = '5';

        if($num == 5) { echo '5 passed'; } // Outputs echo

        if($num == '5') { echo '5 passed'; } // Outputs echo

        if($num === 5) { echo '5 passed'; } // Outputs nothing because not same data type (string vs. integer)

        if($num > 5) { echo '5 passed'; } // Outputs nothing

        if($num >= 5) { echo '5 passed'; } // Outputs echo

        if($num != 52) { echo '5 passed'; } // Outputs echo

        if($num == '6') { echo '5 passed'; } else { echo 'did not pass'; }// Outputs 'did not pass'

    ## Nesting If Statements ##
    
        $num2 = 5;

        if($num2 > 4) {

            if($num2 < 10) {

                echo '$num passed';

            }

        }

    ## Logical Operators ##
    /*
        - and: &&
        - or: ||
        - xor
    */

        if($num2 > 4 AND $num2 < 10) { echo '$num passed'; } // Outputs echo
        if($num2 > 4 && $num2 < 10) { echo '$num passed'; } // Same as above line

        if($num2 > 4 OR $num2 < 10) { echo '$num passed'; } // Outputs echo
        if($num2 > 4 || $num2 < 10) { echo '$num passed'; } // Same as above line

        if($num2 > 4 XOR $num2 < 10) { echo '$num passed'; } // Only one has to be true

    ## Switch ##

    $favColor = red;

    // Checks the value of $favColor
    switch($favColor) {

        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';

    }

?>