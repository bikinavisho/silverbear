$(document).ready(function() {
  $(".ingredients, .directions, .recipe-img").hide();
  $(".recipe-food .recipe-name").click( function() {
    $(this).parent().find('.ingredients').toggle();
    $(this).parent().find('.directions').toggle();
    $(this).parent().find('.recipe-img').toggle();
    if ($(this).hasClass("recipe-active")) {
      $(this).removeClass("recipe-active");
    } else {
      $(this).addClass("recipe-active");
    }
  });
});

// we referenced the code provided in lecture for the interactivity of our recipee page
