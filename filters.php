<?php 

    # Ex: 1
    
        // Check for posted data
        // if(filter_has_var(INPUT_POST, 'data')) {

        //     echo 'Data Found';

        // }
        
        // else {

        //     echo 'No Data';

        // }

    # Ex: 2

        // Check for posted data
        // if(filter_has_var(INPUT_POST, 'data')) {

        //     $email = $_POST['data'];

        //     // Remove illegal characters
        //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        //     echo $email.'<br>';

        //     if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

        //         echo 'Email Is Valid';

        //     }

        //     else { echo 'Email Is Not Valid';}

        // }

    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    # Ex: 3

        // $var = 23;

        // if(filter_var($var, FILTER_VALIDATE_INT)) {

        //     echo $var . ' is a number';
        // }

        // else { echo $var . ' is NOT a number'; }

    # Ex: 4

        // $var = '33dgfdg333dfgfdgf44';
        // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT)); // Outputs '3333344'

        // $var = '<script>alert(1)</script>';
        // echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS); // Prevents script attack

    # Ex: 5

        // A set of filters to be applied in parameters
        // $filters = array (

        //     // Checks to see if input for data is a valid email
        //     "data" => FILTER_VALIDATE_EMAIL,
        //     // Checks to see if input for data2 is a valid number and a number between 1 and 100
        //     "data2" => array(

        //         // Checks to see if valid number
        //         "filter" => FILTER_VALIDATE_INT,
        //         // Checks to see if number is between 1 and 100
        //         "options" => array(

        //             "min_range" => 1,
        //             "max_range" => 100

        //         )

        //     )

        // );

        // print_r(filter_input_array(INPUT_POST, $filters));

    # Ex: 6

        // Array to hold user information
        $arr =array(

            "name" => "Robert Muldoon",
            "age" => "35",
            "email" => "rmuldoon@ingen.com"

        );

        // Set of filters to be applied for validation
        $filters = array(

            // Validation for name
            "name" => array(

                
                "filter" => FILTER_CALLBACK,
                // Makes the first letter in each word uppercase
                "options" => "ucwords"

            ),
            // Validation for age
            "age" => array(

                "filter" => FILTER_VALIDATE_INT,
                // Makes sure that age is between given range
                "options" => array(

                    "min_range" => 1,
                    "max_range" => 120,

                )

            ),
            // Validation for email
            "email" => FILTER_VALIDATE_EMAIL

        );

        print_r(filter_var_array($arr, $filters)); // Outputs 'Array ( [name] => Robert Muldoon [age] => 35 [email] => rmuldoon@ingen.com )'

?>

<!-- Form -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name="data">

    <input type="text" name="data2">

    <button type="submit">Submit</button>

</form>