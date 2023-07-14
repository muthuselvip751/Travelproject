//======================================menu,nav bar=============================================
let menu = document.querySelector('.menu-bar');
let navbar= document.querySelector('.navbar');

menu.onclick=() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}



// =========================================home slider============================================
var swipper =new swipper (".home-slider", {
   effect: "cover flow",
   grapcursor:true,
   centeredslides:true,
   slidesPerView:"auto",
   coverflowEffect:{
    rotate:0,
    stretch:0,
    depth:100,
    modifier:2,
    slideshadow:true,
   },
   loop:true,
   autoplay:{
    delay:2000,
    disableOnInteraction:false,
   }

})

// ---------------------------------------review slider------------------------------------------------
var swipper=new swipper(".review-slider",{
    slidepriview:1,
    grapCurser:true,
   loop:true,
   spaceBetween:10,
   breakpoints:{
    0:{
        slidePriview:1,
    },
    700:{
        slidesPriview:2,
    },
    1050:{
    slidePerview:3,
    },
  },

autoplay:{
    delay:5000,
    disableOnInteraction:false,
}
});