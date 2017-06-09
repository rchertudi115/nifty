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
            <div class="row intro-content contact-page">
                 <div class="col-md-4 col-md-offset-2">
                     <h1>Many Ways to Contact Us</h1>
                    <h4>And we respond fast!</h4>
                    <p>Our expert staff can answer questions about</p>
                     <ul class="main-ul">
                         <li>Tour Packages and Prices </li>
                          <li>Airplane schedules </li>
                          <li>Car rentals </li>
                          <li>Hotel availability</li>
                         <li>Language issues</li>
                         <li>and much more</li>

                    </ul>
                </div><!-- /.col-md-4 -->
                
                <div class="col-md-4 contact-form">
                    
                    <form method="post" action="input.php" name="contact" id="contact">
                      <div class="form-group">
                        <label for="InputName">Your Full Name</label><br>
                        <input name="name" type="text"   placeholder="Your name" id="name" required><br>
                        <label for="exampleInputEmail1">Email address</label><br>
                        <input name="email" type="text" placeholder="Your email address" id="email" required><br>
                      </div>
                     
                      <div class="form-group">
                          
                      <label for="date">Around what date do you want to take the trip? </label><br>
                        <input type="date" name="date" id="date"><br>
                         <label for="tours[]">Which tours interest you?</label><br>
                        <select name="tours[]" size="4" multiple id="tours">
                            <option value="Paris">Paris, France</option>
                            <option value="Rome">Rome, Italy</option>
                            <option value="Greece">Athens, Greece</option>
                            <option value="Agra">Taj Mahal</option>
                            <option value="Kyoto">Kyoto, Japan</option>
                            <option value="All">All of the above!</option>
                            <option value="Other">Other (describe below)</option>
                        </select><br>
                          
                        <label for="comments">Is there any other travel info we can provide you?</label><br>
                        <textarea name="comments" id="comments" placeholder="Comments"  cols="30" rows="5"></textarea><br>
                          
                        </div>
                     
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
    </div> <!-- /.container-fluid -->

</main>   
    
<?php include('footer.php'); ?>

</body>
</html>