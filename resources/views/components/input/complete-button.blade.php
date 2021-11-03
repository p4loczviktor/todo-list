<form class="my-auto ms-auto" action="{{ url('/update-task-status') }}/{{ $task->id }}" method="POST">
    @method('PATCH')
    @csrf

    <input type="hidden" value="1" name="status">
    <button type="submit" class="btn btn-success rounded-pill my-auto mx-2 px-2 py-1 fw-bold"><i class="bi bi-check-circle-fill"></i>{{ __('tasks.button-completed') }}</button>
</form>
