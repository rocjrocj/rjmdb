<?php
/**
 * Created by PhpStorm.
 * User: rjohnson
 * Date: 7/14/18
 * Time: 3:46 PM
 */

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://d8/rest/views/projects',
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$data = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);

$projects = json_decode($data,true);
//print_r($projects);        // Dump all data of the Array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RocJohnson.com</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Start your project here-->

<div class="vh-100 black">
    <div class="d-flex align-items-center vh-100">
        <h1 class="orange-text darken-1 ml-5 text-uppercase">RocJohnson.com</h1>
    </div>


    <div>
        <p>Hello World.</p>
        <?php

        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';

        echo $projects[0]->field_client->value;

        echo $projects[0]["field_client"]; // Access Array data


        foreach ($data as $key => $value) {
            // $arr[3] will be updated with each value from $arr...
            echo "{$key} => {$value} ";
            //print_r($arr);
        }

        ?>
    </div>
</div>




<!--<div style="height: 100vh">
    <div class="flex-center flex-column">
        <h1 class="animated fadeIn mb-4">RocJohnson.com</h1>

        <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

        <p class="animated fadeIn text-muted">MDB Team</p>
    </div>
</div>-->
<!-- /Start your project here-->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>

