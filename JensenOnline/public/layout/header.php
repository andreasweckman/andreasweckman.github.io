
<?php
$inactiveTime = 900;
if(isset($_SESSION['time'])) 
{
  $session_life = time() - $_SESSION['time'];
    
  if($session_life > $inactiveTime) 
    { 
        header("Location: logout.php"); 
    }
}

$_SESSION['time'] = time();
?>

<!DOCTYPE html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
    <script src="js/modernizr.custom.js"></script>
</head>

 <nav class="navbar navbar-default" role="navigation">
     <div class="container">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://127.0.0.1/git/Jensen/public">Jensen Online</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Sök på sidan..">
            </div>
            <button type="submit" class="btn btn-default">Sök</button>
          </form>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['fname']; ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Profil</a></li>
               <!-- <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li> -->
                <li class="divider"></li>
                 <li><a href="logout.php">Logga ut</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="pull-right"><a href="hjalp.php">Hjälp</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
</nav>


<?php
if($_SESSION['usertype']==1):
?>
    
    
    <div class="container">
        <header class="page-header">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public">Hem</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/nyheter.php" >Nyheter</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/meddelanden.php">Meddelanden</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/minklass.php">Min Klass</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/kurser.php">Kurser</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/kalender.php">Kalender</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/studieresultat.php">Studieresultat</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/enkater.php">Enkäter</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/registrera.php">Registrera</a>
            </div>
    </header>
    
<?php elseif ($_SESSION['usertype']==2): ?>
         
    <div class="container">
        <header class="page-header">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public">Hem</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/minklass.php">Min Klass</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/kurser.php">Kurser</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/nyheter.php">Nyheter</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/kalender.php">Kalender</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/meddelanden.php">Meddelanden</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/studieresultat.php">Studieresultat</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/enkater.php">Enkäter</a>
            </div>
        </header>
     
<?php else: ?>
         
     <div class="container">
        <header class="page-header">
            <div class="btn-group btn-group-justified">
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public">Hem</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/minklass.php">Min Klass</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/kurser.php">Kurser</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/nyheter.php">Nyheter</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/kalender.php">Kalender</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/meddelanden.php">Meddelanden</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/studieresultat.php">Studieresultat</a>
                <a class="btn btn-primary" type="button" href="http://127.0.0.1/git/Jensen/public/enkater.php">Enkäter</a>
            </div>
        </header>
    
<?php endif; ?>
        
        
        
        
        
        
  
            
      
      
      
      
      
      