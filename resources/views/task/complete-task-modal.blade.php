<div class="modal fade" id="task_complete_modal" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-heder p-3 bg-primary text-white">
                <div class="modal-title">
                    <h4 class="modal-title" id="task_complete_modal_title">Task Completed</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>

            <div class="modal-body">
                <form action="#" method="post" id="task_completd_form">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="completed_time">Completed Time:</label>
                                <input type="datetime-local" name="completed_time" id="completed_time"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-info" id="task_complete_submit_btn" type="submit"><i
                                    class="feather icon-check mr-2"></i>Complete</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>
