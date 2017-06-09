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
                     <h1>Unforgettable Vacations</h1>
                    <h4>Paris, Athens, Kyoto and more</h4>
                    <p>Have you ever dreamed about</p>
                     <ul class="main-ul">
                         <li>Seeing the Mona Lisa up close</li>
                          <li>Swimming with the dolphins</li>
                          <li>Being a ninja </li>
                          <li>Touching the marble of the Taj Mahal</li>
                    </ul>
                </div><!-- /.col-xs-6 -->
                <div class="col-md-4">
                  <img src="images/best.png" />
                </div><!-- /.col-xs-6 -->
            </div>
    </div>

    <div class="container-fluid">  
        <div class="row  main-content">
                <div class="col-md-4">
                    <h2>See the world! </h2>
                        <p>Go places and do things you only dreamed about and see wonderous creatures that you only heard about in legends...</p>
                        <p>Look, but don't touch!</p>
                        <p><img src="images/loch-ness.jpg"><br></p>
                        <p> <a href="contact-us.php">Tell us about your dream trip...</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Weekly Special</h2>
                        <p>The special for this week is a 50% off trip for your family to see the Yukon in all its wintery glory!</p>
                        <p>That's right -- ship your family off to the Yukon and stay warm and content in your own home while they are away. Isn't that a great vacation for you?</p>
 
                        <p>Offer ends this Friday at 5:00pm, so call 503-555-1212 now!</p>
                         <p> <a href="services.php">More about Nifty services...</a></p>
                    
               </div>
                <div class="col-md-4">
                    <h2>Their Stories</h2>
                    <p><q>"It was an amazing tale of survival I'll be able to share with my family for generations to come!"</q> - Fred McBarker</p>
                    
                    <p><q>We laughed, we cried -- so many emotions, thanks to Nifty." </q>- Jane Doe</p>
                    
                     <p><q>"Wow -- all I can say is wow! -- it really is all I can say."  </q> Robin Cheese-Marten (esq.)</p>
                    
                    <p><q>"It rained so hard the day I left, the weather it was dry. The sun was so hot, I froze to death. It was an experience I can only call Nifty!"  </q> - Susanna Oh</p>
                    
                    <p> <a href="stories.php">Read more stories...</a></p>

                </div><!--end of row -->
        </div><!--end of container-->
    </div>

</main>   
    
<?php include 'footer.php'; ?>

</body>
</html>