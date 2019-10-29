<?php 

    ## Server Super Global ##

    // Create server array
    $server = [

        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],

    ];

    // echo $server['Host Server Name']; // Outputs 'localhost'
    // echo $server['Host Header']; // Also outputs 'localhost'
    // echo $server['Server Software']; // Outputs software being used (Apache/2.4.37 (Win32) OpenSSL/1.1.1a PHP/7.3.0)
    // print_r($server);

    // Create client array
    $client = [

        'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT'],

    ];

    // print_r($client);

?>