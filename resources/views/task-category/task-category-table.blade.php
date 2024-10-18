<div class="card mt-3">
    <div class="card-header d-flex justify-content-around">
        <h5 class="m-auto">Task Categories</h5>
      
        <a href="{{ route('task-category.add') }}"><button class="btn btn-primary">Add New Category</button></a>

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