@extends('layout.app')
@section('title')
Results
@endsection

@section('additional-css')
<link rel="stylesheet" href="/css/style_table.css" type="text/css" />

@endsection

@section('page-content')


<style>
    .game-1 {
        background-color: #1E90FF !important;
        background: #1E90FF !important;

        /* Dodger Blue */
    }

    .game-2 {
        background-color: #A120E6 !important;
        background: #A120E6 !important;

        /* Purple */
    }

    .game-3 {
        background-color: #E63820 !important;
        background: #E63820 !important;

        /* Pink */
    }

    .game-4 {
        background-color: #f44336 !important;
        background: #1E90FF !important;

        /* Red */
    }

    .button {
        display: inline-block;
        padding: 8px 16px;
        font-size: 16px;
        text-decoration: none;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        margin-left: 8px;
        text-align: center;
    }

    .button:hover {
        background-color: #0056b3;
        color: white;
    }

    /* Improve jQuery UI dialog appearance */
</style>





<br />
<div>
    <form method="post" id="result_form" name="result_form" method="post" action="{{ route('result') }}" class="default">
        @csrf
        <table width="90%" cellpadding="0" cellspacing="0">
            <tr align="left">
                <td align="left" colspan="2" style=" font-size:22px">
                    Results
                    <br /><br />
                </td>
            </tr>
            <tr>
                <td style="width: 200px; font-size: 16px;">
                    Date:
                    <input type="text" id="datepicker" name="selectDate"
                        style="padding: 6px; width: 120px;"
                        autocomplete="off"
                        value="{{ old('selectDate', \Carbon\Carbon::parse($selectedDate ?? now())->format('d/m/Y')) }}">
                </td>
                <td align="left">
                    <input type="submit" value="Show" class="button">
                </td>

                <!-- old code  -->
                <!-- <td align="right" style="font-size: 16px;">
                    <a href="{{ route('lottery-results.create') }}" class="button">Add Result</a>
                    <a href="/result-summary" class="button">Result Summary</a>
                </td> -->

                <!-- new code  -->
                <td align="right" style="font-size: 16px;">
                    <a href="javascript:void(0)" id="openDialog" class="button">Add Result</a>
                    <a href="/result-summary" class="button">Result Summary</a>
                    <!-- <button id="openDialog" type="button" class="button">Add Result</button>
                    <a href="/result-summary" class="button">Result Summary</a> -->
                </td>
            </tr>
        </table>
        <br />


        <!-- Models  -->
        <div id="iframeModal" title="Add Lottery Result" style="display:none;">
            <iframe id="iframeContent" src="" style="width:100%; height:400px; border:none;"></iframe>
        </div>






        <table class="table1" style="width: 100%">
            <thead>
                <tr>
                    <th style="background: #9dd151; color: white; padding:0px 10px;">Draw-Time</th>
                    @foreach($games as $game)
                    <th class="game-{{ $game->id }}" style="color: white">
                        {{ $game->name }}<br />
                        {{ $game->number_range }}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($drawTimes as $time)
                <tr>
                    <th style="background: #9dd151; color: white" scope="row">
                        {{ \Carbon\Carbon::parse($time->time)->format('g:i A') }}
                    </th>
                    @foreach($games as $game)
                    @php
                    $result = $results->first(function ($res) use ($time, $game) {
                    return $res->draw_time_id == $time->id && $res->game_id == $game->id;
                    });
                    @endphp
                    <td class="game-{{ $game->id }}" style="font-size: 20px; color: white; text-align: center;">
                        {{ $result ? $result->number . ($result->total_ticket ? ' (' . $result->total_ticket . ')' : '') : '-' }}
                    </td>
                    @endforeach
                </tr>
                @endforeach
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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- Datepicker initialization -->
<script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: -60,
            maxDate: 0,
            dateFormat: "dd/mm/yy",
            changeMonth: true,
            changeYear: true,
            showAnim: "fadeIn"
        });
    });

    $(function() {
        $("#iframeModal").dialog({
            autoOpen: false,
            modal: true,
            width: 600,
            height: 500,
            resizable: false
        });

        $("#openDialog").on("click", function() {
            $("#iframeContent").attr("src", "{{ route('lottery-results.create') }}");
            $("#iframeModal").dialog("open");
        });
    });
</script>


@endsection