<?php

// function use check whether the password matches
function pwdmatch($pwd,$repeat_pwd){
    // $result;
    if($pwd !== $repeat_pwd){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

// checks whether the user exists or not
function nameexist($con,$phone_no,$email){
    $sql= "SELECT * FROM student  WHERE phoneno=? OR  email=? ;";
    $stmt= mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$phone_no,$email);
    mysqli_stmt_execute($stmt);
    
    $resultdata= mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

// adds new user
function createUser($con,$name,$age,$phone_no,$email,$clgname,$clgid,$pwd){
    $sql= "INSERT INTO student (name,age,phoneno,email,clgname,clgid,password) VALUES (?,?,?,?,?,?,?);";
    $stmt= mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../index.php?error=stmtfailed");
        exit();
    }
    $hashedpsw=password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssssss",$name,$age,$phone_no,$email,$clgname,$clgid,$hashedpsw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

// function to user login
function loginUser($con,$name,$pwd){
    $nameexists= nameexist($con,$name,$name);
    if ($nameexists ===false){
        // echo "<script>alert('name dont exist.')</script>";
        header("location: ../index.php?error=namedontexist");
    exit();
    }
    $checkpsw=true;
   $pswhashed=$nameexists['password'];
   $checkpsw=password_verify($pwd,$pswhashed);
    
    if ($checkpsw === false){
        header("location: ../index.php?error=pwddontmatch ");
        exit();
    }
    else if ($checkpsw === true){
        session_start();
        $_SESSION["email"] = $nameexists["email"];
        $_SESSION["username"] = $nameexists["name"];
        $_SESSION['number'] = $nameexists['phoneno'];
        header("location: ../index.php");
       
    }
    // header("location: ../index.php?error=none");
    exit();
}

// payment
function payment($con,$userm,$plan,$city,$refno,$bank){
    $query='select duration from plans where pid='.$plan.';';
    $result=mysqli_query($con,$query);
    $row = mysqli_fetch_row($result);

    $date=new DateTime();
    $current= $date->format('Y-m-d');
    $date->modify('+'.$row[0].' days');
    $newdate= $date->format('Y-m-d');


    $sql= "INSERT INTO payment (studentid,planid,city,trasnid,bank,startdate,enddate) VALUES (?,?,?,?,?,?,?);";
    $stmt= mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../payment.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sssssss",$userm,$plan,$city,$refno,$bank,$current,$newdate);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../mobile_pass.php?");
    exit();

    
}