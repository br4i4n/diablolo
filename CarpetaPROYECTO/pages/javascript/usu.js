//Evento de popul

const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');
const bod = document.getElementById('bod');

open.addEventListener('click', () => {
  modal_container.classList.add('show'); 
   bod.style.overflow = 'hidden'; 
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
  bod.style.overflow = 'visible';
});


//js de usuario
$(".login-form").hide();

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

