<?php


    /*    echo ("Ajax Successfully responsed!");
        echo "Ajax Successfully responsed!";*/
    $myData = file_get_contents("php://input");
    $myData = json_decode($myData,true);
    //    echo $myData['firstName'].' '.$myData['lastName'];
    $db = mysqli_connect("localhost","root","");

    exec("echo Connection to db Done! >> debug.txt");

    if($db === false){
        exec("echo We are Dead! >> debug.txt");
        echo(0);    //sql Failed
        die("ERROR: Could not connect. " );

    }


    $first_name = mysqli_real_escape_string($db, $myData['firstName']);
    $last_name = mysqli_real_escape_string($db, $myData['lastName']);
    $username = mysqli_real_escape_string($db,$myData['userName']);
    $gender = mysqli_real_escape_string($db,$myData['gender']);
    $password = mysqli_real_escape_string($db,$myData['password']);

    $sqlCommand = "INSERT INTO `signupdb`.`signupdbtb1` ( `firstname`, `lastname`, `gender`, `username`, `password`)
    VALUES ( '$first_name', '$last_name', '$gender', '$username', '$password');";


    if(mysqli_query($db, $sqlCommand)){
    echo json_encode(1);    //sql succeeded!
    } else{
        echo json_encode(0);    //sql failed
        exec("echo sqlCommand failed >> debug.txt");
    }
    exec("echo sqlCommand  operated! >> debug.txt");
    mysqli_close($db);

?>

