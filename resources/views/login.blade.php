<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from playshrigoagems.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jul 2025 07:52:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>GOA CASINO</title>

    <script type="text/javascript">
        var base_url = "index.html";
        var chat_id;
        var user_id = "1";
    </script>

    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/shuffle/shuffle.min.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.html" type="image/x-icon">
    <link rel="icon" href="images/favicon.html" type="image/x-icon">

    <!--MainGolden-->
    <script type='text/javascript' src="js/homejs.js"></script>


    <style type="text/css">
        #title_grad {
            background-image: linear-gradient(#990000, #E63820);
        }

        #grad {
            background-image: linear-gradient(#E63820, #900);
        }

        .numAmt {
            background: #41228e;
            border: 2px solid #E63820;
            padding: 7px;
            width: 150px;
            color: white;
            vertical-align: middle;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 26px;
        }
    </style>
</head>

<body>
    <div id="title_grad">
        <!--<header class="navigations fixed-tops center">-->
        <!--<nav class="navbar navbar-expand-lg navbar-dark center">-->
        <!-- <div class=" rounded" style="text-align: center; width: 100%">
                 <h3 style="font-family: Times New Roman; color: rgb(255,165,0); padding-left: 20px; padding-right: 20px; ">  GOA CASINO <br/> GOLDEN </h3>
            </div> -->
        <input type="hidden" id="nxtDrTime" name="nxtDrTime" value="" />
        <div style="text-align: center;  width: 100%">
            <a class="navbar-brand font-tertiary h3 " href="index.html"><img src="{{ asset('images/goalogo.png') }}" style="width: 100px" alt="Myself"></a><br />
            <span style="color: #EF870E ">Welcome to Goa Casino </span>
        </div>
        <div id="grad" class="rounded text-center p-5 shadow-down" style="text-align: center;  width: 100%;  vertical-align: middle; margin: 0 auto;  display: inline-block; background-color: #272525">
            <!-- <h4 class="mb-80">Contact Form</h4> -->
            <form action="{{ url('login') }}" method="POST" id="home" name="home" style="text-align: center; vertical-align: middle; color: white">
                @csrf
                <table align="center" border="0" cellpadding="0" cellspacing="0" style="font-size:26px; text-align: center; vertical-align: middle; width: 100%  ">
                    <tr style="text-align: center; color: whitesmoke">
                        <td colspan="2">
                            <strong>Login</strong><br />
                            <hr />
                        </td>
                    </tr>
                    <tr style="color: white; text-align: right;">
                        <td style="min-width: 120px">Email: &nbsp;</td>
                        <td align="left"><input type="email" id="email" name="email" class="numAmt" style="text-align: center; background-color: white; color: black;" required="true" autofocus /></td>
                    </tr>
                    <tr style="color: white; text-align: right;">
                        <td>Password: &nbsp;</td>
                        <td align="left"><input type="password" id="password" name="password" class="numAmt" style="text-align: center; background-color: white; color: black;" required="true" /></td>
                    </tr>
                    <tr style="color: white; text-align: right;">
                        <td>

                        </td>
                        <td align="left">
                            <br /><input class="btn btn-xs btn-light" type="submit" value="Submit">
                            <a href="/"><input class="btn btn-xs btn-light" type="button" value="Cancel"></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!--            <div class="rounded" style="text-align: center;  width: 100%; color: blue; font-weight: bold; text-align: center; display: inline-block; ">    	
                <div class="rounded" style="border-style: thick; border-color: red; ">
                     <span style="font-family: Times New Roman; font-size: xx-large; color: white;"> PLAY MAIN GOLDEN </span><br/>
                     <span style="font-family: Times New Roman; font-size: small; color: white;">( 60 - 69 )</span><br/><br/>
                </div>
            </div>-->
        <!--            <div style="text-align: center; width: 100%; ">
                <div class="collapse navbar-collapse text-center" id="navigation">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item active">
                           <a class="nav-link" href='https://playshrigoagems.com/main'>Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link"  href='https://playshrigoagems.com/results'>Results</a>
                         </li>
                         <li  class="nav-item">
                           <a class="nav-link" href='https://playshrigoagems.com/main'>Tickets</a>
                         </li>
                         <li  class="nav-item">
                           <a class="nav-link" href='https://playshrigoagems.com/login'>Login</a>
                         </li>
                     </ul>
                 </div>
             </div>-->
        <!--</nav>-->
        <!--</header>-->
    </div>
    <!-- Inner Content -->
    <!-- contact -->
    <section class="section-on-footer" data-background="images/backgrounds/bg-dots.png">
        <div class="containersss" style="text-align: center; width: 100%">

        </div>
    </section>
    <!-- /contact -->
    <!-- footer -->
    <footer class="bg-dark footer-section">
        <div class="border-top text-center border-dark p-5" style="font-size: x-small">
            <!--<br/><br/>
                    <span class="text-light"> All the information shown here is sponsored and we warn you that Satta Matka gambling in your country,state may be banned or illegal.</span>
                    <span class="text-light">We are not responsible for any issues or scam. We respect all country, state rules/laws. If you not agree with our site disclaimer. Please quit our site right now.</sspan>
                    <span class="text-light">You must be above 18 years to play online.</span>
                    <br/><span >Copyright ©<script>
                    var CurrentYear = new Date().getFullYear();
                    document.write(CurrentYear);
                    </script> All rights reserved to SM Marketing.</span>-->
        </div>
    </footer>
    <!-- /footer -->


</body>

<script>
    //    alert("Draw Time : " + countDownDate);
    // Update the count down every 1 second
    var x = setInterval(function() {
        //    alert("Draw Time : " + countDownDate)
        var drawDtTime = document.getElementById("nxtDrTime").value;
        var countDownDate = new Date(drawDtTime).getTime();

        // alert ("Curr Time : " + currTime);
        // Get todays date and time
        var now = new Date().getTime();
        // now.setSeconds(now.getSeconds() + 1);
        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        /* Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));*/
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("timeRemaining").innerHTML = twoDigit(hours) + ":" + twoDigit(minutes) + ":" + twoDigit(seconds);

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timeRemaining").innerHTML = "00:00:00";
        }
    }, 1000);

    function twoDigit(n) {
        return n > 9 ? "" + n : "0" + n;
    }
</script>


<!-- Mirrored from playshrigoagems.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jul 2025 07:52:50 GMT -->

</html>