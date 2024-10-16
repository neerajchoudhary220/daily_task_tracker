<div class="d-flex justify-content-center">
    <a href="{{ route('task.view', $d->id) }}" class="btn btn-info text-white mr-2" data-bs-toggle="tooltip" title="Details Task"><i class="feather icon-eye"></i></a>
    <a href="{{ route('task.add', $d->id) }}" class="btn btn-warning text-white mr-2" data-bs-toggle="tooltip" title="Edit">
        <i class="feather icon-edit" ></i></a>
    <button class="btn btn-danger text-white dltBtn mr-2" value="{{ route('task.delete', $d->id) }}" data-bs-toggle="tooltip" title="Delete"><i
            class="feather icon-trash"></i></button>
    @if ($d->getRawOriginal('status'))
        <button class="btn btn-primary text-white uncompleteTaskBtn"
        data-bs-toggle="tooltip" title="Start Again"
        data-url="{{ route('task.uncomplete', $d->id) }}"><i
                class="feather icon-refresh-ccw"></i></button>
    @else
        <button class="btn btn-success text-white completeTaskBtn"
        data-bs-toggle="tooltip" title="Complete Task"
         data-title="{{ $d->title }}" data-url="{{ route('task.complete', $d->id) }}"><i
                class="feather icon-check"></i></button>
    @endif
</div>
