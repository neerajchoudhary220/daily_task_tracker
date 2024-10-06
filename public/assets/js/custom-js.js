
  const  custom ={
    functions:{
      deleteTask:((deleteReq)=>{
        swal({
          title: "Are you sure?",
          text: "You won't be able to revert this!",
          icon: "warning",
          buttons: true,
        //   confirmButtonColor: "success",
          cancelButtonColor: "#000",
        //   confirmButtonText: "Yes, delete it!",
        }).then((result) => {
             if(result){
                 deleteReq();
             }
        });
      }),
      startAgain:((taskUncompleteReq)=>{
        swal({
          title: "Do you want to start this task again ?",
          icon: "warning",
          buttons: true,
        //   confirmButtonColor: "success",
          cancelButtonColor: "#000",
        //   confirmButtonText: "Yes, delete it!",
        }).then((result) => {
             if(result){
              taskUncompleteReq();
             }
        });
      }),
      successMessage:((title,msg)=>{
        swal(title, msg, `success`);
      }),
      
      deleteTblData:((uRL,tbl)=>{
        $.ajax({
          url: uRL,
          type: "get",
          success: function (response) {
            swal(`Deleted!`, response.message, `success`);
            tbl.ajax.reload();
          },
        });
      })
        
      
    },
  }