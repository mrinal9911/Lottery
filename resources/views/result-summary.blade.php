@extends('layout.app')
@section('title')
Result summary
@endsection

@section('additional-css')
<link rel="stylesheet" href="/css/scroll/scroll.css" type="text/css" />

@endsection

@section('page-content')
<!-- new section  -->
<div class="myDiver">

    <div>
        <form method="post" id="result_form" name="result_form" method="post" action="{{ route('result-summary') }}" class="default">
            @csrf
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
                        <select name="selectGame" class="large" required>
                            <option value="0">Select Game</option>
                            @foreach ($games as $g)
                            <option value="{{ $g->id }}" {{ old('selectGame') == $g->id ? 'selected' : '' }}>
                                {{ $g->name }}
                            </option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%">Select Year : </td>
                    <td style="width: 50%">
                        <select name="selectYear" class="large" required>
                            @for ($y = now()->year; $y >= 2020; $y--)
                            <option value="{{ $y }}" {{ old('selectYear', now()->year) == $y ? 'selected' : '' }}>
                                {{ $y }}
                            </option>
                            @endfor
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%">Result Slot : </td>
                    <td style="width: 50%">
                        <select name="selectMonth" class="large" required>
                            @foreach (range(1, 12) as $m)
                            <option value="{{ $m }}" {{ old('selectMonth', now()->month) == $m ? 'selected' : '' }}>
                                {{ date('F', mktime(0, 0, 0, $m, 10)) }}
                            </option>
                            @endforeach
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

    {{-- Results Table --}}
    @php
    // Group results by draw time (time string)
    $grouped = $results->groupBy(function ($item) {
    return $item->drawTime->time; // Group by time like 10:00:00
    });

    // Get all unique day numbers (e.g., 14, 15...30)
    $dates = $results->pluck('draw_date')->map(function ($date) {
    return \Carbon\Carbon::parse($date)->format('d');
    })->unique()->sort()->values();
    @endphp

    @if ($grouped->count())

    <div id="table-scroll" class="table-scroll">
        <div class="table-wrap">

            <table class="main-table">
                <thead class="table-dark">
                    <tr>
                        <th>Game Name</th>
                        <th>Draw Time</th>
                        @foreach ($dates as $day)
                        <th>{{ $day }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grouped as $time => $entries)
                    <tr>
                        <td class="fw-bold text-danger">Rajashri-A</td> {{-- or use dynamic $game->name --}}
                        <td>{{ \Carbon\Carbon::parse($time)->format('h:i A') }}</td>
                        @foreach ($dates as $day)
                        @php
                        $result = $entries->first(function ($entry) use ($day) {
                        return \Carbon\Carbon::parse($entry->draw_date)->format('d') == $day;
                        });
                        @endphp
                        <td>{{ $result->number ?? '-' }}</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @else
    <div class="alert alert-warning text-center">
        No results found for the selected criteria.
    </div>
    @endif


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