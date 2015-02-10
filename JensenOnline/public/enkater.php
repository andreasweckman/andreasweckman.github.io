<?php
require_once("../includes/functions.php");	
confirm_logged_in();
?>

<?php
$pageTitle = "Enkater";
$section = "enkater";
include("layout/header.php");
?>
         
<main class="jumbotron">
   
  <?php #uploadFileForm.php

	//checking if the form has been submitted 
	if( isset($_POST['upload']) ){
		//display $_FILES content
		echo "<pre>";
		
		echo "</pre>";
	
		  if( is_uploaded_file($_FILES['upfile']['tmp_name']) ){
                //storing file data into variables
		
                $fileName = $_FILES['upfile']['name'];           		        //this is the actual name of the file   		           
                $fileTempName = $_FILES['upfile']['tmp_name'];					//this is the temporary name of the file     
				$fileSize =  $_FILES['upfile']['size']; 						//this is the filesize
                $path = "uploads2/";												//this is the path where you want to save the actual file 
                $newPathAndName = $path . $fileName;		//uploads/ruler.jpg					//this is the actual path and actual name of the file
				
				//you can use move_uploaded_file() to move and rename the temp file
                if( move_uploaded_file($fileTempName, $newPathAndName)  ){
                    echo "The file has been successfully uploaded<br /><br />";
				
                } else {
                    echo "Could not upload the file";
                }//end if move_uploaded_file
				
            }//end if is_uploaded_file
    }//end if isset upload
?>
    
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <title>Title of the document</title>
  </head>
  <body>
      <?php if($_SESSION['usertype']==1 || $_SESSION['usertype']==2): ?>
	<h2>Ladda upp enkäter här</h2>
	
    <form action="enkater.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="upfile" value=""/><br />
        <input class="btn btn-success" type="submit" name="upload" value="Ladda upp"/>
    </form>
      
      <?php endif; ?> 
        <br />
    <table class="table table-hover">
      <tr>
        <th>Fil:</th>
          <th>Öppna:</th>
        </tr>
        
         
        <?php
$dir = 'uploads2/';
$files = array_diff(scandir($dir), array('..', '.'));

foreach($files as $f){
    echo "<tr>";
    echo "<td>";
    echo $f;
    echo "</td>";
    echo "<td>";
    echo "<a href=" . $dir . $f . "><input type='button' name='openThis' value='Öppna' class='btn btn-success btn-xs'></button></a>";
    echo "</td>";
      echo "</tr>";  
}
?>
        
      </table>    
        
    <script src="app.js"></script>
</main>

<?php

include("layout/footer.php");
    
?>
