<?php
require_once("../includes/functions.php");
confirm_logged_in();
?>

<?php
$pageTitle = "Hem";
$section = "hem";
include("layout/header.php");
?>

    <h1 id="valkommen">Välkommen till Jensen Online</h1>
    <br />

<main class="jumbotron">
    <div class="jumbotron">
        <h1>LÅNGSIKTIG ÄGARE MED FOKUS PÅ KVALITET</h1>
        <p class="lead">Under de senaste 18 åren har jag lagt ner min själ i att uppnå mitt mål - att skapa Sveriges bästa utbildningsföretag. Få saker slår känslan man får när man uppnår sina mål. Just den vinnande känslan vill            jag även att du ska känna, både under din tid på JENSEN och i framtiden.</p>
        <p><a class="btn btn-lg btn-success" href="http://127.0.0.1/git/Jensen/public/nyheter.php" role="button">Läs mer</a></p>
    </div>

    <div class="row marketing startSubs">
            <div class="col-lg-6">
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>Subheading</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                <h4>Subheading</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>

            <div class="col-lg-6">
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                <h4>Subheading</h4>
                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                <h4>Subheading</h4>
                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>
    </div>
        
</main>

<!-- Iframe Google Maps -->

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d508.52712224543706!2d18.056729077471942!3d59.34783683554652!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d6db3a789b3%3A0x458c0a310df590a1!2sTulegatan+44%2C+113+53+Stockholm!5e0!3m2!1ssv!2sse!4v1419947709219" width="1140" height="450" frameborder="0" style="border:0"></iframe>
      
<?php
include("layout/footer.php");
?>

<script src="js/app.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
