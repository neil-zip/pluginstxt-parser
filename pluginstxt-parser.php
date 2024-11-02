#!/usr/bin/env php
<?php
// this tool needs to be used for all url imports,
//// and just display accept all or accept like for each..
require_once 'lib/php-fetchPlugins.php';

 // Check if URL is passed as command line argument
    if ($argc < 3) {
        echo "Usage: ./pluginstxt-to-json.php <url> <output.json>";
        exit;
    }

    //var_dump($config);

    $url = $argv[1]; // Get the URL from command line arguments*/
    $outputFile = $argv[2]; // 
    //$url = 'http://localhost:8080/demo-api-repo-mock/plugins.txt'; // Use your local URL

    try {  
        $output = fetchPlugins($url);
        file_put_contents($outputFile,json_encode($output,JSON_PRETTY_PRINT));
        echo "Written to ".$outputFile;
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }


    // Output the stored plugins
    //echo "Plugins have been stored successfully:\n";
    //echo json_encode($plugins, JSON_PRETTY_PRINT);

