function inputTextToggle(e) {
  var t = e,
      l = this,
      n = l.previousElementSibling;l.parentElement.classList.toggle("input--focus"), "focus" == t.type ? n.classList.contains("label--up") || n.classList.add("label--up") : "" == l.value && n.classList.remove("label--up");
}function autoSizeTextarea() {
  var e = this;setTimeout(function () {
    e.style.cssText = "height:auto; padding:0", e.style.cssText = "height:" + e.scrollHeight + "px";
  }, 0);
}document.querySelectorAll(".input--text") && Array.prototype.forEach.call(document.querySelectorAll(".input--text input"), function (e) {
  e.addEventListener("focus", inputTextToggle), e.addEventListener("blur", inputTextToggle);
}), document.querySelectorAll(".input--textarea") && Array.prototype.forEach.call(document.querySelectorAll(".input--textarea textarea"), function (e) {
  e.addEventListener("focus", inputTextToggle), e.addEventListener("blur", inputTextToggle);
}), document.querySelector(".input--textarea") && Array.prototype.forEach.call(document.querySelectorAll(".input--textarea textarea"), function (e) {
  e.addEventListener("keydown", autoSizeTextarea), console.log("listener dispatch");
});