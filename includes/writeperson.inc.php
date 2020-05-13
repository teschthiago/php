<!-- <form action="includes/writetable.inc.php" method="get"> 
<button type="submit" id="writeuser-submit">Create</button> -->
<?php
if (isset($_POST['writeuser-submit'])){

require 'dbh.inc.php';

    // $personid = $_POST['id'];
    $persontype = $_POST['id'];
    $name = $_POST['id'];
    $identidy = $_POST['id'];
    $org = $_POST['id'];
    $cpf = $_POST['id'];
    $cnpj = $_POST['id'];
    $birth = $_POST['id'];
    $gender = $_POST['id'];
    $marital = $_POST['id'];
    $phonetype = $_POST['id'];
    $phonenumber = $_POST['id'];    

    if (
    empty($persontype) || 
    empty($name) || 
    empty($identidy) || 
    empty($org) || 
    empty($cpf) || 
    empty($phonenumber) 
    ){  
        header("location: ..//personstable.php?error=emptyfields&persontype=".$persontype."&name=".$name."&identidy=".$identidy."&org=".$org."&cpf=".$cpf."&phonenumber=".$phonenumber);
        exit();
    }
    else {
        $sql = "
            SELECT N
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
}