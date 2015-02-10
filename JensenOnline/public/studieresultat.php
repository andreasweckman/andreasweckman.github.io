8<?php
require_once("../includes/functions.php");
confirm_logged_in();
?>

<?php
$pageTitle = "Studieresultat";
$section = "studieresultat";
include("layout/header.php");    
?>
         
<main class="jumbotron">
   
    
    
    
<?php
if(isset($_POST["submit"])) {
require_once("../includes/db_connect.php");
try {
    $sth = $db->prepare("
                        SELECT id, pnumber, hashed_password, fname, lname, usertype INTO OUTFILE 'c://xampp/htdocs/git/jensen/dbdump/users.txt'
                        FIELDS TERMINATED BY ','
                        LINES TERMINATED BY '\r\n'
                        FROM users;");
    $sth->execute();
    
    echo "Sparad till jensen/dbdump/";                    
}
    catch(Execption $exeption) {
        echo "Något gick fel:";
        echo $exeption."<br />";
        
    }
    
try {
    $sth = $db->prepare("
                        SELECT id, room_name, start_time, end_time INTO OUTFILE 'c://xampp/htdocs/git/jensen/dbdump/booking.txt'
                        FIELDS TERMINATED BY ','
                        LINES TERMINATED BY '\r\n'
                        FROM room_booking;");
    $sth->execute();

}
    catch(Execption $exeption) {
        echo "Något gick fel:";
        echo $exeption."<br />";
        
    }
    
}

?>
    
     <form action="studieresultat.php" method="POST">
  <input type="submit" name="submit" class="btn-success" value="Kopiera databas" />  
    </form>

        
        
<script src="app.js"></script>
</main>

<?php
include("layout/footer.php");
?>
