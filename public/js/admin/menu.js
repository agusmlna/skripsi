document.querySelectorAll(".item-1").forEach(function (el) {
  el.addEventListener("click", function () {
    document.querySelector(".dropdown-text-1").innerText =
      el.children[0].textContent;
    document.querySelector("#name-1").value = el.children[0].textContent;
    document.querySelector("#id-1").value = el.children[1].textContent;
  });
});

document.querySelectorAll(".item-2").forEach(function (el) {
  el.addEventListener("click", function () {
    document.querySelector(".dropdown-text-2").innerText =
      el.children[0].textContent;
    document.querySelector("#name-2").value = el.children[0].textContent;
    document.querySelector("#id-2").value = el.children[1].textContent;
  });
});

document.querySelectorAll(".item-3").forEach(function (el) {
  el.addEventListener("click", function () {
    document.querySelector(".dropdown-text-3").innerText =
      el.children[0].textContent;
    document.querySelector("#name-3").value = el.children[0].textContent;
    document.querySelector("#id-3").value = el.children[1].textContent;
  });
});
document.querySelectorAll(".item-4").forEach(function (el) {
  el.addEventListener("click", function () {
    document.querySelector(".dropdown-text-4").innerText =
      el.children[0].textContent;
    document.querySelector("#name-4").value = el.children[0].textContent;
    document.querySelector("#id-4").value = el.children[1].textContent;
  });
});
document.querySelectorAll(".item-5").forEach(function (el) {
  el.addEventListener("click", function () {
    document.querySelector(".dropdown-text-5").innerText =
      el.children[0].textContent;
    document.querySelector("#name-5").value = el.children[0].textContent;
    document.querySelector("#id-5").value = el.children[1].textContent;
  });
});
