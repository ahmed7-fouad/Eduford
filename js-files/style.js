let links=document.querySelector('.nav .container .links ul');
let burgerIcon=document.querySelector('.nav .container .links .burger_icon');
let exitIcon=document.querySelector('.x-icon');

console.log(links , burgerIcon);

burgerIcon.addEventListener('click',function(){

    links.style.cssText='right:0';

})

exitIcon.addEventListener('click',()=>{

    links.style.cssText="right:-66vw";
})