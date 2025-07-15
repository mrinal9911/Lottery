@extends('layout.app')
@section('title')
Home
@endsection

@section('page-content')
<br />
<a class="buttonblink" href="http://playgoastar.com/">Visit Goa-Star</a> <br /><br />
<a class="button" href="main5660.html?hview=home_content_vertical">Vertical View</a>

<br /><br />


<form method="post" id="home_content" name="home_content" class="default" action="https://playshrigoagems.com/main/print_ticket">

    <table>
        <tr>
            <td>
                <table border="0" cellpadding="0" cellspacing="0" style="font-size:16px">
                    <tr align="center" style="font-size:16px; color:#FF3300">
                        <td></td>
                        <td bgcolor="#FFFF99">MRP</td>
                        <td bgcolor="#FFFF99">&nbsp;Win&nbsp;</td>
                        <td bgcolor="#FFFF99">1</td>
                        <td bgcolor="#FFFF99">2</td>
                        <td bgcolor="#FFFF99">3</td>
                        <td bgcolor="#FFFF99">4</td>
                        <td bgcolor="#FFFF99">5</td>
                        <td bgcolor="#FFFF99">6</td>
                        <td bgcolor="#FFFF99">7</td>
                        <td bgcolor="#FFFF99">8</td>
                        <td bgcolor="#FFFF99">9</td>
                        <td bgcolor="#FFFF99">0</td>
                        <td bgcolor="#FFFF99">Qty</td>
                        <td bgcolor="#FFFF99">Amount</td>
                    </tr>
                    <tr height="5px">
                        <td colspan="16"><br /></td>
                    </tr>

                    <tr height="45px">
                        <td background="images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:16px"><strong>Golden-A Gems</strong></td>
                        <td style="border:1px solid #FFFF99;  font-size:16px" align="center">11</td>
                        <td align="center" style=" font-size:16px">100</td>
                        <td align="center"><input type="text" id="g1" name="g1" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g2" name="g2" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g3" name="g3" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g4" name="g4" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g5" name="g5" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g6" name="g6" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g7" name="g7" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g8" name="g8" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g9" name="g9" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="g0" name="g0" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="gQty" name="gQty" class="numQty" disabled="disabled" style="text-align:right" /></td>
                        <td align="center"><input type="text" id="gAmt" name="gAmt" class="numAmt" disabled="disabled" style="text-align:right" /></td>
                    </tr>


                    <tr height="45px">
                        <td background="images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:16px"><strong>Shubhlakshami-A Gems</strong></td>
                        <td style="border:1px solid #FFFF99; font-size:16px" align="center">11</td>
                        <td align="center" style=" font-size:16px">100</td>
                        <td align="center"><input type="text" id="r1" name="r1" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r2" name="r2" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r3" name="r3" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r4" name="r4" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r5" name="r5" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r6" name="r6" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r7" name="r7" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r8" name="r8" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r9" name="r9" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="r0" name="r0" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="rQty" name="rQty" class="numQty" disabled="disabled" style="text-align:right" /></td>
                        <td align="center"><input type="text" id="rAmt" name="rAmt" class="numAmt" disabled="disabled" style="text-align:right" /></td>
                    </tr>
                    <tr height="45px">
                        <td width="140px" background="images/buttonshape.png" style="padding-left:15px; color:#FF6600; font-size:16px"><strong>Rajashri-A Gems</strong></td>
                        <td style="border:1px solid #FFFF99; font-size:16px" align="center">11</td>
                        <td align="center" style=" font-size:16px">100</td>
                        <td align="center"><input type="text" id="s1" name="s1" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s2" name="s2" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s3" name="s3" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s4" name="s4" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s5" name="s5" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s6" name="s6" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s7" name="s7" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s8" name="s8" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s9" name="s9" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="s0" name="s0" class="numinput" maxlength="3" /></td>
                        <td align="center"><input type="text" id="sQty" name="sQty" class="numQty" disabled="disabled" style="text-align:right" /></td>
                        <td align="center"><input type="text" id="sAmt" name="sAmt" class="numAmt" disabled="disabled" style="text-align:right" /></td>
                    </tr>

                    <tr height="45px">
                        <td colspan="3"></td>
                        <td colspan="5"></td>
                        <td colspan="3"></td>
                        <td>
                        </td>
                        <td>Total</td>
                        <td align="center"><input type="text" id="totalQty" name="totalQty" class="numQty" disabled="disabled" style="text-align:right" /></td>
                        <td align="center"><input type="text" id="totalAmt" name="totalAmt" class="numAmt" disabled="disabled" style="text-align:right" /></td>
                    </tr>
                    <tr height="45px">
                        <td align="left">
                            <!--    <a href="https://playshrigoagems.com/home/delete_ticket?uid=1" class="button">Delete Ticket</a>-->
                            <input type="text" id="hAdvSlot" name="hAdvSlot" style=" display: none;" />
                            <input type="button" name="advbtn" id="advbtn" onclick="advance_slot(1)" class="button" value="Advance Slot">
                        </td>
                        <td align="left" colspan=7>
                            <div id="curslot" style="display:none; "></div>
                            <div id="advslot" style="display:none">
                                <select name='advanceSlot' id="advanceSlot">
                                </select>
                            </div>
                        </td>

                        <td align="right" colspan=7>
                            <input type="button" onclick="ClearAllControls()" class="button" value="Clear All">
                            <input type="button" id="mySubmitButton" onclick="print_ticket()" class="button" value="Print">
                            <!--<input type="submit" onclick="print_ticket()" class="button" value="PrintS">-->
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <div id="result_viewport" align="center">
                    <table style="color: #990000; text-align:center">
                        <tr>
                            <td align="center"><span style=" font-size:14px; color:#990000"><strong><span id="result_time">&nbsp;</span></strong></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="background-repeat: repeat-y; background-image:url('images/res_back_vertical.html'); background-position:center; width:50px; height:42px; color:#990000; font-size:18px"><strong><span id="result_GA">&nbsp;</span></strong></td>
                        </tr>
                        <tr>
                            <td align="center" style="background-repeat: repeat-y; background-image:url('images/res_back_vertical.html'); background-position:center; width:50px; height:42px; color:#990000; font-size:18px"><strong><span id="result_GB">&nbsp;</span><strong></td>
                        </tr>
                        <tr>
                            <td align="center" style="background-repeat: repeat-y; background-image:url('images/res_back_vertical.html'); background-position:center; width:50px; height:40px; color:#990000; font-size:18px"><strong><span id="result_GC">&nbsp;</span><strong></td>
                        </tr>
                        <tr>
                            <td><br /><br /><br /><br /><br /></td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</form>
