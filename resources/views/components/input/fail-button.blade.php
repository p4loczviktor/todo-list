<form class="my-auto" action="{{ url('/update-task-status') }}/{{ $task->id }}" method="POST">
    @method('PATCH')
    @csrf

    <input type="hidden" value="2" name="status">
    <button type="submit" class="btn btn-outline-danger rounded-pill px-2 py-1 fw-bold"><i class="bi bi-x-circle-fill"></i> <span class="d-none d-sm-inline-block">{{ __('tasks.button-fail') }}</span></button>
</form>
