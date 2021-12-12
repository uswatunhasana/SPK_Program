$(document).on("click", ".add-more", function() {
  var html = $(".copy").html();
  $(".after-add-more").after(html);

  // saat tombol remove dklik control group akan dihapus 

  $("body").on("click", ".remove", function() {
    $(this).parents(".control-group").remove();
  });
});


$(window).on('click', function() {
  $('#addRowModal').modal('show');
});