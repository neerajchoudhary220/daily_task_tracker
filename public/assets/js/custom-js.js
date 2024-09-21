
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
      })
        
      
    },
  }