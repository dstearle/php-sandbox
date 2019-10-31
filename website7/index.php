<?php 

    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    ## Basic Functions ##

        // Return filename
        // echo basename($path); // Outputs "myfile.php"

        // Return filename without extension
        // echo basename($path, '.php'); // Outputs "myfile"

        // Return the dir name from the path
        // echo dirname($path);

        // Checks to see if the file exists
        // echo file_exists($file); // Outputs "1"

        // Get absolute path
        // echo realpath($file); // Outputs the directory all the way from the C: drive

        // Checks to see if file
        // echo is_file($file); // Outputs "1" since it exists

        // Checks to see if file is writable
        // echo is_writable($file); // Outputs "1" if it is writable

        // Checks to see if file is readable
        // echo is_readable($file); // Outputs "1" if it is readable

        // Get file size
        // echo filesize($file); // Outputs the numerical size of the file

    ## Advanced Functions ##

        // Create a directory
        // mkdir('testing'); // Creates a new folder named 'testing'

        // Remove a directory
        // rmdir('testing'); // Removes the folder named 'testing' (if folder is empty)

        // Copy file
        // echo copy('file1.txt', 'file2.txt'); // Creates a copy of file1.txt called file2.txt

        // Rename file
        // rename('file2.txt', 'myfile.txt'); // Remaes file2.txt to myfile.txt

        // Delete a file
        // unlink('myfile.txt') // Deletes the file named myfile.txt

        // Write from file to string
        // echo file_get_contents($file); // Outputs the contents from the file as a string

        // Write string to file
        // echo file_put_contents($file, 'Goodbye World!'); // Writes the string into the file (overwrites the file)

        // Append string to file
        // $current = file_get_contents($file); // Grabs the content from the file
        // $current .= 'Goodbye World!'; // Appends this string to the content grabbed from the file
        // file_put_contents($file, $current); // Writes the new appended string into the file (overwrites the file)

        // Open file for reading
        // $handle = fopen($file, 'r'); // Opens the file to be read
        // $data = fread($handle, filesize($file)); // Reads the text from the file
        // echo $data;
        // fclose($handle); // Closes the file

        // Open file for writing
        // $handle = fopen('file2.txt', 'w'); // Creates a file to be written
        // $text = "John Doe\n"; // The text to be written 
        // fwrite($handle, $text); // Writes the text to the file
        // $text = "Jim Slim\n"; // More text to be written 
        // fwrite($handle, $text); // Writes the next text to the file
        // fclose($handle); // Closes the file


?>