<?php

    ## Function ##
    // A block of code that can be repeatedly called
    /*
        Rules for functions:
            - Camel Case: myFunction()
            - Lower Case: my_function()
            - Pascal Case: MyFunction()
    */

        #// Creates the simpleFunction
            function simpleFunction() {

                echo 'Hello World!';

            }

            // Runs the simpleFunction
            simpleFunction();

        #// Function with param
            function sayHello($name = 'World') {

                echo "Hello $name<br>";

            }

            // Outputs "Hello Joe"
            sayHello('Joe');
            // Outputs "Hello Bob"
            sayHello('Bob');
            // Outputs "Hello World" because that is the default
            sayHello();

        #// Function for finding the sum of two numbers
            function addNumbers($num1, $num2) {

                return $num1 + $num2;

            }

            // Insert numbers into the parameters to find their sum
            echo addNumbers(2, 3);

        #// By reference
            
            $myNum =10;

            // Does not add five to the variable because no "&" to reference
            function addFive($num) {

                $num += 5;

            }

            // Adds ten to the variable
            function addTen(&$num) {

                $num += 10;
                
            }

            // Does not add five
            addFive($myNum);

            // Outputs 10
            echo "Value: $myNum<br>";

            // Adds ten
            addTen($myNum);

            // Outputs 20
            echo "Value: $myNum<br>";

?>