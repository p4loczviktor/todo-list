<form action="{{ url('/destroy-task') }}" method="POST">
    @method('DELETE')
    @csrf
    <input type="hidden"  value="{{ $task->id }}" name="id">
    <button type="submit" class="btn btn-danger rounded-pill my-3 mx-2 px-2 py-1 fw-bold"><i class="bi bi-trash-fill"></i>{{ __('tasks.button-delete') }}</button>
</form>
