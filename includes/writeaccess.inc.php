<!-- <form action="includes/writeaccess.inc.php" method="get"> 
<button type="submit" id="writeaccess-submit">Create</button> -->
<?php
if (isset($_POST['writeaccess-submit'])){

require 'dbh.inc.php';

    // $personid = $_POST['id'];
    $Employee = $_POST['id'];
    $Email  = $_POST['id'];
    $password = $_POST['id'];
    $passrepeat = $_POST['id'];

    if (
    empty($Email) || 
    empty($Password)
    ){
        header("location: ..//accesstable.php?error=emptyfields&Employee=".$Employee."&Email=".$Email."&Password=".$Password);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ..//accesstable.php?error=invalidmail&mailid=".$mail);
        exit();
    } 
    else if ($password !== $passrepeat){
        header("Location: ..//accesstable.php?error=passwordcheckup&mailid=".$mail);
        exit();
    }
    else {
        $sql = ""; // Check $name, to obtain EMPLOYEE PersonID, check if PersonID exists on ACCESS
        $params = array($Email);
        $stmt = sqlsrv_query($conn, $sql, $params);
        if (!$stmt){
            header("Location: ..//accesstable.php?error=sqlerror");
            exit();
        }
    }
    // if( $stmt === false ) {    same as if (!$stmt){
    //     die( print_r( sqlsrv_errors(), true));
    $results = sqlsrv_​num_​rows($stmt);
    if($results > 0){
        header("Location: ..//accesstable.php?error=pisused&Email=".$Email);
        exit();
    }
    else{
    $sql = "INSERT INTO Employee (PersonID, Email, 'Password') VALUES (?, ?, ?)";
    $hashedpwd = password_hash ($Password, PASSWORD_DEFAULT);
    $params = array($ID, $Email, $hashedpwd);
    $stmt = sqlsrv_prepare($conn, $sql, $params);
    if (!$stmt){
        header("Location: ..//accesstable.php?error=sqlerror");
        exit();
    }
    else{
        header("Location: ..//accesstable.php?write=success");
        exit();
    }
    }
}
