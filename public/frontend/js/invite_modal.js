const invite_modal = document.querySelector("#invite_modal");
const invite_btn = document.querySelector("#invite_btn");
const invite_close = document.querySelector("#invite_close");

invite_btn.addEventListener("click", (e) => {
  e.preventDefault();
  invite_modal.style.display = "block";
});

invite_close.addEventListener("click", (e) => {
  invite_modal.style.display = "none";
});

// Sidenavbar

const sidenavbar = document.querySelector("#sidenavbar");

document.querySelector("#openNav").addEventListener("click", (e) => {
  e.stopPropagation();
  sidenavbar.style.width = "200px";
});

window.addEventListener("click", (e) => {
  if (sidenavbar.style.width === "200px") sidenavbar.style.width = "0";
});
