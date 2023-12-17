const recharge_coin = document.querySelector("#recharge_coin");
const plus_1 = document.querySelector("#plus_1");
const plus_k = document.querySelector("#plus_k");

const recommended_points = document.querySelector("#recommended_points");

const recharges = document.querySelectorAll("#recharge");
const r_value = [100, 200, 500, 1000, 2000, 5000, 10000, 20000];

recharges.forEach((recharge, index, array) => {
  recharge.addEventListener("click", (e) => {
    recharge_coin.value = r_value[index];
    recharges.forEach((item) => {
      item.classList.remove("current");
    });

    recharge.classList.add("current");
  });
});

plus_1.addEventListener("click", (e) => {
  recharge_coin.value = parseInt(recharge_coin.value) + 1;
});

plus_k.addEventListener("click", (e) => {
  recharge_coin.value = parseInt(recharge_coin.value) + 1000;
});
