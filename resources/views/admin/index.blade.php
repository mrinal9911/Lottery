@extends('layout.app')

@section('title', 'Results')

@section('page-content')
<div class="container py-4">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-uppercase fw-bold">Lottery Results</h2>
        <a href="{{ route('lottery-results.create') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Add Result
        </a>
    </div>

    {{-- Results Table --}}
    <table class="table table-bordered table-hover text-center align-middle shadow-sm rounded">
        <thead class="table-dark text-uppercase">
            <tr>
                <th>Game</th>
                <th>Draw Time</th>
                <th>Draw Date</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($results as $r)
            <tr>
                <td class="fw-semibold text-primary">{{ $r->game->name }}</td>
                <td>{{ \Carbon\Carbon::parse($r->drawTime->time)->format('h:i A') }}</td>
                <td>{{ \Carbon\Carbon::parse($r->draw_date)->format('d/m/Y') }}</td>
                <td>
                    <span class="badge bg-success fs-6 px-3 py-2 rounded-pill">
                        {{ $r->number }}
                    </span>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-danger fw-bold py-3">No results found for selected date.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


@section('footer-script')
<script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: -60,
            maxDate: 0,
            dateFormat: "dd/mm/yy"
        });
    });
</script>
@endsection

<style>
    table.table {
        background-color: #fff;
    }

    thead.table-dark {
        background-color: #343a40;
        color: #fff;
    }

    .badge.bg-success {
        font-size: 1.2rem;
        background: linear-gradient(145deg, #28a745, #218838);
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>