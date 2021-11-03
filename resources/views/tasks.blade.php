<x-layout>
    <x-slot name="brand">
        <x-fragments.brand></x-fragments.brand>
    </x-slot>

    <x-slot name="controls">
        <button class="d-none d-md-block btn btn-success rounded-pill my-auto mx-2 ms-auto px-2 py-1 fw-bold disabled"><i class="bi bi-check-circle-fill"></i> Completed</button>
        <button class="d-none d-md-block btn btn-outline-danger rounded-pill my-auto px-2 py-1 fw-bold disabled"><i class="bi bi-x-circle-fill"></i> Failed</button>
    </x-slot>

    <div class="row">
        <div class="col-12 col-md-4 overflow-scroll scroll-boundry">
            <x-fragments.tasks-panel :tasks="$tasks" :active="null"></x-fragments.tasks-panel>
        </div>
        <div class="col-8 d-none d-md-block">
            <div class="card bg-light rounded-3 p-2 border mt-2">
                <div class="p-1">
                    <p class="fw-bold text-muted mb-1"><i class="bi bi-circle"></i>{{ __('tasks.status') }}</p>
                    <h3 class="fw-bold text-secondary">{{ __('tasks.tasks-title') }}</h3>
                    <p class="text-muted">{{ __('tasks.tasks-content') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
