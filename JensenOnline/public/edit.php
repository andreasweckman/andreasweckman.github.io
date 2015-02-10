<?php
require_once("../includes/functions.php");
confirm_logged_in();

?>
<?php
$pageTitle = "Edit";
$section = "edit";
include("layout/header.php");
?>

<html>
<body>
<?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{
$room_name=$_POST['room_name'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$query3=mysql_query("update room_booking set room_name='$room_name', start_time='$start_time', end_time='$end_time' where id='$id'");
if($query3)
{
redirect_to("kalender.php");
}
}
$query1=mysql_query("select * from room_booking where id='$id'");
$query2=mysql_fetch_array($query1);
?>
<form class="form-inline" role="form" method="POST" action="">
        <div class="form-group">
Room name:<select required class="form-control" id="room_name" name="room_name">
                    <option value="Lilla rummet">Lilla rummet</option>
                    <option value="Mellanrummet">Mellanrummet</option>
                    <option value="Stora rummet">Stora rummet</option>
            </select><?php echo $query2['room_name']; ?>
Start time:<input required type="date" name="start_time" value="<?php echo $query2['start_time']; ?>" />
End time:<input required type="date" name="end_time" value="<?php echo $query2['end_time']; ?>" /><br />
            
    <br />
<br />
<input type="submit" name="submit" value="update" />
               </div>
    </form>
<?php
}
?>
</body>
</html>

<?php
include("layout/footer.php"); 
?>