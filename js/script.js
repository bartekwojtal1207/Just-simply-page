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

  show_text_btn.on("click",function(event){

    event.preventDefault();
    var show_text = $(this).prev().children("span.hide_text");
    $(this).css("margin-top","1em");
    show_text.fadeToggle(1000);
  });
// JS 2
//pojawianie sie tekst w kolumnie, fade mozna zamienic na slide ( w poleceniu nie bylo jasno okreslone)

var main_btn = $("button[name='button']");
var red_ipsum = (".color_red");

  main_btn.on("click",function(){

    $(red_ipsum).animate({
      color: "red"
    },1000).delay(3000).animate({
      color: "black"
    });
  });
  var form_btn = $("input[name='send_btn']");

$(".main_form").on("submit",function(event) {
    event.preventDefault();
  
    var name = $("input[name='id_person']").val();
    var email = $("input[name='email']").val();
    var phone = $("input[name='phone']").val();
    var message = $("input[name='mess']").val();
    var all_input = $(this).serialize();
    var data = {
          name: name,
          email: email,
          phone: phone,
          message: message,
        }
    $.ajax({
          type : "POST",
          url: '/choco_choco/post.php',
          data : all_input
    }).done(function(response){
        $(".main_form").css("display","none");
        $(".contact_section").html(response).slideDown();
   }).fail(function(error) {

   })
  });


});
