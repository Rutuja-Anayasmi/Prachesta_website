<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Prachesta Charitable Trust</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Generosity - Charity, Fundraising & Non-Profit HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/logo_1_.png" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" >      
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
        <script src="js/main.js"></script>
    </head> 

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="Loading......" /></span>
        </div>

        <!--  HEADER -->

<div id="header-placeholder"></div>
        <!-- end main-header  -->

        <!--  PAGE HEADING -->

        <!--<section class="page-header" data-stellar-background-ratio="0.1">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">


                        <h3>
                            Contact Us
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="#">Home</a> / Contact
                        </p>


                    </div>-->

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->


        <section class="section-content-block section-contact-block">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">
                        <div class="contact-form-block">
                            <h2 class="contact-title">Say hello to us</h2>
                            <p>Send us a message, and we'll get back to you soon</p>


                            <form id="contactForm" action="script.php" method="POST">

                                <div class="form-group">
                                    <input type="text" class="form-control" id="user_name" name="name" placeholder="Name" required />
                                </div>

                                  <div class="form-group">
                                    <select class="form-control" id="user_topic" name="sender" style="color:#999999;padding-left: 10px;" required>
                                    <option value="" disabled selected hidden>Who you are ?</option>
                                    <option value="Individual Donors">Individual Donors</option>
                                    <option value="Corporate Donors / Companies">Corporate Donors / Companies</option>
                                    <option value="High-Net-Worth Individuals (HNWI) / Angel Donors">High-Net-Worth Individuals (HNWI) / Angel Donors</option>
                                    <option value="Community Groups / Clubs">Community Groups / Clubs</option>
                                    <option value="Influencers / Celebrities">Influencers / Celebrities</option>
                                    <option value="Government Grants / Public Funds">Government Grants / Public Funds</option>
                                    </select>
                                </div>
                     
                                <div class="form-group">
                                    <input type="email" class="form-control" id="user_email" name="email" placeholder="Email" required />
                                </div>
                    
                                <div class="form-group">
                                    <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required />
                                </div>
                    
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="message" id="message" placeholder="Message" required></textarea>
                                </div>
                    
                                 <input type="hidden" name="formType" value="contact">
                                 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-custom">Send Now</button>
                                </div>
                            </form>
                    
                            <div id="form-status"></div> <!-- Displays success/error messages -->
                        </div>
                    </div>
                    

                    <div class="col-sm-6 wow fadeInRight">

                            <div class ="col-md-12">
                                <h2 class="contact-title">Contact us</h2>   
                                <p>Get in touch with us—we're here to help</p>
                            </div>               

                            <div class="col-md-12">

                                <ul class="contact-info">
                                    <li>
                                        <span class="icon-container"><i class="fa fa-home"></i></span>
                                        <address><p>
                                            Flat No. – 101 : Rajaldeep CHS,Plot No 67, Sector – 20,Koparkhairane, Navi Mumbai – 400 709    
                                        </p>   </address>
                                    </li>
                                    
                                    <li>
                                        <span class="icon-container"><i class="fa fa-phone"></i></span>
                                        <address><a href="#">+91 9920 252216 / </a></address>
                                        <address><a href="#">+91 9830 949375 / </a></address>
                                        <address><a href="#">+91 9920 066455</a></address>
                                    </li>
                                    
                                    <li>
                                        <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                        <address><a href="mailto:">prachestacharity@gmail.com</a></address>
                                    </li>                                    

                                    <li>
                                        <span class="icon-container"><i class="fa fa-globe"></i></span>
                                        <address><a href="#">prachesta.in</a></address>
                                    </li>                                    
                                    
                                </ul>                        

                            </div>

                    </div> <!--  end col-sm-6  -->                    

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> <!-- end .section-content-block  -->
        
<!-- jQuery (for AJAX) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        $("#contactForm").submit(function(event){
            event.preventDefault(); // Prevent page reload

            $.ajax({
                url: "script.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    response = response.trim(); // Remove extra spaces or new lines
                    console.log("Server response: " + response); // Debugging

                    if (response === "success") {  
                        $("#successMsg").show();
                        alert("Thank you for contacting us!!");
                        $("#contactForm")[0].reset();
                    } else {
                        alert("❌ Email failed: " + response);  // Will not show "Email failed: success" anymore
                    }
                }
            });

        });
    });
</script>


        <!--  MAIN CONTENT  -->

        <section class="section-contact-block">

                <div class="row">
                    
                    <div class ="col-md-12">
                        
                        <div class="section-google-map-block wow fadeInUp">

                            <div id="map_canvas">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.1482369836644!2d72.99465587425235!3d19.101151751184375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c0d46ec5a5fd%3A0x8a23c42bb1c74766!2sPrachesta%20Charity!5e0!3m2!1sen!2sin!4v1761656559236!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">                                
                            </iframe>
                            </div>


                        </div> <!-- end .section-content-block  --> 
                        
                    </div>

                </div> 

        </section>        
        
       
         <!-- START FOOTER  -->

<div id="footer-placeholder"></div>

    
        <!-- END FOOTER  -->
        
    <script>
    window.currentPage = "contact"; // For index.html
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Load header
        fetch('header.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('header-placeholder').innerHTML = data;
                highlightMenu(); // Run after header is loaded
            });

        // Load footer
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });
    });

    function highlightMenu() {
        if (!window.currentPage) return;

        var links = document.querySelectorAll('.nav.navbar-nav li a');

        links.forEach(function(link) {
            var page = link.getAttribute('data-page');
            if (page === window.currentPage) {
                link.classList.add('link-active');
            }
        });
    }

    window.addEventListener('load', function() {
        const container = document.getElementById('razorpay-button-form');
        if (!container) return;

        const script = document.createElement('script');
        script.src = "https://checkout.razorpay.com/v1/payment-button.js";
        script.setAttribute("data-payment_button_id", "pl_FR1fOi1ew0Qjjm");
        script.async = true;
        container.appendChild(script);
    });
</script>

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js "></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <!-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script> -->
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/custom-scripts.js"></script>

    </body>

</html>