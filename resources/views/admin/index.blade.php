<table class="table table-bordered">
    <thead>
        <tr>
            <th>Game</th>
            <th>Time</th>
            <th>Date</th>
            <th>Numbers</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $r)
        <tr>
            <td>{{ $r->game->name }}</td>
            <td>{{ \Carbon\Carbon::parse($r->drawTime->time)->format('h:i A') }}</td>
            <td>{{ $r->draw_date }}</td>
            <td>{{ $r->number }}</td>
        </tr>
        @endforeach
    </tbody>
</table>