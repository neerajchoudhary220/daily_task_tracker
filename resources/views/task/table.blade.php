<div class="card mt-3">
    <div class="card-header d-flex justify-content-around">
        <h5 class="m-auto">Task List</h5>
      
        <a href="{{ route('task.add') }}"><button class="btn btn-primary">Add New Task</button></a>

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