<?php


require_once("../includes/functions.php");	
confirm_logged_in();

?>


<?php


$pageTitle = "Registrera";
$section = "registrera";
include("layout/header.php");
    
?>

<main class="jumbotron">

<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<style>
		.error{
			color:red;
		}
	</style>

<body>
<?php

if(isset($_POST["submit"])){
	$pnumber = $_POST['pnumber'];
	$password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $usertype = $_POST['usertype'];
    $edu_id = $_POST['edu_id'];
    



try{

$hashedPass = password_hash($password, PASSWORD_BCRYPT);

require_once("../includes/db_connect.php");


$query = "INSERT INTO users (pnumber, hashed_password, fname, lname, usertype, edu_id)";
$query .= "VALUES (:pnumber, :password, :fname, :lname, :usertype, :edu_id) ";



$ps = $db->prepare($query); //prepared statements

$result = $ps->execute(
	array(
	'pnumber'=>$pnumber, 
	'password'=>$hashedPass,
    'fname'=>$fname,
    'lname'=>$lname,
    'usertype'=>$usertype,
    'edu_id'=>$edu_id
)); //Erhåller värdet true eller false. arrayen i execute är tilldelade värden för placeholders i SQL -> :username AND :password


if(!$result){
	echo "Signup failed!";
}


} catch(Exception $exception){

	echo "Query failed, see error message below: <br /><br />";
	echo $exception. "<br /><br />";
}


$user = $ps->fetch(PDO::FETCH_ASSOC);// associative array
//echo $user['id'];

}
else{

}




?>



	<h1>Skapa användare</h1>
	
    
    <form action="registrera.php" method="POST">
	<table class="table">
		<tr class="active">
			<td>Username: </td>
			<td><input type="text" name="pnumber" /></td>
		</tr>
		<tr class="active">
			<td>Password: </td>
			<td><input type="password" name="password" /></td>
		</tr>
        <tr class="active">
			<td>First name: </td>
			<td><input type="text" name="fname" /></td>
		</tr>
        <tr class="active">
			<td>Last name: </td>
			<td><input type="text" name="lname" /></td>
		</tr>
       <tr class="active"><td>Usertype: </td>
            <td>
        <select name="usertype" >
				  <option value="">Choose usertype</option>
				  <option value="1">Admin</option>
				  <option value="2">Teacher</option>
				  <option value="3">Student</option>
				</select>
                </td>
            </tr>
        <tr class="active"><td>Class: </td>
            <td>
        <select name="edu_id" >
				  <option value="">Choose class</option>
				  <option value="WUK14">WUK14</option>
				  <option value="COBOL14">COBOL14</option>
				  
				</select>
                </td>
            </tr>
		<tr>
			<td><input type="submit" name="submit" class="btn-success" value="Register" /></td>

		</tr>
	</table>
    
    

	</body>

</main>



<?php

include("layout/footer.php");
    
?>


     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
