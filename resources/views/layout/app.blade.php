<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <script type='text/javascript' src="{{ asset('js/jquery-1.7.2.js') }}"></script>
    <script type="text/javascript">
        var base_url = "index.html";
        var chat_id;
        var user_id = "";

        var currTime = '';

        var localTime = +Date.now();

        var timeDiff = '';
    </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--<meta name="description" content="Reflect Template" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/jquery.wysiwyg.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css" media="screen" />

    <!-- Lottery result -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    @yield('additional-css')

    <script type='text/javascript' src="{{ asset('js/jquery-1.7.2.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/homejs200205.js') }}"></script>

    <!--Scripts FOR mENU-->
    <style type="text/css">
        #marqueecontainer {
            position: relative;
            width: 300px;
            /*marquee width */
            height: 200px;
            /*marquee height */
            background-color: #ECF4FE;
            /*EEEEEE;/* white;*/
            overflow: hidden;
            border: 1px solid #666666;
            /*padding: 5px;*/
            padding-top: 5px;
            padding-left: 10px;
            float: right;
        }
    </style>


    <style type="text/css">
        .buttonblink {
            background-color: #004A7F;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            border: none;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Arial;
            font-size: 20px;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            -webkit-animation: glowing 1500ms infinite;
            -moz-animation: glowing 1500ms infinite;
            -o-animation: glowing 1500ms infinite;
            animation: glowing 1500ms infinite;
        }

        @-webkit-keyframes glowing {
            0% {
                background-color: #B20000;
                -webkit-box-shadow: 0 0 3px #B20000;
            }

            50% {
                background-color: #FF0000;
                -webkit-box-shadow: 0 0 40px #FF0000;
            }

            100% {
                background-color: #B20000;
                -webkit-box-shadow: 0 0 3px #B20000;
            }
        }

        @-moz-keyframes glowing {
            0% {
                background-color: #B20000;
                -moz-box-shadow: 0 0 3px #B20000;
            }

            50% {
                background-color: #FF0000;
                -moz-box-shadow: 0 0 40px #FF0000;
            }

            100% {
                background-color: #B20000;
                -moz-box-shadow: 0 0 3px #B20000;
            }
        }

        @-o-keyframes glowing {
            0% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }

            50% {
                background-color: #FF0000;
                box-shadow: 0 0 40px #FF0000;
            }

            100% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }
        }

        @keyframes glowing {
            0% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }

            50% {
                background-color: #FF0000;
                box-shadow: 0 0 40px #FF0000;
            }

            100% {
                background-color: #B20000;
                box-shadow: 0 0 3px #B20000;
            }
        }
    </style>

</head>

