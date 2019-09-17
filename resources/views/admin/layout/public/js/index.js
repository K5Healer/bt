// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     document.getElementById("menu").style.top = "0";
//   } else {
//     document.getElementById("menu").style.top = "-50px";
//   }
// }
var $info = $("#IntroMenu");
$info.hide();

$(window).on('scroll', function() {
  if ($(this).scrollTop() > 100) {
    $info.fadeIn();
  } else {
    $info.fadeOut();
  }
});

var $info1 = $("#Intro");
$info1.hide();

$(window).on('scroll', function() {
  if ($(this).scrollTop() > 100) {
    $info1.fadeIn();
  } else {
    $info1.fadeOut();
  }
});


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-250px";
  }
}