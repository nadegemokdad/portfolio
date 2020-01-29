/*let form = document.querySelector("#formulaire");
let nom = document.querySelector("#nom");
let email = document.querySelector("#email");
let message = document.querySelector("#message");
form.addEventListener("submit", function(e) {
  e.preventDefault();
  //vérification

  if (nom.value.match(/^[a-zA-Z0-9àéèùê ]+$/)) {
    email.focus();
    console.log(nom);
    //le nom est OK, on peut passer au suivant

    if (
      email.value.match(
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      )
    ) {
      console.log(email);
      if (message.value.match( /^[A-Za-z0-9àéèùê'.!]{5,1000}$/)) {
        console.log(message);
        form.submit();
      }
    }
  }
});*/

// portfolio: affichage "progressif" 
let aff_bloc = document.getElementsByClassName("aff_img");
console.log(aff_bloc);
let aff_all = document.getElementsByClassName("lien_img");
let mess_1 = document.getElementById("text1");

aff_all[0].addEventListener("click",function(){
  for (let index = 0; index < aff_bloc.length; index++) {
    const element = aff_bloc[index];
    console.log(element);
    
    element.classList.toggle("masc_img");
  } 
if (mess_1.classList.contains('changmt_texte')){
document.getElementById("text1").innerHTML = "Masquer les dernières images";
mess_1.classList.remove('changmt_texte');
}
else{
mess_1.innerHTML="afficher toutes les images";
mess_1.classList.add('changmt_texte');
}
});
   
// burger et navbar
/*let aff_menu =  document.getElementsById("nav_resp");
let burger = document.getElementsByClassName("icon");
burger.addEventListener("click",function(){
  aff_menu.classList.toggle("nav_resp");
  });
  let click_burger =document.getElementById('icon');
  let menu = document.getElementById("nav_resp");
  click_burger.addEventListener("click", function(){
  menu.classList.toggle("display_flex");
  });*/


 