<body style="color:#000000;">
    <div align="center">
        <div style="background-color:#990000">
            <marquee id="a" scrollamount="4" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();" style=" font-family:Verdana; color:#00000">
                <span style="color: white"></span>
                <a href="/"><span style="color: white">Click here to download PlayMainGoldenRajashri Mobile App</span></a> |
            </marquee>
        </div>

        <!-- PAGE AREA -->

        <div align="center" class="container" style="width: 100%; ">
            <table cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td style="background-color: #990000; width:5px; ">
                        <!-- Left image-->
                    </td>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" style="width: 100%">
                            <!--HEADER -->
                            <tr>
                                <td height="10px" colspan="3" align="center" style="background-color:#990000; width:23%">
                                    <img src="{{ asset('images/goalogo.png') }}" style="width:180px;" />
                                </td>
                                <!-- AJAX VIEWPORT-->
                                <td colspan="2" style="background-color:#990000">
                                    <div id="home_viewport" align="center" style="width: 100%; ">
                                        <table style="background-color:#990000; width:100%">
                                            <tr>
                                                <td colspan="16">
                                                    <div align="center">
                                                        <table width="100%" style="border: #e9561b; border-style: dotted;  ">
                                                            <tr>
                                                                <td align="center" style="">
                                                                    <span style=" font-size:18px;  vertical-align: auto; color:#FFFFFF">
                                                                        <span style="color: #fed22f; font-size: medium ">Date</span>
                                                                        <strong><br /><span id="todays_date">&nbsp;</span><br />
                                                                            <span style="color: #fed22f; font-size: medium ">Result Draw</span><br />
                                                                            <span id="result_time">&nbsp;</span></strong></span>
                                                                </td>
                                                                <td align="center">
                                                                    <span style=" font-size:24px; color:#FFFFFF"><strong>
                                                                            <table style="color:#990000; text-align:center; font-size:18px; width:100%; ">
                                                                                <tr>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/gb_back.png') }}'); background-size: 55px 55px; width:55px; height:55px; "> <strong>GA</strong><br /><span style="font-size:14px">60-69</span> </td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/gb_back.png') }}'); background-size: 55px 55px; width:55px; height:55px;"> <strong>SA</strong><br /><span style="font-size:14px">20-29</span> </td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/gb_back.png') }}'); background-size: 55px 55px; width:55px; height:55px;"><strong>RA</strong><br /><span style="font-size:14px">10-19</span> </td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/gb_back.png') }}'); background-size: 80px 100px; width:80px; height:90px; " rowspan=2><strong style="font-size:22px;"> GOA </strong><br /> Star </td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/gb_back.png') }}'); background-size: 55px 55px; width:55px; height:55px; font-size:20pt; color: rgb(255,0,0);"><span id="star3_single">&nbsp;</span></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/res_back.png') }}');  background-size: 55px 45px; width:55px; height:45px; font-size:20pt; color: rgb(255,0,0);"><span id="result_GA">&nbsp;</span></td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/res_back.png') }}'); background-size: 55px 45px; width:55px; height:45px; font-size:20pt; color: rgb(255,0,0);"><span id="result_GB">&nbsp;</span></td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/res_back.png') }}'); background-size: 55px 45px; width:55px; height:45px; font-size:20pt; color: rgb(255,0,0);"><span id="result_GC">&nbsp;</span></td>
                                                                                    <td style="background-repeat: repeat-y; background-position: center; background-image:url('{{ asset('images/res_back.png') }}'); background-size: 55px 45px; width:55px; height:45px; font-size:20pt; color: rgb(255,0,0);"><span id="star3_sp">&nbsp;</span></td>
                                                                                </tr>
                                                                            </table>
                                                                        </strong>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="16">
                                                    <div>
                                                        <table width="100%">
                                                            <tr>
                                                                <td align="left"><span style=" font-size:16px; color: #fed22f">Current Time<strong><br /><span style="color: #FFFFFF" id="currentTime">loading..</span></strong></span></td>
                                                                <td align="center"><span style=" font-size:20px; color:#fed22f">Next Draw Time<strong><br /><span style="color: #FFFFFF" id="nextDraw">&nbsp;</span></strong></span></td>
                                                                <td align="right"><span style=" font-size:16px; color:#fed22f">Time Remaining<strong><br /><span style="color: #FFFFFF" id="timeRemaining">&nbsp;</span></strong></span></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </td>
                                <td align="right" style="width:26%; background-color:#990000">
                                </td>
                            </tr>
                            <tr style="background-color: #343131; color: #9ED929; font-weight: bolder; font-size: medium;">
                                <td colspan="4"></td>
                                <td align="center">
                                    <table>
                                        <tr style="height: 30px">
                                            <td><a style="color: #9ED929 " href="/">Home &nbsp;&nbsp;&nbsp;&nbsp; </a></td>
                                            <td><span style="color: #000000">|</span></td>
                                            <td><a style="color: #9ED929 " href="/result"> &nbsp;&nbsp;&nbsp;&nbsp; Results </a></td>
                                            <td><span style="color: #000000">|</span></td>
                                            <td><a style="color: #9ED929 " href="/login"> &nbsp;&nbsp;&nbsp;&nbsp; Login </a></td>
                                        </tr>
                                    </table>
                                </td>
                                <td></td>
                            </tr>
                        </table>

                        <!-- page content  -->
                        @yield('page-content')


                        <div style="text-align: center; vertical-align: top; background-color: black;"><br />
                            <a href="/"><span style="color: rgb(102,204,0); font-size: large; vertical-align: middle; ">Click here to download Mobile App</span></a>
                        </div>
                        <div style="background-color: black; color: yellow; padding-top: 25px; padding-bottom: 25px; font-size: 24px ; font-weight: 200;  ">

                            For Results Contact : XXXXXXXXXX | XXXXXXXXXX<br />
                        </div>
                        <div style="background-color:#990000; color: #FFFFFF; font-size: 6px">
                            All the information shown here is sponsored and we warn you that Satta Matka gambling in your country,state may be banned or illegal.
                            We are not responsible for any issues or scam. We respect all country, state rules/laws. If you not agree with our site disclaimer. Please quit our site right now.
                        </div>
                        <div style="background-color:#990000; color: #FFFFFF; font-size: 6px">
                            You must be above 18 years to play.
                        </div>

                        <div style="background-color:#990000">

                        </div>
                        <div style="background-color:#990000; font-size: 6px;">
                            @Copyright2025 All rights reserved to S M Marketing. <input type="hidden" id="nxtDrTime" name="nxtDrTime" />
                        </div>

        </div>

        <br />
        <br />

        @yield('footer-script')
        <script>
            window.onload = function() {
                function updateClock() {
                    const now = new Date();
                    const timeString = now.toLocaleTimeString();
                    document.getElementById('currentTime').textContent = timeString;
                }

                updateClock();
                setInterval(updateClock, 1000);

                const today = new Date();
                const formatted = today.toLocaleDateString('en-GB'); // e.g., "21/07/2025"
                document.getElementById('todays_date').innerText = formatted;
            };
        </script>
</body>

</html>