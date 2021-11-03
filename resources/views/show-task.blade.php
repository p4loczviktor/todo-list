<x-layout>
    <x-slot name="title">
        {{ $task->title }}
    </x-slot>
    <x-slot name="brand">
        <div  class="d-none d-md-block">
            <x-fragments.brand></x-fragments.brand>
        </div>
    </x-slot>
    <x-slot name="controls">
        <a href="{{ url('/') }}" class="text-dark text-decoration-none d-md-none fw-bold my-auto mx-0 pr-3 py-1 pl-0"><i class="bi bi-chevron-left"></i>{{ __('tasks.button-back') }}</a>
        @if($task->status === 0)
            <x-input.complete-button :task="$task"></x-input.complete-button>
            <x-input.fail-button :task="$task"></x-input.fail-button>
        @else
            <x-input.restore-button :task="$task"></x-input.restore-button>
        @endif
    </x-slot>

    <div class="row">
        <div class="col-4 d-none d-md-block overflow-scroll scroll-boundry">
            <x-fragments.tasks-panel :tasks="$tasks" :active="$task->id"></x-fragments.tasks-panel>
        </div>
        <div class="col-12 col-md-8">
            <div class="card rounded-3 mt-2 p-2 shadow
            @if($task->status === 0)
                border
            @elseif($task->status === 1)
                bg-success text-light
            @elseif($task->status === 2)
                bg-danger text-light
            @endif">
                <div class="row px-1 pt-1">
                    <div class="col-8">
                        @if($task->status === 0)
                            <p class="fw-bold text-primary mb-1"><i class="bi bi-circle"></i>{{ __('tasks.status-active') }}</p>
                        @elseif($task->status === 1)
                            <p class="fw-bold mb-1"><i class="bi bi-check-circle-fill"></i>{{ __('tasks.status-completed') }}</p>
                        @elseif($task->status === 2)
                            <p class="fw-bold mb-1"><i class="bi bi-x-circle-fill"></i>{{ __('tasks.status-failed') }}</p>
                        @endif
                        <h3 class="fw-bold">{{ $task->title }}</h3>
                    </div>
                    <div class="col-4">
                        <x-input.edit-button :task="$task"></x-input.edit-button>
                    </div>
                </div>
                <div class="row px-1">
                    <p>{{ $task->content }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
