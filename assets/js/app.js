let link = document.getElementById("link");
let burger = document.getElementById("burger");

link.addEventListener("click", function (e) {
  e.preventDefault();
  burger.classList.toggle("open");
});
