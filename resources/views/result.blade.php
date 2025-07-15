@extends('layout.app')
@section('title')
Results
@endsection
@section('page-content')
<br />
<div>
    <form method="post" id="result_form" name="result_form" action="https://playshrigoagems.com/results/showResultsOld" class="default">
        <table width="90%" cellpadding="0" cellspacing="0">
            <tr align="left">
                <td align="left" colspan="2" style=" font-size:22px">
                    Results
                    <br /><br />
                </td>
            </tr>
            <tr>
                <td style=" width:100px; font-size: 16px;">
                    Date: <input type="text" id="datepicker" name="selectDate" value="07/11/2025">
                </td>
                <td align="left">
                    <input type="submit" value="Show" class="button">
                </td>
                <td align="right" style="font-size: 16px;">
                    <a href="resultSummaryOld.html" class="button">Result Summary</a>
                </td>
            </tr>
        </table>
        <br />
        <table class="table1" style="width: 100%">
            <thead>
                <tr>
                    <th>Draw-Time</th>
                    <th style="background: #2056E6">Golden-A<br />60-69</th>
                    <th style="background: #A120E6">Shubhlakshami-A<br />20-29</th>
                    <th style="background: #E620AA">Rajashri-A<br />10-19</th>
                    <th style="background: #E63820">GOA-Star</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1:15 PM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">78</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">52</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">66</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">8 (567)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">1:00 PM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">80</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">77</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">26</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">7 (278)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">12:45 PM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">90</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">53</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">16</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">5 (159)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">12:30 PM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">80</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">14</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">95</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">8 (189)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">12:15 PM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">99</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">81</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">04</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">7 (890)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">12:00 PM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">80</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">22</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">21</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">2 (228)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">11:45 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">71</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">75</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">39</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">7 (377)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">11:30 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">69</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">48</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">62</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">6 (466)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">11:15 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">47</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">80</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">95</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">1 (489)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">11:00 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">10</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">94</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">28</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">2 (129)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">10:45 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">30</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">95</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">66</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">8 (369)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">10:30 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">35</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">40</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">17</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">8 (134)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">10:15 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">24</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">78</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">21</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">1 (227)</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th scope="row">10:00 AM </th>
                    <td class="redc" style="background: #2056E6; font-size: 20px; color: #FFFFFF">90</td>
                    <td class="redc" style="background: #A120E6; font-size: 20px; color: #FFFFFF">21</td>
                    <td class="redc" style="background: #E620AA; font-size: 20px; color: #FFFFFF">64</td>
                    <td class="redc" style="background: #E63820; font-size: 20px; color: #FFFFFF">7 (269)</td>
                </tr>
            </tbody>
        </table>

        <br /><br />
    </form>
    <br />
    <br />
</div>

</td>
</tr>
</table>

</div>
@endsection

@section('footer-script')
<script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: -60,
            maxDate: 0
        });
        $("#datepicker").datepicker("option", "dateFormat", "dd/mm/yy");

    });
</script>
@endsection