<div class="d-flex justify-content-center">
    <a href="{{ route('task.view',$d->id) }}" class="btn btn-info text-white mr-2"><i class="feather icon-eye"></i></a>
    <a href="{{route('task.edit',$d->id) }}" class="btn btn-warning text-white mr-2"><i class="feather icon-edit"></i></a>
    <button class="btn btn-danger text-white dltBtn" value="{{ route('task.delete',$d->id) }}"><i class="feather icon-trash"></i></button>
</div>