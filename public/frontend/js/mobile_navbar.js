const body = document.querySelector("body");
const mobileNavItems = document.querySelectorAll(".mobile_navbar li");

mobileNavItems.forEach((item) => {
  item.addEventListener("click", (e) => {
    mobileNavItems.forEach((link) => {
      link.classList.remove("active");
    });

    item.classList.add("active");
  });
});
