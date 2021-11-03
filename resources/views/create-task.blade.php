<x-layout>
    <x-slot name="title">
        {{ __('tasks.create-task-title') }}
    </x-slot>
    <x-slot name="brand">
        <div  class="d-none d-md-block">
            <x-fragments.brand></x-fragments.brand>
        </div>
    </x-slot>
    <x-slot name="controls">
        <a href="{{ url('/') }}" class="text-dark text-decoration-none fw-bold my-auto mx-0 mx-md-2 me-auto me-md-auto pr-3 py-1 pl-0"><i class="bi bi-chevron-left"></i>{{ __('tasks.button-cancel') }}</a>
        <button form="create-form" class="btn btn-primary rounded-pill fw-bold my-auto px-2 py-1" type="submit" value="Save"><i class="bi bi-save2"></i>{{ __('tasks.create-task-save') }}</button>
    </x-slot>

    <div class="row">
        <div class="col-4 d-none d-md-block overflow-scroll scroll-boundry">
            <x-fragments.tasks-panel :tasks="$tasks" :active="null"></x-fragments.tasks-panel>
        </div>
        <div class="col-12 col-md-8">
            <div class="card rounded-3 p-2 mt-2 shadow border-primary">
                <div class="p-1">
                    <p class="fw-bold text-muted mb-1"><i class="bi bi-circle"></i>{{ __('tasks.status-active') }}</p>
                    <h3 class="text-primary fw-bold"><i class="bi bi-plus-circle-fill"></i>{{ __('tasks.create-task-header') }}</h3>
                    <form id="create-form" action="{{ url('/store-task') }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-floating my-3">
                            <input class="form-control @error('title') is-invalid @enderror" id="title" name="title" type="text" placeholder="Title" value="{{ old('title') }}">
                            <label class="text-muted fw-light" for="title">{{ __('tasks.input-task-title-label') }}</label>
                            @error('title')
                            <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" placeholder="Content" style="min-height: 120px;">{{ old('content') }}</textarea>
                            <label class="text-muted fw-light" for="content">{{ __('tasks.input-task-content-label') }}</label>
                            @error('content')
                            <p class="text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>

