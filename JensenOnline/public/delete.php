<?php
require_once("../includes/functions.php");
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=mysql_query("delete from room_booking where id='$id'");
if($query1)
{
    redirect_to("kalender.php");
}
}
?>