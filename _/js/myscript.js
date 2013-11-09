$(function() {

  // activate schedule tabs when schedule button pressed

  var hash = window.location.hash;
  hash && $('ul.nav a[href="'+ hash + '"]').tab('show');

  $("#home a:contains('Home')").parent().addClass('active');
  $("#schedule a:contains('Schedule')").parent().addClass('active');
  $("#artists a:contains('Artists')").parent().addClass('active');
  $("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
  $("#register a:contains('Register')").parent().addClass('active');



  $('ul.nav li.dropdown').hover(function() {
    $('.dropdown-menu', this).fadeIn();
  }, function() {
    $('.dropdown-menu', this).fadeOut('fast');
  });


  $("[data-toggle='tooltip']").tooltip({ animation: true });

  // Adding modal photos. HTML is in the header
  $(".modalphotos img").on("click", function() {
    $("#modal").modal({
      show: true,
    });

    var e =this.src.substr(0,this.src.length-7) + ".jpg";
    $("#modalimage").attr("src",e);
    $("#modalimage").on("click", function() {
      $('#modal').modal('hide');
    })
  });
});
