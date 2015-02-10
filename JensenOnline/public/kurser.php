<?php
require_once("../includes/functions.php");	
confirm_logged_in();
?>

<?php
$pageTitle = "Kurser";
$section = "kurser";
include("layout/header.php");
?>
         
<main class="jumbotron">
    
<!-- Following code is 3 step to set courses with JS -->
    
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Steg 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Steg 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Steg 3</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Steg 1</h3>
                <div class="form-group">
                    <label class="control-label">Förnamn</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Ange förnamn"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Efternamn</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Ange efternamn" />
                </div>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Nästa</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Steg 2</h3>
                <div class="form-group">
                    <label class="control-label">Kurs</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Ange kurs" />
                </div>
                <div class="form-group">
                    <label class="control-label">Betyg</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Ange betyg"  />
                </div>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Nästa</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Steg 3</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Klar</button>
            </div>
        </div>
    </div>
</form>
</div>
     
<!-- STOP Following code is 3 step to set courses  -->
    
    
<!--  Following code is clast lists with JS  -->
     <br />
       <br />

	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Se kursplanen för respektive klass genom att klicka på klassen nedan:</h3>
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
                                <strong>Grundläggande webbapplikationsutveckling 40</strong>
                                Frontend och backendtekniker: HTML, CSS, JavaScript, PHP, MySQL, scrum, XP, W3C, standarder, MySQL, ramverk för JavaScript, versionshanteringssystem, kodgranskning samt lämna feedback.
                            </div>
                            <div class="col-md-6">
                                <strong>Programmeringskunskap 40</strong>
                                JavaScript, PHP och MySQL.
                            </div>
                            <div class="col-md-6">
                                <strong>Webblogik 30</strong>
                               Datorkommunikation, internets utveckling, grunderna i HTML, CSS, JavaScript, PHP och My SQL, insikt i andra utvecklingstekniker, gruppdynamik, grunderna i agila metoder samt sociala medier.
                            </div>
                            <div class="col-md-6">
                                <strong>Avancerad webbapplikationsutveckling 60</strong>
                                Frontend och backend, mashups, säkerhet, optimering, tillgänglighet, användbarhet samt mobila webbappar.
                            </div>
                            <div class="col-md-6">
                                <strong>Examensarbete 30</strong>
                                Genomförande av ett webbutvecklingsprojekt som ska innehålla/vara applicerbart på utbildningens alla kursmål.
                            </div>
                           <div class="col-md-6">
                                <strong>LIA 100</strong>
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
                                <strong>Grundläggande webbapplikationsutveckling 40</strong>
                                Frontend och backendtekniker: HTML, CSS, JavaScript, PHP, MySQL, scrum, XP, W3C, standarder, MySQL, ramverk för JavaScript, versionshanteringssystem, kodgranskning samt lämna feedback.
                            </div>
                            <div class="col-md-6">
                                <strong>Programmeringskunskap 40</strong>
                                JavaScript, PHP och MySQL.
                            </div>
                            <div class="col-md-6">
                                <strong>Webblogik 30</strong>
                               Datorkommunikation, internets utveckling, grunderna i HTML, CSS, JavaScript, PHP och My SQL, insikt i andra utvecklingstekniker, gruppdynamik, grunderna i agila metoder samt sociala medier.
                               <br />
                            </div>
                            
                            <div class="col-md-6">
                                <strong>Avancerad webbapplikationsutveckling 60</strong>
                                Frontend och backend, mashups, säkerhet, optimering, tillgänglighet, användbarhet samt mobila webbappar.
                            </div>
                            <div class="col-md-6">
                                <strong>Examensarbete 30</strong>
                                Genomförande av ett webbutvecklingsprojekt som ska innehålla/vara applicerbart på utbildningens alla kursmål.
                            </div>
                            <div class="col-md-6">
                                <strong>LIA 100</strong>
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
                                <strong>Grundläggande webbapplikationsutveckling 40</strong>
                                Frontend och backendtekniker: HTML, CSS, JavaScript, PHP, MySQL, scrum, XP, W3C, standarder, MySQL, ramverk för JavaScript, versionshanteringssystem, kodgranskning samt lämna feedback.
                            </div>
                            <div class="col-md-6">
                                <strong>Programmeringskunskap 40</strong>
                                JavaScript, PHP och MySQL.
                            </div>
                            <div class="col-md-6">
                                <strong>Webblogik 30</strong>
                                Datorkommunikation, internets utveckling, grunderna i HTML, CSS, JavaScript, PHP och My SQL, insikt i andra utvecklingstekniker, gruppdynamik, grunderna i agila metoder samt sociala medier.
                                <br />
                            </div>
                            
                            <div class="col-md-6">
                                <strong>Avancerad webbapplikationsutveckling 60</strong>
                                Frontend och backend, mashups, säkerhet, optimering, tillgänglighet, användbarhet samt mobila webbappar.
                            </div>
                            <div class="col-md-6">
                                <strong>Examensarbete 30</strong>
                                Genomförande av ett webbutvecklingsprojekt som ska innehålla/vara applicerbart på utbildningens alla kursmål.
                            </div>
                            <div class="col-md-6">
                                <strong>LIA 100</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
	</div>
</div>
        
<!-- STOP Following code is clast lists with JS  -->

<script src="js/app.js"></script>
</main>

<?php
include("layout/footer.php");
?>
