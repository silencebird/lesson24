<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Rex : Home</title>
    <!-- Favicon -->
    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- initialize jQuery Library -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->

</head>
<body>

<!---->
<?php
if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) : the_post();

    endwhile;


else :

endif; ?>

    <!-- Start Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="contact-right wow fadeInRight">
                        <h2>Send a message</h2>
                        <form action="" class="contact" id="contact-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="contact_name" id="contact_name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email" name="contact_email" id="contact_email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="contact_comments" id="commentsText"></textarea>
                            </div>
                            <button type="submit" data-text="SUBMIT" class="button button-default email-submit" id="submit"><span>SUBMIT</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Contact section -->
<?php
 ?>
<!--<div id="container">-->
<!--    <div id="content">-->
<!---->
<!--        <div class="entry-content">-->
<!--                    --><?php //if(isset($emailSent) && $emailSent == true) { ?>
<!--                        <div class="thanks">-->
<!--                            <p>Thanks, your email was sent successfully.</p>-->
<!--                        </div>-->
<!--                    --><?php //} else { ?>
<!--                        --><?php //if(isset($hasError) || isset($captchaError)) { ?>
<!--                            <p class="error">Sorry, an error occured.<p>-->
<!--                        --><?php //} ?>
<!---->
<!--                        <form action="--><?php //the_permalink(); ?><!--" id="contactForm" method="post">-->
<!--                            <ul class="contactform">-->
<!--                                <li>-->
<!--                                    <label for="contactName">Name:</label>-->
<!--                                    <input type="text" name="contactName" id="contactName" value="--><?php //if(isset($_POST['contactName'])) echo $_POST['contactName'];?><!--" class="required requiredField" />-->
<!--                                    --><?php //if($nameError != '') { ?>
<!--                                        <span class="error">--><?//=$nameError;?><!--</span>-->
<!--                                    --><?php //} ?>
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <label for="email">Email</label>-->
<!--                                    <input type="text" name="email" id="email" value="--><?php //if(isset($_POST['email']))  echo $_POST['email'];?><!--" class="required requiredField email" />-->
<!--                                    --><?php //if($emailError != '') { ?>
<!--                                        <span class="error">--><?//=$emailError;?><!--</span>-->
<!--                                    --><?php //} ?>
<!--                                </li>-->
<!---->
<!--                                <li><label for="commentsText">Message:</label>-->
<!--                                    <textarea name="comments" id="commentsText" rows="20" cols="30" class="required requiredField">--><?php //if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?><!--</textarea>-->
<!--                                    --><?php //if($commentError != '') { ?>
<!--                                        <span class="error">--><?//=$commentError;?><!--</span>-->
<!--                                    --><?php //} ?>
<!--                                </li>-->
<!---->
<!--                                <li>-->
<!--                                    <input type="submit" id="submit">Send email</input>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <input type="hidden" name="submitted" id="submitted" value="true" />-->
<!--                        </form>-->
<!--                    --><?php //} ?>
<!--                </div><!-- .entry-content -->-->
<!---->
<!---->
<!--    </div><!-- #content -->-->
<!--</div><!-- #container -->-->
<?php
//
////?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>