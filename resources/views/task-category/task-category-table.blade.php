<div class="card mt-3 p-2">
    <div class="card-header d-flex justify-content-around">
        {{-- <div>
            <span class="text-info">Last Uploaded :</span> <small class="py-0 ml-2"><b
                    class="last_task_category_upload_time">{{ $last_task_category_upload_time }}</b></small><br>
            <span class="text-warning">Last Sync :</span> <small class="py-0 ml-2"><b
                    class="last_task_category_sync_time">{{ $last_task_category_sync_time }}</b></small>
        </div> --}}


        <h5 class="m-auto">Task Categories</h5>
        <div>
            <a href="{{ route('task-category.add') }}"><button class="btn btn-primary">Add New Category</button></a>
            <i class="feather icon-upload ml-3  btn btn-info" id="upload_task_categories_btn"
                value="upload_task_categories" data-title="Upload Categories" data-toggle="tooltip"
                title="Upload Categories"></i>

            <i class="feather icon-refresh-ccw ml-3 text-info sync_btn" id="sync_task_categories_btn"
                value="sync_task_categories" data-title="Sync Categories" data-toggle="tooltip"
                title="Sync Categories"></i>
        </div>
    </div>

    <div class="card-body mt-3">
        <table class="table table-striped table-hover w-100" id="task_category_tbl">
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>Name</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
