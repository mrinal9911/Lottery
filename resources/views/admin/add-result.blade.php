<h2>Add Lottery Result</h2>

<form action="{{ route('lottery-results.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Game</label>
        <select name="game_id" class="form-control">
            @foreach ($games as $game)
            <option value="{{ $game->id }}">{{ $game->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Draw Time</label>
        <select name="draw_time_id" class="form-control">
            @foreach ($times as $time)
            <option value="{{ $time->id }}">{{ \Carbon\Carbon::parse($time->time)->format('h:i A') }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Draw Date</label>
        <input type="date" name="draw_date" class="form-control">
    </div>

    <div class="mb-3">
        <label>Number </label>
        <input type="number" name="number" class="form-control" min="0" max="99">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>