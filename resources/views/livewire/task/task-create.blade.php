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
                <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea id="description" wire:model="description" rows="5" class="form-control"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
    
            </div>
            <div class="row form-group">
                <div class="col-12">
                    <input type="file" accept=".png,jpg,jpeg" id="fileField" class="d-none" wire:model="image">
                    <div class="imageUploader text-center">
                        <div id="imageView">
                            @php
                                $img = asset('assets/images/placeholder.png');
                                if($image instanceof \Illuminate\Http\UploadedFile){
                                    $img = $image->temporaryUrl();
                                }
                                else if(!empty($image)){
                                    $img =$image;
                                }
                            @endphp
                            <img id="DisplayImg" src="{{$img}}" />
                        </div>
                        <button class="btn btn-info btn-sm px-3 mt-2 " type="button" id="imageUploadBtn">
                            Upload Image <i class="feather icon-upload"></i>
                        </button>
                    </div>
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
              
            </div>
            <div class="row">
                <div class="col-12 text-right">
                    <button type="submit" class="btn btn-primary" @disabled($saveBtnDisabled)>Save</button>
                    <button type="reset" class="btn btn-secondary ml-2" wire:click='resetForm'>Reset</button>
                </div>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>

@push('custom-js')
    <script>
        document.getElementById('imageUploadBtn').addEventListener('click', function () {
            document.getElementById('fileField').click();
        });
        </script>
@endpush