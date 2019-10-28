<?php 

    ## Arrays ##
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    ## Indexed ##

        $people = array('Kevin', 'Jeremy', 'Sara');
        // echo $people[1]; // Outputs Jeremy

        $ids = array(23, 55 , 12);
        // echo $ids[2]; // Outputs 12

        $cars = ['Honda', 'Toyota', 'Ford'];
        $cars[3] = 'Chevy';
        $cars[] = 'BMW';
        // echo $cars[4]; // Outputs BMW

        // count($cars);
        // echo count($cars); // Outputs 5

        // print_r($cars); // Outputs the entire array

        // var_dump($cars); // Outputs the entire array with extra info

    ## Asscociative ##

        $people2 = array( 'Brad' => 35, 'Jose' => 32, 'William' => 37 );
        $ids2 = [ 22 => 'Brad', 44 => 'Jose', 63=> 'William' ];
        // echo $ids2[22]; // Outputs Brad
        $people2['Jill'] = 42;
        // echo $people2['Jill']; // Outputs 42
        // print_r($people); // Outputs the entire array
        // var_dump($people); // Outputs the entire array and extra info

    ## Multi-dimensional ##

        $cars2 = array(

            array('Honda', 20, 10),
            array('Toyota', 30, 20),
            array('Mitsubishi', 23, 12),

        );

        // echo $cars2[1][0]; // Outputs Toyota
        echo $cars2[1][2]; // Outputs 20

?>