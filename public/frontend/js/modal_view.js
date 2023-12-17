
const usdt_modal = document.querySelector("#usdt_modal");
const usdt_btn = document.querySelector("#usdt_btn");
const usdt_modal_close = document.querySelector("#usdt_modal_close");

usdt_btn.addEventListener("click", (e) => {
  e.preventDefault();
  usdt_modal.style.display = "block";
});

usdt_modal_close.addEventListener("click", (e) => {
    usdt_modal.style.display = "none";
});



const trx_modal = document.querySelector("#trx_modal");
const trx_btn = document.querySelector("#trx_btn");
const trx_modal_close = document.querySelector("#trx_modal_close");

trx_btn.addEventListener("click", (e) => {
  e.preventDefault();
  trx_modal.style.display = "block";
});

trx_modal_close.addEventListener("click", (e) => {
    trx_modal.style.display = "none";
});




// Sidenavbar

// const sidenavbar = document.querySelector("#sidenavbar");

// document.querySelector("#openNav").addEventListener("click", (e) => {
//   e.stopPropagation();
//   sidenavbar.style.width = "200px";
// });

// window.addEventListener("click", (e) => {
//   if (sidenavbar.style.width === "200px") sidenavbar.style.width = "0";
// });





// const invite_modal = document.querySelector("#invite_modal");
// const invite_btn = document.querySelector("#invite_btn");
// const invite_close = document.querySelector("#invite_close");

// invite_btn.addEventListener("click", (e) => {
//   e.preventDefault();
//   invite_modal.style.display = "block";
// });

// invite_close.addEventListener("click", (e) => {
//   invite_modal.style.display = "none";
// });

// // Sidenavbar

// const sidenavbar = document.querySelector("#sidenavbar");

// document.querySelector("#openNav").addEventListener("click", (e) => {
//   e.stopPropagation();
//   sidenavbar.style.width = "200px";
// });

// window.addEventListener("click", (e) => {
//   if (sidenavbar.style.width === "200px") sidenavbar.style.width = "0";
// });