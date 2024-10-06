<div class="col-12">
    <div class="card mb-3">
        <div class="card-header">
        Add New Category
        <div class="col-md-12 text-right">
            <a href="{{ route('task-category') }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                title="Task Category List"><i class="feather icon-list"></i></a>
        </div>
        </div>
        <div class="card-body">
            <form wire:submit.prevent='save'> 
                <div class="row mb-3">
                    <div class="form-group col-6">
                        <label for="name" class="required form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="e.g. Goal Name" id="name" wire:model="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3" wire:model='description'></textarea>

                    </div>
                </div>

                

                <div class="row mb-3">
                    <div class="col-12 text-right">
                        <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </div>

                
              
            </form>
        </div>

    </div>

</div>
