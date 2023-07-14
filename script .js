//======================================menu,nav bar=============================================
let menu = document.querySelector('.menu-bar');
let navbar= document.querySelector('.navbar');

menu.onclick=() =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// ====================================theme toggle===============================================

let themeToggler=document.querySelector('.theme-toggler');
let toggleBtn=document.querySelector('.toggle-btn');

toggleBtn.onClick=()=>{
    themeToggler.classList.toggler('active');
}

window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    themeToggler.classList.remove('active');
}

document.querySelectorAll('.theme-toggler .theme-btn').forEach(btn =>{
    
    btn.onclick=() =>{
        let color=btn.style.background;
        document.querySelector(':root').style.setProperty('##3867d6',color);
    }
});

// =====================================images loadmore=================================================

let loadMoreBtn=document.querySelector('package .loadmore .btn');
let currentitem=3;

loadMoreBtn.onclick=() =>{
    let boxes=[document.querySelectorAll('.package .box-container .box')];
     for(var i=currentItem; i<currentItem+3;i++){
        boxes[i].style.display='inline-block';

     };
     currentItem+=3;
     if(currentItem>=boxes.length){
        loadMoreBtn.style.display='none';
     }
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