<?php 
/*
**Filename: index.php
**Date: 04/26/2017
**Programmer: Renee Chertudi
*/
?>

<!DOCTYPE html>

<html lang="en">
    
<body>    
    
    <?php include('header.php'); ?>
        
<main><!-- Main content of website-->

 <div class="container-fluid">  
            <div class="row intro-content">
                <div class="col-md-4 col-md-offset-2">
                     <h1>Services We Provide</h1>
                    <h4>Guides, translators, Sherpas and more</h4>
                    <p>If you need it, we've got it</p>
                     <ul class="main-ul">
                         <li>Scuba instructors</li>
                          <li>Language translators </li>
                          <li>Tour guides </li>
                          <li>Mountain guides </li>

                    </ul>
                </div><!-- /.col-xs-6 -->
                <div class="col-md-4">
                 <img src="images/services.png" />
                </div><!-- /.col-xs-6 -->
            </div>
    </div>

    <div class="container-fluid">  
        <div class="row  main-content ">
                <div class="col-md-4">
                    <h2>Guides</h2>
                        <p>Experienced guides that go with you every step of the way, and stay by your side, even when it may seem inappropriate...</p>
                        <p>Travel the Nifty way!</p>
                        <p><img src="images/guides.png"><br></p>
                        <p> <a href="tours.php">Tours you'll never forget...</a></p>
                </div>
                         
                <div class="col-md-4">
                    <h2>Language and other Services</h2>
                        <p>Nifty has you covered with Chinese, Spanish and French -- over half of the major world languages! (Well, we're counting English, too.)</p>
                        <p>Major world languages spoken by native and second language speakers</p>
                    <center><img class="chart" src="images/language-chart.jpg"><br></center>
                        <p> <a href="contact-us.php">What kind of translator do you need?</a></p>
                        <p>We've done some crazy things over the years, and we're not proud of all of it, but we'd probably do it again if you ask us to.</p>
                        <p> <a href="contact-us.php">Call about our other services...</a></p>
                    </div>
             <div class="col-md-4">
                    <h2>Currency Converter</h2>
                        <!--Currency Converter widget by FreeCurrencyRates.com -->
                
                <div id='gcw_mainFX4ZTgb5c' class='gcw_mainFX4ZTgb5c'></div>
                <a id='gcw_siteFX4ZTgb5c' href='https://freecurrencyrates.com/en/'>FreeCurrencyRates.com</a>
                <script>function reloadFX4ZTgb5c(){ var sc = document.getElementById('scFX4ZTgb5c');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFX4ZTgb5c';sc.src = 'https://freecurrencyrates.com/en/widget-vertical?iso=USDEURGBPJPYCNYXUL&df=2&p=FX4ZTgb5c&v=fits&source=fcr&width=245&width_title=0&firstrowvalue=1&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=Currency%20Converter&tzo=420';var div = document.getElementById('gcw_mainFX4ZTgb5c');div.parentNode.insertBefore(sc, div);} reloadFX4ZTgb5c(); </script>
                <!-- put custom styles here: .gcw_mainFX4ZTgb5c{}, .gcw_headerFX4ZTgb5c{}, .gcw_ratesFX4ZTgb5c{}, .gcw_sourceFX4ZTgb5c{} -->
                <!--End of Currency Converter widget by FreeCurrencyRates.com -->
                    
               </div>
        </div>
    </div><!--end of container-->
</main>   
    
<?php include('footer.php'); ?>

</body>
</html>