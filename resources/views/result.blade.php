@extends('layout.app')
@section('title')
Results
@endsection
@section('page-content')
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
                <td style=" width:100px; font-size: 16px;">
                    Date: <input type="text" id="datepicker" name="selectDate"
                        value="{{ old('selectDate', \Carbon\Carbon::parse($selectedDate ?? now())->format('d/m/Y')) }}">
                </td>
                <td align="left">
                    <input type="submit" value="Show" class="button">
                </td>
                <td align="right" style="font-size: 16px;">
                    <a href="/result-summary" class="button">Result Summary</a>
                </td>
            </tr>
        </table>
        <br />

        <style>
            .game-1 {
                background-color: #1E90FF;
                /* Dodger Blue */
            }

            .game-2 {
                background-color: #9b26af;
                /* Purple */
            }

            .game-3 {
                background-color: #e91e63;
                /* Pink */
            }

            .game-4 {
                background-color: #f44336;
                /* Red */
            }
        </style>

        <table class="table1" style="width: 100%">
            <thead>
                <tr>
                    <th style="background: #9dd151; color: white">Draw-Time</th>
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