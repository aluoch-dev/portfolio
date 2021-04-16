<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!--Other meta tags-->
    <meta name="author" content="Aluoch Laurine">
    <meta name="description" content="This is the portfolio of Aluoch Laurine - Software Engineer and Technical Writer.">
    <meta name="keywords" content="Aluoch Laurine, freelance, software engineer, technical writer, UI/UX">

    <!--CSS Styling-->
    <link rel="stylesheet" href="css/main.css"> 

    <!--fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Stick&display=swap" rel="stylesheet">

    <title> Aluoch Laurine| Fullstack Software Engineer</title>
</head>
<body>

<!--header files-->
    <?php
    require 'contact.php';

    ?>
<!--end header files-->

    <!--header section-->
    <section id= "header">
        <div class="top-navigation" id="top-navigation">
            <div id="left-navigation" style="float: left;">
                <a href="#home">Aluoch.Laurine</a>
            </div>
                            
            <div id ="right-navigation" style="float: right;"> 
                <a href="#about">About</a>
                <a href="#qualifications">Qualifications</a>
                <a href="#work">Work</a>
                <a href="#contact">Contact Me</a>
                <a href="javascript:void(0);" class="icon" onclick="navigationIcon()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </section>

    <!--about section-->
    <section id= "about">
        <center>
            <p id="identity">I am Laurine Aluoch. </p> 
            <p id="description">I am a fullstack software Developer. </p> 
            <p id ="action">Read my qualifications <a href="#"><b><i>here</i></b></a>, and check out my work <a href="#"><b><i>here</i></b></a>.</p> 
        </center>
    </section>

    <!--qualification section-->
    <section id= "qualifications">
        <center>
            <h2> QUALIFICATIONS</h2> 
            <div id = "qualifications-row" class="qualifications">
                <div id="completed-projects" class="qualifications-one">
                    <h3> Completed Projects</h3>
                    <h4><b>1</b></h4>
                </div>

                <div id="certifications" class="qualifications-two">
                    <h3> Certifications/Courses</h3>
                    <h4><b>1</b></h4>
                </div>

                <div id="current-role" class="qualifications-three">
                    <h3> Current Role</h3>
                    <h4><b>Freelancer Software Engineer</b></h4>
                </div>
            </div>
        </center>   
    </section>

    <!--work section-->
    <section id= "work-samples">
        <div id ="projects">
            <div id="row-one-projects">
                <div id="project-one"><h3>Personal Portfolio</h3></div>   
                <div id="project-two"><h3>coffee Shop</h3></div>
            </div>
            <div id ="row-two-projects">
                <div id="project-one"><h3>dairyYetu</h3></div>   
                <div id="project-two"><h3>Holiday Finder</h3></div>
            </div>
        </div>
    </section>

    <!--contact section-->
    <section id="contact">
            <div class="container">
                <div style="text-align:center">
                    <h2>Contact Me</h2>
                    <span>Please leave me a message to work with me:</span>
                </div>

                <div class="row">
                    
                    <div class="column">
                        <img src="./images/contact.jpG" style="width:100%">
                    </div>

                    <div id ="contact-form" class="column contact-form">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

                            <div id="first-name" class="contact-form-class">    
                                <label for="first_name">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your first name..">
                                <span class= "error"><?php echo $firstnameErr; ?></span>
                            </div>
                                
                            <div id="last-name" class="contact-form-class">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                <span class= "error"><?php echo $lastnameErr; ?></span>
                            </div>

                            <div id="email" class="contact-form-class">                               
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Your email address..">
                                <span class= "error"><?php echo $emailErr; ?></span>
                            </div>

                            <div id="phone" class="contact-form-class">                               
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" placeholder="Enter your phone number...">
                                <span class= "error"><?php echo $phoneErr; ?></span>
                            </div>

                            <div id="subject" class="contact-form-class">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Subject..">
                                <span class= "error"><?php echo $subjectErr; ?></span>
                            </div> 
                                
                            <div id="message" class="contact-form-class">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="Write message.."></textarea>
                                <span class= "error"><?php echo $messageErr; ?></span>
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </section>

    <!--footer-->
    <section id="footer">
        <p class="top_footer">Designed and Developed by Aluoch Laurine</p>
        <p class="bottom_footer">&copy; Copyright 2021</p>
    </section>

    <!--js scripts-->
    <script src="./js/main.js"></script>
    
</body>
</html>