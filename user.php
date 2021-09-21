<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>The Sparks Bank</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:lemonchiffon;">
<?php
include 'includes/header.php';
?>
<div class="container ">
<div class="row ">
<br>
<h2 class="sign text-center" style="margin-top: 100px; color: black;">CREATE</h2>
<br>
<div class="col-sm-offset-4 col-sm-6 col-md-5 ">
<form method="POST" action="user_script.php" >
<div class="form-group">
<label for="id" style="color: black;">Id</label>
<input type="text" class="form-control" name="id" placeholder="Id" required>
</div>
<div class="form-group">
<label for="name" style="color: black;">Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="email" style="color: black;">Email</label>
<input type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="balance" style="color: black;">Balance</label>
<input type="number" class="form-control" step="0.01" name="balance" placeholder="Balance" required>
</div>
<button class="btn btn-danger">Submit</button>
</form>
</div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
<script>
function msg(){
    alert('User creation Successful')
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
