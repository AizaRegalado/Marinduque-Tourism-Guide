<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourism Guide</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">                                    
      </head>

      <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
            <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="img/my logo.png" alt="Site logo">
                                Tourism Guide
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">                                  
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Contact Us</a>
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .tm-top-bar -->

        <div class="tm-container-outer tm-position-relative" id="tm-section-4">
                        <div id="google-map"></div>
                        <form action="index.html" method="post" class="tm-contact-form">
                            <div class="form-group tm-name-container">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                            </div>
                            <div class="form-group tm-email-container">
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase">Send Message Now</button>
                        </form>
                    </div> <!-- .tm-container-outer -->

                <footer class="tm-container-outer">
                    <img src="img/map.jpeg" alt="Image">
                    <p class="mb-0">Marinduque</span> Tourism Guide
