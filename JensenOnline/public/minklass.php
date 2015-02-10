<?php
require_once("../includes/functions.php");	
confirm_logged_in();
?>

<?php
$pageTitle = "Min Klass";
$section = "minklass";
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
                $path = "uploads/";												//this is the path where you want to save the actual file 
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
	<h2>Ladda upp schema</h2>
	
    <form action="minklass.php" method="POST" enctype="multipart/form-data">
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

        $dir = 'uploads/';
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
        

        
<!-- Following is class lists with JS -->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container">
	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Se klasslista genom att klicka på respektive klass nedan</h3>
        </div>   
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                    <div class="col-xs-10">
                        WUK13A
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-1">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                              <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                    <div class="col-xs-10">
                        WUK14A
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-2">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                              <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                        </div>
                    </div>
                </div>
            </li>



            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3">
                    <div class="col-xs-10">
                        WUK15A
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-3">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                              <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                            <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                           <div class="col-md-6">
                                 <strong>Namn:</strong> Tomas Pettersson Personnr: 950101-1010
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
	</div>
</div>
        
<!-- STOP Following is class lists with JS -->

<script src="js/app.js"></script>
</main>

<?php
include("layout/footer.php");  
?>