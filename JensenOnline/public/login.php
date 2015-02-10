<?php
require_once("../includes/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jensen Online</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body class="home">

 <nav class="navbar navbar-inverse navbarlogin">
    <div class="container">
        <a class="navbar-brand" href="#">Jensen Online</a>
        <a id="hjalp" class="navbar-brand" href="http://127.0.0.1/git/Jensen/public/hjalputloggad.php">Hjälp</a>
    </div>
</nav>
    
<!-- PHP FOR LOGIN -->    
    
<?php
if(isset($_POST["submit"])){
	$pnumber = $_POST['pnumber'];
	$password = $_POST['password'];

try{

require_once("../includes/db_connect.php");

$query = "SELECT * ";
$query .= "FROM users ";
$query .= "WHERE pnumber = :pnumber ";

$ps = $db->prepare($query);

$result = $ps->execute(
	array(
	'pnumber'=>$pnumber, 
));

$user = $ps->fetch(PDO::FETCH_ASSOC);
    
if(password_verify($password, $user['hashed_password'])){
    //print_r($user);
	$_SESSION['pnumber'] = $user['pnumber'];
	$_SESSION['id'] = $user['id'];
    $_SESSION['usertype'] = $user['usertype'];
    $_SESSION['fname'] = $user['fname'];
	header("Location: index.php");
    //$url = "welcome.php";
    //echo '<script>window.location = "'.$url.'";</script>';
    
} else{
	echo "<script>alert ('Wrong username/password!')</script>";
}

} catch(Exception $exception){

	echo "Query failed, see error message below: <br /><br />";
	echo $exception. "<br /><br />";
}

}
else{

}

?>      
    
<!-- STOP PHP FOR LOGIN -->    
    
<!-- LOGIN FORM -->       
<div class="container logincontainer">
<main class="jumbotron logincont">
           
<form role="form" action="login.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-md-offset-4">
                <div>
                    <h3 class="text-center login-title">Välkommen till Jensen Online</h3>
                        <br />
                        <br />
                        <img class="profile-img" src="images/Symbol%20med%20lagerblad.jpg" alt="loginImage">
                    <form class="form-signin">
                        <input type="text" name="pnumber" class="form-control" placeholder="Ex 199010190202" required autofocus>
                        <input type="password" name ="password" class="form-control" placeholder="Password" required>
                        <br />
                        <br />
                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Logga in</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</form>
    
    <!-- STOP LOGIN FORM -->  
    
</main>
</div>
    
</body>
</html>
