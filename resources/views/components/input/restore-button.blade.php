<form class="my-auto ms-auto" action="{{ url('/update-task-status') }}/{{ $task->id }}" method="POST">
    @method('PATCH')
    @csrf

    <input type="hidden" value="0" name="status">
    <button type="submit" class="btn btn-outline-dark rounded-pill px-2 py-1 fw-bold"><i class="bi bi-arrow-counterclockwise"></i>{{ __('tasks.button-restore') }}</button>
</form>
