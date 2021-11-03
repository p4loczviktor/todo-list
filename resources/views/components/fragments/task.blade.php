<div @if($task->id === $active)id="active"@endif class="card p-2 my-2 rounded-3 shadow
        @if($task->status === 0)
            @if($task->id === $active)
                bg-primary
            @else
                border
            @endif
        @elseif($task->status === 1)
            @if($task->id === $active)
                bg-success text-light
            @else
                border-success
            @endif
        @elseif($task->status === 2)
            @if($task->id === $active)
                bg-danger
            @else
                border-danger
            @endif
        @endif">
    <a class="text-decoration-none
        @if($task->id === $active)
            text-light
        @else
            text-dark
        @endif"
        href="{{ url('/show') }}/{{ $task->id }}#active">
        <div class="row p-1">
            <p class="fw-bold mb-0 d-inline-block text-truncate">{{ $task->title }}</p>
            <p class="
            @if($task->id === $active)
                text-light
            @else
                text-muted
            @endif
            fw-light text-truncate mb-0 fs-12px">{{ $task->content }}</p>
        </div>
    </a>
</div>

