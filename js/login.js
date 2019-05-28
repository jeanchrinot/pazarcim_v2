let forLogin=document.querySelectorAll('.tobedisplayed');
let forRegistration=document.querySelectorAll('.tobehidden');
let login=Array.from(forLogin);
let register=Array.from(forRegistration);

function hide_show(){

  for(let i=0;i<register.length;i++){
      login[i].classList.toggle("hide_it");
        register[i].classList.toggle("hide_it");
      };
  };
