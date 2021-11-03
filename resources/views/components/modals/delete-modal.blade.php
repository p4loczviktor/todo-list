<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="deleteModalLabel">{{ __('tasks.modal-delete-title') }}{{ $task->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ __('tasks.modal-delete-body') }}
            </div>
            <div class="modal-footer p-0">
                <button type="button" class="btn text-dark text-decoration-none fw-bold my-1 my-auto pr-3 py-1 pl-0" data-bs-dismiss="modal">{{ __('tasks.modal-delete-cancel') }}</button>
                <x-input.delete-button :task="$task"></x-input.delete-button>
            </div>
        </div>
    </div>
</div>
