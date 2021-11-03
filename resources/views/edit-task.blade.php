<x-layout>
    <x-slot name="title">
        {{ __('tasks.edit-task-title') }}{{ $task->title }}
    </x-slot>
    <x-slot name="brand">
        <div  class="d-none d-md-block">
            <x-fragments.brand></x-fragments.brand>
        </div>
    </x-slot>
    <x-slot name="controls">
        <a href="{{ url('/show') }}/{{ $task->id }}" class="text-dark text-decoration-none fw-bold mx-0 mx-md-2 me-auto me-md-auto pr-3 py-1 pl-0"><i class="bi bi-chevron-left"></i>{{ __('tasks.button-cancel') }}</a>
        <button type="submit" form="edit-form" class="btn btn-primary rounded-pill fw-bold mx-2 px-2 py-1"><i class="bi bi-save2"></i>{{ __('tasks.button-update') }}</button>
        <button type="button" class="btn btn-danger rounded-pill px-2 py-1 fw-bold" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash-fill"></i>{{ __('tasks.button-delete') }}</button>
    </x-slot>

    <div class="row">
        <div class="col-4 d-none d-md-block overflow-scroll scroll-boundry">
            <x-fragments.tasks-panel :tasks="$tasks" :active="$task->id"></x-fragments.tasks-panel>
        </div>
        <div class="col-12 col-md-8">
            <div class="card rounded-3 p-2 mt-2 shadow">
                <div class="row p-1">
                    <div class="col-9">
                        @if($task->status === 0)
                            <p class="fw-bold text-primary mb-0"><i class="bi bi-circle"></i>{{ __('tasks.status-active') }}</p>
                        @elseif($task->status === 1)
                            <p class="fw-bold text-success mb-0"><i class="bi bi-check-circle-fill"></i>{{ __('tasks.status-completed') }}</p>
                        @elseif($task->status === 2)
                            <p class="fw-bold text-danger mb-0"><i class="bi bi-x-circle-fill"></i>{{ __('tasks.status-failed') }}</p>
                        @endif
                    </div>
                </div>
                <h3 class="fw-bold"><i class="bi bi-pencil-square"></i> {{ __('tasks.edit-task-title') }}{{ $task->title }}</h3>
                <form id="edit-form" action="{{ url('update-task') }}/{{ $task->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-floating my-3">
                        <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" value="{{ $task->title }}">
                        <label class="text-muted fw-light" for="title">{{ __('tasks.input-task-title-label') }}</label>
                        @error('title')
                        <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Title" style="min-height: 120px;">{{ $task->content }}</textarea>
                        <label class="text-muted fw-light" for="content">{{ __('tasks.input-task-content-label') }}</label>
                        @error('content')
                        <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
    <x-modals.delete-modal :task="$task"></x-modals.delete-modal>
</x-layout>


