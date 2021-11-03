<a class="btn m-0 px-2 py-1 fw-bold float-right
    @if($task->status === 0)
        text-dark
    @else
        text-light
    @endif
    " href="{{ url('/edit-task') }}/{{ $task->id }}"><i class="bi bi-pencil-square"></i>{{ __('tasks.button-edit') }}</a>
