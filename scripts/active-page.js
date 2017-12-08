// Indicate which page is active in the navigation bar

$(document).ready(function() {

  $(".active").removeClass("active");
  if (document.URL.includes("index")) {
    $("#index").addClass("active");
  } else if (document.URL.includes("menu")) {
    $("#menu").addClass("active");
  } else if (document.URL.includes("recipes")) {
    $("#recipes").addClass("active");
  } else if (document.URL.includes("working")) {
    $("#working").addClass("active");
  } else if (document.URL.includes("contact")) {
    $("#contact").addClass("active");
  }

});
