var header = document.querySelector(".header"),
    menu = document.querySelector(".menu");window.addEventListener("scroll", function () {
    10 < window.pageYOffset && !header.classList.contains("header--hidden") && header.classList.add("header--hidden"), window.pageYOffset <= 10 && header.classList.contains("header--hidden") && header.classList.remove("header--hidden");
});

function switchMainNav() {
  let mainNav = document.querySelector(".mainNav");
  let bg = document.querySelector('.bgGrey');
  if(mainNav.classList.contains('open')){
      window.setTimeout(function(){
          document.querySelector(".mainNav").style.visibility = "hidden";
      }, 600)
      window.setTimeout(function(){
          document.querySelector(".bgGrey").style.visibility = "hidden";
      }, 600)
  }
  else{
      mainNav.style.visibility = "visible";
      bg.style.visibility = "visible";
  }

  mainNav.classList.toggle("open");
  bg.classList.toggle("open");

  header.classList.toggle("header--navOpen");

}document.querySelector(".burgerMenu").addEventListener("click", switchMainNav);