</td>
</tr>
</table>
</div>

@endsection

@section('footer-script')
<script>
   
    var x = setInterval(function() {
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
            //location.reload(); 
        }
    }, 1000);

    function twoDigit(n) {
        return n > 9 ? "" + n : "0" + n;
    }
</script>

<script type="text/javascript">
    $('#g1').keyup(function() {
        doCalculations();
    });
    $('#g2').keyup(function() {
        doCalculations();
    });
    $('#g3').keyup(function() {
        doCalculations();
    });
    $('#g4').keyup(function() {
        doCalculations();
    }); -
    $('#g5').keyup(function() {
        doCalculations();
    });
    $('#g6').keyup(function() {
        doCalculations();
    });
    $('#g7').keyup(function() {
        doCalculations();
    });
    $('#g8').keyup(function() {
        doCalculations();
    });
    $('#g9').keyup(function() {
        doCalculations();
    });
    $('#g0').keyup(function() {
        doCalculations();
    });

    $('#r1').keyup(function() {
        doCalculations();
    });
    $('#r2').keyup(function() {
        doCalculations();
    });
    $('#r3').keyup(function() {
        doCalculations();
    });
    $('#r4').keyup(function() {
        doCalculations();
    });
    $('#r5').keyup(function() {
        doCalculations();
    });
    $('#r6').keyup(function() {
        doCalculations();
    });
    $('#r7').keyup(function() {
        doCalculations();
    });
    $('#r8').keyup(function() {
        doCalculations();
    });
    $('#r9').keyup(function() {
        doCalculations();
    });
    $('#r0').keyup(function() {
        doCalculations();
    });



    $('#s1').keyup(function() {
        doCalculations();
    });
    $('#s2').keyup(function() {
        doCalculations();
    });
    $('#s3').keyup(function() {
        doCalculations();
    });
    $('#s4').keyup(function() {
        doCalculations();
    });
    $('#s5').keyup(function() {
        doCalculations();
    });
    $('#s6').keyup(function() {
        doCalculations();
    });
    $('#s7').keyup(function() {
        doCalculations();
    });
    $('#s8').keyup(function() {
        doCalculations();
    });
    $('#s9').keyup(function() {
        doCalculations();
    });
    $('#s0').keyup(function() {
        doCalculations();
    });

    function print_ticket() {
        alert("Please visit our new website, to book the tickets!");

    }

    function advance_slot() {
        //alert(V);
        if (V == 'advslot') {
            V = 'curslot';
            document.getElementById('advslot').style.display = 'block';
            $('#advbtn').val('Current Slot');
            $('#hAdvSlot').val('advance');
        } else {
            V = 'advslot';
            document.getElementById('curslot').style.display = 'block';
            document.getElementById('advslot').style.display = 'none';
            $('#advbtn').val('Advance Slot');
            $('#hAdvSlot').val('current');
        }
    }

    function switch_vertical() {
        $.session.set()
        window.location = "home.html";
    }

    function switch_horizontal() {
        window.location = "home.html";
    }

    function show(value) {
        //document.getElementById( value ).style.display = 'block';
        if (value == 'acc') {
            document.getElementById('acc').style.display = 'block';

        } else
            document.getElementById('acc').style.display = 'none';
    }

    function doCalculations() {
        var gTotal = Number($('#g1').val()) + Number($('#g2').val()) + Number($('#g3').val()) + Number($('#g4').val()) + Number($('#g5').val()) + Number($('#g6').val()) + Number($('#g7').val()) + Number($('#g8').val()) + Number($('#g9').val()) + Number($('#g0').val());

        var rTotal = Number($('#r1').val()) + Number($('#r2').val()) + Number($('#r3').val()) + Number($('#r4').val()) + Number($('#r5').val()) + Number($('#r6').val()) + Number($('#r7').val()) + Number($('#r8').val()) + Number($('#r9').val()) + Number($('#r0').val());

        //var bTotal = Number($('#b1').val()) + Number($('#b2').val()) + Number($('#b3').val()) + Number($('#b4').val()) + Number($('#b5').val()) + Number($('#b6').val()) + Number($('#b7').val()) + Number($('#b8').val()) + Number($('#b9').val()) + Number($('#b0').val());

        var sTotal = Number($('#s1').val()) + Number($('#s2').val()) + Number($('#s3').val()) + Number($('#s4').val()) + Number($('#s5').val()) + Number($('#s6').val()) + Number($('#s7').val()) + Number($('#s8').val()) + Number($('#s9').val()) + Number($('#s0').val());


        $('#gQty').val(gTotal);
        $('#rQty').val(rTotal);
        //$('#bQty').val(bTotal);
        $('#sQty').val(sTotal);

        $('#gAmt').val(Number(gTotal) * 11);
        $('#rAmt').val(Number(rTotal) * 11);
        //$('#bAmt').val(Number(bTotal) * 11);
        $('#sAmt').val(Number(sTotal) * 11);

        $('#totalAmt').val(Number($('#gAmt').val()) + Number($('#rAmt').val()) + Number($('#sAmt').val()));
        $('#totalQty').val(Number($('#gQty').val()) + Number($('#rQty').val()) + Number($('#sQty').val()));

    }

    jQuery.fn.ForceNumericOnly =
        function() {
            return this.each(function() {
                $(this).keypress(function(e) {
                    var key = e.Which || e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
                    return (
                        key == 8 ||
                        key == 9 ||
                        key == 46 ||
                        (key >= 37 && key <= 40) ||
                        (key >= 48 && key <= 57));
                });
            });
        };

    $("#g1").ForceNumericOnly();
    $("#g2").ForceNumericOnly();
    $("#g3").ForceNumericOnly();
    $("#g4").ForceNumericOnly();
    $("#g5").ForceNumericOnly();
    $("#g6").ForceNumericOnly();
    $("#g7").ForceNumericOnly();
    $("#g8").ForceNumericOnly();
    $("#g9").ForceNumericOnly();
    $("#g0").ForceNumericOnly();

    $("#r1").ForceNumericOnly();
    $("#r2").ForceNumericOnly();
    $("#r3").ForceNumericOnly();
    $("#r4").ForceNumericOnly();
    $("#r5").ForceNumericOnly();
    $("#r6").ForceNumericOnly();
    $("#r7").ForceNumericOnly();
    $("#r8").ForceNumericOnly();
    $("#r9").ForceNumericOnly();
    $("#r0").ForceNumericOnly();


    $("#s1").ForceNumericOnly();
    $("#s2").ForceNumericOnly();
    $("#s3").ForceNumericOnly();
    $("#s4").ForceNumericOnly();
    $("#s5").ForceNumericOnly();
    $("#s6").ForceNumericOnly();
    $("#s7").ForceNumericOnly();
    $("#s8").ForceNumericOnly();
    $("#s9").ForceNumericOnly();
    $("#s0").ForceNumericOnly();
</script>
@endsection