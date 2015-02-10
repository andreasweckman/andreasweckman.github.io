<?php
require_once("../includes/functions.php");	
confirm_logged_in();
?>
<?php
$pageTitle = "Kalender";
$section = "kalender";
include("layout/header.php");
?>
         
<main class="jumbotron">

    <h3>Boka ditt rum nedan</h3>
     <form class="form-inline" role="form" method="POST" action="">
        <div class="form-group">
            <select required class="form-control" id="room_name" name="room_name">
                    <option value="Lilla rummet">Lilla rummet</option>
                    <option value="Mellanrummet">Mellanrummet</option>
                    <option value="Stora rummet">Stora rummet</option>
            </select>
            <input required class="input" id="start_time" name="start_time" type="date">
            <input required class="input" id="end_time" name="end_time" type="date">
            <input required class="btn btn-success" type="submit" value="Submit" name="submit"/>
        </div>
    </form>

    <br />
    <br />
    

<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=jensen",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
$sql = "INSERT INTO room_booking (room_name, start_time, end_time)
VALUES ('".$_POST["room_name"]."','".$_POST["start_time"]."','".$_POST["end_time"]."')";
if ($dbh->query($sql)) {
    
}
else{
    echo "<script>alert('Booking failed!')</script>";
}

$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>
    
<?php

include('config.php');
$query1=mysql_query("select * from room_booking");
echo "<table class='table'><tr><th>ID</th><th>Rum</th><th>Från</th><th>Till</th><td></td><td></td></tr>";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['id']."</td>";
echo "<td>".$query2['room_name']."</td>";
echo "<td>".$query2['start_time']."</td>";
echo "<td>".$query2['end_time']."</td>";
echo "<td><a href='edit.php?id=".$query2['id']."'><button class='btn-success'>Edit</button></a></td>";
echo "<td><a href='delete.php?id=".$query2['id']."'><button class='btn-danger'>Delete</button></a></td><tr>";
   
}

?> 
    
    </table>
    <br />
    <br />

<!-- Iframe Google Calendar -->    
 
<iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=2&amp;hl=sv&amp;bgcolor=%23ff6600&amp;src=qhp3u22m5fbaptu495kam9cfp8%40group.calendar.google.com&amp;color=%23333333&amp;ctz=Europe%2FStockholm" style=" border:solid 1px #777 " width="1000" height="600" frameborder="2" scrolling="no"></iframe>

<script src="app.js"></script>
</main>

<?php
include("layout/footer.php");
?>
