<div class="d-flex justify-content-center">
    {{-- <a href="#" class="btn btn-info text-white mr-2" data-bs-toggle="tooltip" title="Details Task"><i class="feather icon-eye"></i></a> --}}
    <a href="{{ route('task-category.add',$d->id) }}" class="btn btn-warning text-white mr-2" data-bs-toggle="tooltip" title="Edit">
        <i class="feather icon-edit" ></i></a>
    <button class="btn btn-danger text-white dltBtn mr-2" value="{{ route('task-category.delete',$d->id) }}" data-bs-toggle="tooltip" title="Delete"><i
            class="feather icon-trash"></i></button>
</div>