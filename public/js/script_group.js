//for update group
$(function(){
  var isValid = true;
  $("#save_group").click(function(event){
    //init
      $("#Nom_up_err").removeClass("has-error");
      $("#nom_span_err").text("");
      $("#Stream_up_err").removeClass("has-error");
      $("#stream_span_err").text("");
      var name = $("#nom_update").val();
      var stream = $("#stream_update").val();

      if(name == ""){
        event.preventDefault();
        $("#Nom_up_err").addClass("has-error");
        $("#nom_span_err").text("Required field");
        isValid = false;
      }

      if(stream == ""){
        event.preventDefault();
        $("#Stream_up_err").addClass("has-error");
        $("#stream_span_err").text("Required field");
        isValid = false;
      }

      if(isValid == true){
        event.preventDefault();
        var id_group = $("#id_group").val();
        //ajax request
        $.post(url_save_update,{id_group: id_group,name:name,stream:stream,_token:token},function(data){
            if(data == "false"){
              $("#Stream_up_err").addClass("has-error");
              $("#stream_span_err").text("Stream should be TI/DSI/RSI/SEM/MDW");
            }else{
                swal("Job done!", "Group has been updated with success", "success");

            }
        });
      }
  });
});



// For delete a group
$(function(){
    $(".delete_group").click(function(){
        var id_group = $(this).attr("id");
        //check if doesn't exist in Registration table
        $.post(url_check_id_group,{id_group: id_group, _token:token},function(data){
            if(data == "done"){
              swal("Job done!", "Group has been deleted with success", "success");
              $(document).on("click",".swal-button--confirm",function(){
                location.reload();
              });
            }else if(data == "error"){
              swal("Warning!", "You can't delete this group because it's associated with some students", "warning");
            }
        });
    });
});



//for add a group
$(function(){
  $("#add").click(function(event){
    //init
    $(".name_add_err").removeClass("has-error");
    $("#name_span_add_err").text("");

      var name = $("#add_name").val();
      event.preventDefault();
      if(name == ""){
        $(".name_add_err").addClass("has-error");
        $("#name_span_add_err").text("Required field");
      }else{
        //ajax
        $.post(add_group,{name:name,stream:$("#s").val(),_token:token},function(data){
            swal("Job done!", "Group has been added with success", "success");
        });
      }
  });
});
