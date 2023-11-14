$(".login-form").hide();
$(".login").css("background", "none");

$(".login").click(function(){
  $(".signup-form").hide();
  $(".login-form").show();
  $(".login").css("color", "black");
  $(".signup").css("color", "white");
  $(".signup").css("background", "#1a5aad");
  $(".login").css("background", "#fff");
});

$(".signup").click(function(){
  $(".signup-form").show();
  $(".login-form").hide();
  $(".login").css("color", "white");
  $(".signup").css("color", "black");
  $(".login").css("background", "#1a5aad");
  $(".signup").css("background", "#fff");
});

$(".btn").click(function(){
  $(".input").val("");
});

function bloqueaBody(){
  if(document.getElementById("modal_container").visible=true){
    
  }else{
    document.getElementById("bod").css.poistion=inherit;
  }
}