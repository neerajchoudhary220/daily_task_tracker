function dbTable() {
  dt_tbl = $("#task_tbl").DataTable({
    serverSide: true,
    stateSave: false,
    pageLength: 10,
    ajax: {
      url: task_list_url,
      data: {},

      beforeSend: function () {},
    },
    columns: [
      {
        name: "index_column",
        data: "index_column",
        orderable: false,
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
      $(".dltBtn").on("click", function () {
        const delete_url = $(this).val();
        function deleteReq(){
          $.ajax({
            url: delete_url,
            type: "get",
            success: function (response) {
              swal(`Deleted!`, response.message,`success`);
              dt_tbl.ajax.reload();
            },
          });
        }
        custom.functions.deleteTask(deleteReq);
       
      });
    },
  });
}



$(document).ready(function () {
  dbTable();
});
