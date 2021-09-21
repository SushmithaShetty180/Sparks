<?php
require 'includes/common.php';
$id=mysqli_real_escape_string($con,$_POST['id']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$balance=mysqli_real_escape_string($con,$_POST['balance']);
$len = strlen($name);
$select="SELECT id,email FROM users WHERE email='$email'";
$select_query=mysqli_query($con,$select);
$row= mysqli_num_rows($select_query);
if (($balance) < 100 ){
    echo "<script> alert('minimum balance should be 100rs');
    window.location='user.php';
    </script>";
}
else if (($len)< 3 ){
    echo "<script> alert('enter full name');
    window.location='user.php';
    </script>";
}
else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "<script> alert('invalid email format');
    window.location='user.php';
    </script>";
}
else if($row >0){
    echo "<script> alert('user existed');
    window.location='user.php';
    </script>";
}
else{
$insert="insert into users(id,name,email,balance) values('$id','$name','$email','$balance')";
$insert_query=mysqli_query($con,$insert);
if($insert_query){
    echo "<script> alert('user creation successful');
    window.location='transaction.php';
    </script>";
}

}
?>
