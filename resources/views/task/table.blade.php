<div class="card mt-3 p-2">
    <div class="card-header d-flex justify-content-around">
        <div>
        <span class="text-info">Last Uploaded :</span> <small class="py-0 ml-2"><b class="last_task_upload_time">{{ $last_task_upload_time }}</b></small><br>
        <span class="text-warning">Last Sync :</span> <small class="py-0 ml-2"><b class="last_task_sync_time">{{ $last_task_sync_time }}</b></small>
        </div>


        <h5 class="m-auto">Task List</h5>
      <div>
        <a href="{{ route('task.add') }}"><button class="btn btn-primary">Add New Task</button></a>
        <i class="feather icon-upload ml-3  btn btn-info" id="upload_task_btn" value="upload_task" data-title="Upload Task" data-toggle="tooltip" title="Upload Task"></i>

        <i class="feather icon-refresh-ccw ml-3 text-info sync_btn" id="sync_btn" value="sync_task"
        data-title="Sync Task"
        data-toggle="tooltip" title="Sync"></i>
      </div>

    </div>

    <div class="card-body mt-3">
        <table class="table table-striped table-hover w-100" id="task_tbl">
            <thead>
                <tr class="text-nowrap">
                    <th>#</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Completed Time</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>