inView(".inView--fadeIn").on("enter", function (e) {
  return e.classList.add("inView--fadeIn--viewed");
}), window.addEventListener("scroll", function () {
  document.querySelector(".inView--scroll--viewed") && Array.prototype.forEach.call(document.querySelectorAll(".inView--scroll--viewed"), function (e) {
    for (var o = 0, n = e; "SECTION" != n.tagName;) {
      o += n.offsetTop, n = n.parentElement;
    }var i = window.innerHeight + window.scrollY - o;console.log("offsetTop " + o), console.log("scrollY " + window.scrollY), console.log("WindowHeight " + window.innerHeight), console.log(i);
  });
}), inView(".mobilesContainer__mobile").on("enter", function (e) {
  e.classList.add("inView--scroll--viewed"), console.log("enter");
}).on("exit", function (e) {
  e.classList.remove("inView--scroll--viewed"), console.log("exit");
});