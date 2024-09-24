function dbTable() {
  dt_tbl = $("#task_tbl").DataTable({
    serverSide: true,
    stateSave: false,
    pageLength: 10,
    ajax: {
      url: task_list_url,
      // data: {},

      beforeSend: function () {},
    },
    columns: [
      {
        name: "index_column",
        data: "index_column",
        orderable: false,
      },
      {
        name: "id",
        data: "id",
      },
      {
        name: "title",
        data: "title",
      },

      {
        name: "status",
        data: "status",
      },
      {
        name: "start_time",
        data: "start_time",
      },

      {
        name: "end_time",
        data: "end_time",
      },
      {
        name: "completed_time",
        data: "completed_time",
      },

      {
        name: "action",
        data: "action",
        orderable: false,
      },
    ],
    order: [1, "desc"],
    drawCallback: function (settings, json) {
      //Click delete button
      $(".dltBtn").on("click", function () {
        const delete_url = $(this).val();
        function deleteReq() {
          $.ajax({
            url: delete_url,
            type: "get",
            success: function (response) {
              swal(`Deleted!`, response.message, `success`);
              dt_tbl.ajax.reload();
            },
          });
        }
        custom.functions.deleteTask(deleteReq);
      });

      //Click check buton
      $(".completeTaskBtn").on("click", function () {
        const uRL = $(this).attr("data-url");
        const title = $(this).attr("data-title");
        $("#task_complete_modal_title").text(title);
        $("#task_complete_modal").modal("show");
        $("#task_completd_form").attr("action", uRL);
      });

      //click cross button
      $(".uncompleteTaskBtn").on("click", function () {
        const uRL = $(this).attr("data-url");

        function taskUncompleteReq(){
          $.ajax({
            url: uRL,
            type: "get",
            success: function (response) {
              // custom.functions.successMessage(response.message);
              custom.functions.successMessage("Uncompleted Task", response.message);
              dt_tbl.ajax.reload();
            },
            error: function (xhr, status, error) {
              // custom.functions.errorMessage(xhr.responseJSON.message);
            },
          })
        }
        custom.functions.uncompleteTask(taskUncompleteReq);
      });
    },
  });
}



$(document).ready(function () {
  dbTable();
  $("#task_complete_submit_btn").on("click", function (e) {
    e.preventDefault();
  
    const data = $("#task_completd_form").serializeArray();
  
    uRL = $("#task_completd_form").attr("action");
    $.ajax({
      url: uRL,
      type: "post",
      data: data,
      success: function (response) {
        $("#task_complete_modal").modal("hide");
        dt_tbl.ajax.reload();
        // custom.functions.successMessage(response.message);
        custom.functions.successMessage("Complted Task", response.message);
      },
      error: function (xhr, status, error) {
        // custom.functions.errorMessage(xhr.responseJSON.message);
      },
    });
  });
});


