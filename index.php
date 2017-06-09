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
                     <h1>Welcome to Nifty Tours!</h1>
                    <h4>For all your travel and tour needs</h4>
                    <p>We can help you</p>
                     <ul class="main-ul">
                         <li>plan a trip </li>
                          <li>book all types of reservations </li>
                          <li>locate an expert guide or translator </li>
                          <li>become submersed in another culture </li>
                         <li>do the unthinkable</li>
                         <li>and have the time of your life!</li>

                    </ul>
                </div><!-- /.col-xs-6 -->
                <div class="col-md-6">
                      <!-- Carousel items -->
                      <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="4000" id="myCarousel">
                      <div class="carousel-inner">
                        <div class="active item"><img src="images/contact.png" /></div>
                        <div class="item"><img src="images/best.png" /></div>
                        <div class="item"><img src="images/chinese.png" /><div>
                      </div>
                      <!-- Carousel nav -->
                      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                    </div><!-- /.col-xs-6 -->
                    </div>
                </div>
            </div>
    </div>

    <div class="container-fluid">  
        <div class="row main-content">
                <div class="col-md-4">
                    <h2>Travel Adventure</h2>
                    <p>Imagine yourself in another place, in another time, but still as the same person. Just a happier, more content, less irritated, less annoying person. That can be you. It should be you. Trust me.</p>
                   <p><img src="images/adventure.jpg"><br></p>
                   <p> <a href="tours.php">Tours you'll never forget...</a></p>    
                   
                </div>
                <div class="col-md-4">
                    <h2>Weekly Special</h2>
                        <p>The special for this week is a 50% off trip for your family to see the Yukon in all its wintery glory!</p>
                        <p>That's right -- ship your family off to the Yukon and stay warm and content in your own home while they are away. Isn't that a great vacation for you?</p>
                        <p>Offer ends this Friday at 5:00pm, so call 503-555-1212 now!</p>
                        <p> <a href="services.php">More about Nifty services...</a></p> 
               </div>
                <div class="col-md-4">
                    <h2>One Story</h2>
                    <p><q>"While I was in Mycenae, Greece on a Nifty Tour, our group came upon a cistern -- an ancient, long, dark underground storage area, that, legend has it, was the one Orestes hid in after he'd killed his mother, Clytemnestra. Even though our tour guide warned against it, I descended the icy steps to see what was inside.</q> </p>
                    <p><q>About halfway, I fell, crashing down to the cistern bottom. I didn't break anything, but I believe I strained my orestes. I was eventually able to crawl out of that deadly hole as my co-tourees took pictures. It's an exciting memory they'll never forget! Personally, I repressed the trauma."</q></p>
                        <p>- Agamemnonymous</p>
                        <p> <a href="stories.php">Read more stories...</a></p> 

                </div><!--end of row -->
        </div><!--end of container-->
    </div>


</main>   
    
<?php include('footer.php'); ?>
 
</body>
</html>