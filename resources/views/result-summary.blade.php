@extends('layout.app')
@section('title')
Result summary
@endsection

@section('page-content')
<!-- new section  -->
<div class="myDiver">

    <br />

    <div>
        <form method="post" id="result_form" name="result_form" action="https://playshrigoagems.com/results/resultSummaryOld" class="default">
            <table width="50%" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center" colspan="2" style=" font-size:28px; color: green;">
                        <br>
                        <b>Results Summary</b>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%">Select Game : </td>
                    <td style="width: 50%">
                        <select class="large" name='selectGame'>
                            <option class="default" value="0">Select Game</option>
                            <option class="default" value="ga">Golden-A</option>
                            <option class="default" value="gb">Shubhlakshami-A</option>
                            <option class="default" value="gc">Rajashri-A</option>
                            <option class="default" value="star3">GOA-Star</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%">Select Year : </td>
                    <td style="width: 50%">
                        <select class="large" name='selectYear'>
                            <option class="default" value="2025" selected>
                                2025 </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%">Result Slot : </td>
                    <td style="width: 50%">
                        <select class="large" name='selectMonth'>
                            <option class="default" value="1">Jan</option>
                            <option class="default" value="2">Feb</option>
                            <option class="default" value="3">Mar</option>
                            <option class="default" value="4">Apr</option>
                            <option class="default" value="5">May</option>
                            <option class="default" value="6">Jun</option>
                            <option class="default" value="7" selected>Jul</option>
                            <option class="default" value="8">Aug</option>
                            <option class="default" value="9">Sep</option>
                            <option class="default" value="10">Oct</option>
                            <option class="default" value="11">Nov</option>
                            <option class="default" value="12">Dec</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="submit" value="Show Results" class="button" name="submit">
                    </td>
                </tr>
            </table>
        </form>
        <br />
        <br>
    </div>
    </td>
    </tr>
    </table>

</div>
@endsection

@section('footer-script')
<script src='../../cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="../css/scroll/scroll.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: -20,
            maxDate: 0
        });
        $("#datepicker").datepicker("option", "dateFormat", "dd/mm/yy");
    });
</script>
@endsection