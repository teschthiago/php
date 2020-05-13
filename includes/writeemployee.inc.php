<!-- <form action="includes/writetable.inc.php" method="get"> 
<button type="submit" id="writeuser-submit">Create</button> -->
<?php
if (isset($_POST['writeuser-submit'])){

require 'dbh.inc.php';

    // $personid = $_POST['id'];
    $role = $_POST['id'];
    $PIS = $_POST['id'];
    $hiredate = $_POST['id'];
    $status = $_POST['id'];

    if (
    empty($role) || 
    empty($PIS) || 
    empty($hiredate) || 
    empty($status)
    ){
        header("location: ..//employeetable.php?error=emptyfields&role=".$role."&PIS=".$PIS."&hiredate=".$hiredate."&status=".$status);
        exit();
    }
    else {
        $sql = "
            SELECT PIS
            FROM Employee
            WHERE PIS=?
        ";
        $params = array($PIS);
        $stmt = sqlsrv_query($conn, $sql, $params);
        if (!$stmt){
            header("Location: ..//employeetable.php?error=sqlerror");
            exit();
        }
    }
    // if( $stmt === false ) {    same as if (!$stmt){
    //     die( print_r( sqlsrv_errors(), true));
    $results = sqlsrv_​num_​rows($stmt);
    if($results > 0){
        header("Location: ..//employeetable.php?error=pisused&role=".$role."&PIS=".$PIS."&hiredate=".$hiredate."&status=".$status);
        exit();
    }
    else{
    $sql = "INSERT INTO Employee (RoleCategory, PIS, HireDate, 'Status') VALUES (?, ?, ?, ?)";
    $params = array($role, $PIS, $hiredate, $status);
    $stmt = sqlsrv_prepare($conn, $sql, $params);
    if (!$stmt){
        header("Location: ..//employeetable.php?error=sqlerror");
        exit();
    }
    else{

    }
    }
}