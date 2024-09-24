<div class="d-flex justify-content-center">
    <a href="{{ route('task.view', $d->id) }}" class="btn btn-info text-white mr-2"><i class="feather icon-eye"></i></a>
    <a href="{{ route('task.edit', $d->id) }}" class="btn btn-warning text-white mr-2"><i class="feather icon-edit"></i></a>
    <button class="btn btn-danger text-white dltBtn mr-2" value="{{ route('task.delete', $d->id) }}"><i
            class="feather icon-trash"></i></button>
    @if ($d->getRawOriginal('status'))
        <button class="btn btn-danger text-white uncompleteTaskBtn" data-url="{{ route('task.uncomplete', $d->id) }}"><i
                class="feather icon-x"></i></button>
    @else
        <button class="btn btn-success text-white completeTaskBtn" data-title="{{ $d->title }}" data-url="{{ route('task.complete', $d->id) }}"><i
                class="feather icon-check"></i></button>
    @endif
</div>
