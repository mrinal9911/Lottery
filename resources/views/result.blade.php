@extends('layout.app')
@section('title')
Results
@endsection

@section('additional-css')
<link rel="stylesheet" href="{{ asset('css/style_table.css') }}" type="text/css" />

@endsection

@section('page-content')



<!-- Breadcrumb -->
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif




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
                    @auth
                    <a href="javascript:void(0);" id="openModal" class="button">Add Result</a>

                    @endauth
                    <a href="/result-summary" class="button">Result Summary</a>
                    @auth
                    <a href="{{ route('logout') }}" class="button">Logout</a>
                    @endauth
                </td>
            </tr>
        </table>
        <br />


        <!-- Models  -->
        <div id="customModal" class="custom-modal">
            <div class="custom-modal-content">
                <div class="custom-modal-header">
                    <h2>🎯 Add Lottery Result</h2>
                    <span class="close-btn" id="closeModal">&times;</span>
                </div>

                <form action="{{ route('lottery-results.store') }}" method="POST">
                    @csrf
                    <div class="custom-modal-body">
                        <div class="form-group">
                            <label>🎮 Game</label>
                            <select name="game_id" required>
                                <option disabled selected>Select game</option>
                                @foreach ($games as $game)
                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>⏰ Draw Time</label>
                            <select name="draw_time_id" required>
                                <option disabled selected>Select draw time</option>
                                @foreach ($times as $time)
                                <option value="{{ $time->id }}">{{ \Carbon\Carbon::parse($time->time)->format('h:i A') }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>📅 Draw Date</label>
                            <input type="date" name="draw_date" required>
                        </div>

                        <div class="form-group">
                            <label>🔢 Number</label>
                            <input type="number" name="number" min="0" max="99" required>
                        </div>
                    </div>

                    <div class="custom-modal-footer">
                        <button type="button" class="cancel-btn" id="closeModalFooter">Cancel</button>
                        <button type="submit" class="save-btn">💾 Save</button>
                    </div>
                </form>
            </div>
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

    const modal = document.getElementById("customModal");
    const openBtn = document.getElementById("openModal");
    const closeBtns = [document.getElementById("closeModal"), document.getElementById("closeModalFooter")];

    openBtn.onclick = () => modal.style.display = "block";

    closeBtns.forEach(btn => {
        if (btn) {
            btn.onclick = () => modal.style.display = "none";
        }
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>


@endsection