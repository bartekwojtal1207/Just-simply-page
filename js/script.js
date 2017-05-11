// This function checks if DOM is loaded
$(document).ready(function(){

  var back_top_btn = $(".back_top");

  back_top_btn.on("click",function(ent){
    $("html body").animate({
      scrollTop: "0px"
    },1000)
  });
// JS.1 smooth scroll ;the simplest way
var show_text_btn = $(".show_more");

show_text_btn.on("click",function(ent){
  ent.preventDefault();
  var show_text = $(this).prev().children("span.hide_text");
  $(this).css("margin-top","1em");
  show_text.fadeToggle(1000);
});
// JS 2
//pojawianie sie tekst w kolumnie, fade mozna zamienic na slide ( w poleceniu nie bylo jasno okreslone)
var main_btn = $("button[name='button']");
var red_ipsum = (".color_red");
//$(red_ipsum).removeClass("color_red");

  main_btn.on("click",function(){
    console.log($(red_ipsum));
    $(red_ipsum).animate({
      color: "red"
    },1000).delay(3000).animate({
      color: "black"
    });
    //.animate({
    //   color: "black"
    // },1000);
    //$(red_ipsum).delay(3000).removeClass("color_red");

  });







});
