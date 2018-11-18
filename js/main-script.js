// toggle sidemenu
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

//toggle modal for adding a new task
$("#modalButton").click(function(){
        $('.modal').modal('show');
  });

//delete a task after clicking the delete button
$(".deleteButton").click(function(){
  var id = $(this).attr("taskId");

      $.ajax ({
        type:"POST",
        url:"actions.php?action=delete",
        data:"taskId="+ id,
        success:function(result) {
          if (result == "0" ) {
            window.location.reload();
          } else if (result == "1") {
            alert('Error, Please try again later...');
          }
        }
      })
});

//submit a new task
$("#submit").click(function(){

      $.ajax ({
        type:"POST",
        url:"actions.php?action=submit",
        data:"course="+$("#course").val()+"&info="+$("#info").val()+"&date="+$("#date").val(),
        success:function(result) {

            if (result == 1) {

            $("#success").show();
            $("#fail").hide();
            setTimeout(function(){location.reload();},500);

          } else if (result != "") {

              $("#fail").html(result).show();
              $("#success").hide();

          }

        }

      })

})
