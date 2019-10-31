<?php 

    ## Example 1: Basic Class ##
    
        // // Person class
        // class Person{

        //     public $name;
        //     public $email;

        // }

        // // Creating a new object using the Person class
        // $person1 = new Person;

        // // Applying a value to that object's $name variable
        // $person1 -> $name = 'John Doe';

        // echo $person1 -> $name; // Outputs "John Doe"

    ## Example 2: Class With Construct ##
    
        // // Person class with construct
        // class Person{

        //     private $name;
        //     private $email;

        //     // Construct
        //     public function __construct($name, $email){

        //         $this->name = $name;
        //         $this->email = $email;
        //         echo __CLASS__ . ' created<br>';

        //     }

        //     // Setter for person name
        //     public function setName($name){

        //         $this->name = $name;
                
        //     }

        //     // Getter for person name
        //     public function getName(){

        //         return $this->name . '<br>';

        //     }

        //     // Setter for person email
        //     public function setEmail($email){

        //         $this->email = $email;
                
        //     }

        //     // Getter for person email
        //     public function getEmail(){

        //         return $this->email . '<br>';

        //     }

        // }

        // // Creating a new object using the Person class
        // $person1 = new Person('John Doe', 'jdoe@gmail.com');

        // // Sets the name for $person1 (Not necessary when using construct)
        // // $person1 -> setName('John Doe');

        // echo $person1 -> getName(); // Outputs "John Doe"

    ## Example 3: Class With Destruct ##
    
        // // Person class with destruct
        // class Person{

        //     private $name;
        //     private $email;

        //     // Destructer
        //     public function __destruct(){

        //         echo __CLASS__ . ' destroyed<br>';

        //     }

        //     // Setter for person name
        //     public function setName($name){

        //         $this->name = $name;
                
        //     }

        //     // Getter for person name
        //     public function getName(){

        //         return $this->name . '<br>';

        //     }

        //     // Setter for person email
        //     public function setEmail($email){

        //         $this->email = $email;
                
        //     }

        //     // Getter for person email
        //     public function getEmail(){

        //         return $this->email . '<br>';

        //     }

        // }

        // // Creating a new object using the Person class
        // $person1 = new Person('John Doe', 'jdoe@gmail.com');

        // // Sets the name for $person1 (Not necessary when using construct)
        // // $person1 -> setName('John Doe');

        // echo $person1 -> getName(); // Outputs "John Doe"

    ## Example 4: Inheritance ##

        // // Person class with construct
        // class Person{

        //     private $name;
        //     private $email;

        //     // Construct
        //     public function __construct($name, $email){

        //         $this->name = $name;
        //         $this->email = $email;
        //         echo __CLASS__ . ' created<br>';

        //     }

        //     // Setter for person name
        //     public function setName($name){

        //         $this->name = $name;
                
        //     }

        //     // Getter for person name
        //     public function getName(){

        //         return $this->name . '<br>';

        //     }

        //     // Setter for person email
        //     public function setEmail($email){

        //         $this->email = $email;
                
        //     }

        //     // Getter for person email
        //     public function getEmail(){

        //         return $this->email . '<br>';

        //     }

        // }

        // // New class with inheritance from Person class
        // class Customer extends Person{

        //     private $balance;

        //     // Construct
        //     public function __construct($name, $email, $balance){

        //         parent::__construct($name, $email, $balance);
        //         $this->balance = $balance;
        //         echo 'A new ' . __CLASS__ . " has been created<br>";

        //     }

        //     // Setter for customer balance
        //     public function setBalance($balance){

        //         $this->balance = $balance;
                
        //     }

        //     // Getter for customer balance
        //     public function getBalance(){

        //         return $this->balance . '<br>';

        //     }

        // }

        // // A new customer
        // $customer1 = new Customer('Jim Dean', 'jimdean@gmail.com', 300);

        // echo $customer1->getBalance();

    ## Example 5: ##

        // Person class with construct
        class Person{

            private $name;
            private $email;
            private static $ageLimit = 40;

            // Construct
            public function __construct($name, $email){

                $this->name = $name;
                $this->email = $email;
                echo __CLASS__ . ' created<br>';

            }

            // Setter for person name
            public function setName($name){

                $this->name = $name;
                
            }

            // Getter for person name
            public function getName(){

                return $this->name . '<br>';

            }

            // Setter for person email
            public function setEmail($email){

                $this->email = $email;
                
            }

            // Getter for person email
            public function getEmail(){

                return $this->email . '<br>';

            }

            //
            public static function getAgeLimit(){

                return self::$ageLimit;

            }

        }

        # Static props and method
        // echo Person::$ageLimit; // Outputs the public static value of 40
        // echo Person::getAgeLimit(); // Outputs the private static value of 40

?>