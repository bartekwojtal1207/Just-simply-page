// This function checks if DOM is loaded
$(document).ready(function(){

  var back_top_btn = $(".back_top");
  console.log(back_top_btn);
  back_top_btn.on("click",function(event){
    console.log($(this));
  });


});
