

// portfolio: affichage "progressif" 
// let aff_bloc = document.getElementsByClassName("aff_img");
// console.log(aff_bloc);
// let aff_all = document.getElementsByClassName("lien_img");
// let mess_1 = document.getElementById("text1");

// aff_all[0].addEventListener("click",function(){
//   for (let index = 0; index < aff_bloc.length; index++) {
//     const element = aff_bloc[index];
//     console.log(element);
    
//     element.classList.toggle("masc_img");
//   } 
// if (mess_1.classList.contains('changmt_texte')){
// document.getElementById("text1").innerHTML = "Masquer les dernières images";
// mess_1.classList.remove('changmt_texte');
// }
// else{
// mess_1.innerHTML="afficher toutes les images";
// mess_1.classList.add('changmt_texte');
// }
// });
   
// burger et navbar
/*let aff_menu =  document.getElementById("nav_resp");
let burger = document.getElementById("icon");
burger.addEventListener("click",function(){
  aff_menu.classList.toggle("grrr");
  });*/
   let click_burger =document.getElementById('icon');
   let menu = document.getElementById("nav_resp");
   click_burger.addEventListener("click", function(){
   menu.classList.toggle("grrr");
   });


 

