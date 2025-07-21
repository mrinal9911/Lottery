<!-- Optional: Centered Container if used standalone -->
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="card shadow-lg p-4" style="min-width: 400px; max-width: 600px;">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">🎯 Add Lottery Result</h4>
      <!-- Close button (optional for popup/modal) -->
      <!-- <button onclick="window.close()" class="btn-close"></button> -->
    </div>

    <form action="{{ route('lottery-results.store') }}" method="POST" class="needs-validation" novalidate>
      @csrf

      <div class="mb-3">
        <label class="form-label">🎮 Game</label>
        <select name="game_id" class="form-select" required>
          <option value="" disabled selected>Select game</option>
          @foreach ($games as $game)
          <option value="{{ $game->id }}">{{ $game->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">📅 Draw Date</label>
        <input type="date" name="draw_date" class="form-control" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
      </div>

      <div class="mb-3">
        <label class="form-label">⏰ Draw Time</label>
        <select name="draw_time_id" class="form-select" required>
          <option value="" disabled selected>Select draw time</option>
          @foreach ($times as $time)
          <option value="{{ $time->id }}">{{ \Carbon\Carbon::parse($time->time)->format('h:i A') }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">🔢 Number</label>
        <input type="number" name="number" class="form-control" min="0" max="99" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success btn-lg">💾 Save Result</button>
      </div>
    </form>

    <script>
      document.getElementById('lotteryForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
          })
          .then(response => {
            if (response.ok) {
              // Optional: Close modal if in modal
              // Close modal logic here, e.g., hideModal();

              // Redirect to results page
              window.location.href = '/result-summary';
            } else {
              alert('Failed to save result.');
            }
          })
          .catch(error => {
            console.error(error);
            alert('An error occurred.');
          });
      });
    </script>
  </div>
</div>

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Optional: Add this for custom styles -->
<style>
  body {
    background-color: #f8f9fa;
  }

  .card {
    border-radius: 1rem;
  }

  .form-label {
    font-weight: 500;
  }
</style>