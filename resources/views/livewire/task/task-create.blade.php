<div class="col-12">
    <div class="card mb-3">
        <div class="card-header">
            <div class="col-md-12 text-right">
                <a href="{{ route('task') }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                    title="Task List"><i class="feather icon-list"></i></a>
            </div>
        </div>

        <div class="card-body card">
            <form wire:submit.prevent="save">
            <div class="row form-group">
                <div class="col-6">
                    <label class="required form-label">Task List</label>
                    <select wire:model="task_category_id" class="form-control">
                        <option value="">Select Task Category</option>
                        @foreach($task_category_list as $task_category)
                            <option value="{{ $task_category->id }}">{{ $task_category->name }}</option>
                        @endforeach
                    </select>

                    @error('task_category_id')
                         <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-6">
                    <label class="required form-label" for="title">Title</label>
                    <input id="title" type="text" wire:model="title" class="form-control">

                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col-6">
                    <label class="required form-label" for="start_time">Start Date</label>
                    <input id="start_time" type="datetime-local" wire:model="start_time" class="form-control">
                    @error('start_time')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-6">
                    <label class="required form-label" for="end_time">End Date</label>
                    <input id="end_time" type="datetime-local" wire:model="end_time" class="form-control">
                    @error('end_time')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row form-group">
                <div class="col-6">
                    <label class="form-label" for="completed_time" for="completed_time">Completed Time</label>
                    <input id="completed_time" type="datetime-local" wire:model="completed_time" class="form-control">


                    @error('completed_time')
                    <span class="text-danger">{{ $message }}</span>
                        
                    @enderror

                </div>
            </div>

            <div class="row form-group">
                <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" wire:model="description" rows="5" class="form-control"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" wire:click='save'>Save</button>
                    <button type="reset" class="btn btn-secondary ml-2" wire:click='resetForm'>Reset</button>
                </div>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>