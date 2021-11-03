<x-input.create-button></x-input.create-button>
@if($tasks->has('0'))
    <hr class="my-2 text-muted">
    <p class="fw-bold text-primary mb-0"><i class="bi bi-circle"></i>{{ __('tasks.status-active') }}</p>
    @foreach($tasks['0'] as $task)
        <x-fragments.task :task="$task" :active="$active"></x-fragments.task>
    @endforeach
@endif
@if($tasks->has('1'))
    <p class="fw-bold text-success mb-0"><i class="bi bi-check-circle-fill"></i>{{ __('tasks.status-completed') }}</p>
    @foreach($tasks['1'] as $task)
        <x-fragments.task :task="$task" :active="$active"></x-fragments.task>
    @endforeach
@endif
@if($tasks->has('2'))
    <p class="fw-bold text-danger mb-0"><i class="bi bi-x-circle-fill"></i>{{ __('tasks.status-failed') }}</p>
    @foreach($tasks['2'] as $task)
        <x-fragments.task :task="$task" :active="$active"></x-fragments.task>
    @endforeach
@endif
<div class="safe-zone"></div>
