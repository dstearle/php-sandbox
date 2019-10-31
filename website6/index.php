<?php 

    if(isset($_POST['submit'])) {

        $userName = htmlentities($_POST['username']);

        setcookie('username', $userName, time()+3600); // Sets cookie to 1 hour

        header('Location: page2.php');

    }

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Search User</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script>

            function showSuggestion(str){

                if(str.length == 0) {

                    document.getElementById('output').innerHTML = '';

                }

                else {

                    // AJAX request
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {

                        if(this.readyState == 4 && this.status == 200) {

                            document.getElementById('output').innerHTML = this.responseText;

                        }

                    }

                    xmlhttp.open("GET", "suggest.php?q="+str, true);
                    xmlhttp.send();

                }

            }
        
        </script>

    </head>

    <body>
        
        <div class="container">

            <!-- Title -->
            <h1>Search Users</h1>

            <!-- Form -->
            <form>

                <!-- Search User Input -->
                Search User: <input 
                
                    type="text" 
                    class="form-control"
                    onkeyup="showSuggestion(this.value)"
                >

            </form>

            <!-- Suggestions -->
            <p>Suggestions: <span id="output" style="font-weight: bold;"></span></p>
        
        </div>

    </body>

</html>