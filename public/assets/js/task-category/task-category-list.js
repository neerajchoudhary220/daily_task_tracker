function taskCategoryDBtbl() {
    task_category_tbl = $("#task_category_tbl").DataTable({
      serverSide: true,
      stateSave: false,
      pageLength: 10,
      ajax: {
        url: task_category_list_url,
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
          name: "name",
          data: "name",
        },
  
        {
          name: "status",
          data: "status",
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
        $(document).find('[data-bs-toggle="tooltip"]').tooltip();
  
        $(".dltBtn").on("click", function () {
          const delete_url = $(this).val();
          function deleteReq() {
            custom.functions.deleteTblData(delete_url,task_category_tbl);
          
          }
          custom.functions.deleteTask(deleteReq);
        });

        // $(".dltBtn").on("click", function () {
        //   const delete_url = $(this).val();
        //   function deleteReq() {
        //     $.ajax({
        //       url: delete_url,
        //       type: "get",
        //       success: function (response) {
        //         swal(`Deleted!`, response.message, `success`);
        //         dt_tbl.ajax.reload();
        //       },
        //     });
        //   }
        //   custom.functions.deleteTask(deleteReq);
        // });
  
        // //Click check buton
        // $(".completeTaskBtn").on("click", function () {
        //   const uRL = $(this).attr("data-url");
        //   const title = $(this).attr("data-title");
        //   $("#task_complete_modal_title").text(title);
        //   $("#task_complete_modal").modal("show");
        //   $("#task_completd_form").attr("action", uRL);
        // });
  
      
      },
    });
  }
  
  $(document).ready(function () {
    taskCategoryDBtbl();


  });
  