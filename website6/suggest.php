<?php 

    // People Array @TODO - Get from DB
    $people[] = "Henry";
    $people[] = "Benjamin";
    $people[] = "James";
    $people[] = "Isaac";
    $people[] = "William";
    $people[] = "Thomas";
    $people[] = "Cooper";
    $people[] = "Franklin";
    $people[] = "John";
    $people[] = "Robert";
    $people[] = "Malcolm";
    $people[] = "Alan";
    $people[] = "Dennis";
    $people[] = "Roland";
    $people[] = "Wu";
    $people[] = "John";
    $people[] = "Ray";
    $people[] = "Alex";
    $people[] = "Elena";
    $people[] = "Christoph";

    // Get query string
    $q = $_REQUEST['q'];

    // Empty to variable to hold the input's string
    $suggestion = "";

    // Get suggestions
    if($q !== "") {

        // Puts input to lowercase
        $q = strtolower($q);
        // Gets the length of the string from the input
        $len = strlen($q);

        // Foreach loop that loops through the array above
        foreach($people as $person) {

            if(stristr($q, substr($person, 0, $len))) {

                // If there is only one suggestion to be made show the name of the person
                if($suggestion === '') {

                    $suggestion = $person;

                }

                // If there are multiple suggestions to be made append then from end to end
                else{

                    $suggestion .= ", $person";

                }
                
            }
                
        }

    }

    // If nothing in the input matches any of the names in the array outputs this
    echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>