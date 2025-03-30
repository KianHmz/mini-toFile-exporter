$(document).ready(function () {

  $("form").submit(function (e) {

    e.preventDefault();
    $.ajax({
      type: "post",
      url: "process.php",
      data: $(this).serialize(),
      success: function (response) {
        $(".msg p").html(response);
      },
    });
    
  });

});
