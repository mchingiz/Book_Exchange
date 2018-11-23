$(document).ready(function() {
  $(".goToLogin p").click(function() {
    $(".login").animate({
      opacity: 0
    });
    $(".login").css("height", "0px");
    $(".login").css("display", "none");
    $(".register").css("display", "block");
    $(".register").css("height", "auto");
    $(".register").animate({
      opacity: 1
    });
  });

  $(".goToRegister h5").click(function() {
    $(".register").animate({
      opacity: 0
    });
    $(".register").css("height", "0px");
    $(".register").css("display", "none");
    $(".login").css("display", "block");
    $(".login").css("height", "auto");
    $(".login").animate({
      opacity: 1
    });
  });
});
