<?php 

    ## Loops ##
    /*
        - For
        - While
        - Do...While
        - Foreach
    */

    ## For Loops ##
    // @params - init, condition, inc

        // for($i =0; $i < 10; $i++) {

        //     echo 'Number ' . $i;
        //     echo '<br>';

        // }

    ## While Loops ##
    // @params - condition

        // $i = 0;
        
        // while($i < 10) {

        //     echo $i;
        //     echo '<br>';
        //     $i++;

        // }

    ## Do...While Loops ##
    // @params - condition

        // $i = 0;
            
        // do {

        //     echo $i;
        //     echo '<br>';
        //     $i++;

        // }

        // while($i < 10);

    ## Foreach Loops ##

        // Simple foreach loop

        // Array to hold names of people
        // $people = array('Brad', 'Jose', 'William');

        // For loop that lists each person in the $people array
        // foreach($people as $person) {

        //     echo $person;
        //     echo '<br>';

        // }

        // Associative array with foreach loop

        // Associative array to hold names and emails of people
        $people = array(
            
            'Brad' => 'bdawg@gmail.com', 
            'Jose' => 'nowayJose@bing.com', 
            'William' => 'willay@gmail.com'

        );

        // For loop that lists each person in the $people array and their emails
        foreach($people as $person => $email) {

            echo $person . ': ' . $email;
            echo '<br>';
            
        }

?>