const modal_contents = [
  `*Total team members must reach 0 <br /> *Total team reacharge reach must $0 <br /> *Incentive ratio - 0% <br /> *incentive Period - 0 days <br />  `,
  `*Total team members must reach 5 <br /> *Total team reacharge reach must $500 <br /> *Incentive ratio - 0.3% <br /> *incentive Period - 45 days <br />  `,
  `*Total team members must reach 10 <br /> *Total team reacharge reach must $1000 <br /> *Incentive ratio - 0.5% <br /> *incentive Period - 60 days <br />  `,
  `*Total team members must reach 20 <br /> *Total team reacharge reach must $2000 <br /> *Incentive ratio - 0.7% <br /> *incentive Period - 90 days <br />  `,
  `*Total team members must reach 50 <br /> *Total team reacharge reach must $5000 <br /> *Incentive ratio - 1% <br /> *incentive Period - 120 days <br />  `,
];

const header_contents = [
  `Bronze levelup Rules`,
  `Silver levelup Rules`,
  `Gold levelup Rules`,
  `Diamond levelup Rules`,
  `Platinum levelup Rules:`,
];

const question_modal = document.querySelector("#question_modal");
const question_btns = document.querySelectorAll("#question_btn");
const modal_body = document.querySelector(".modal_body");
const modal_header = document.querySelector(".modal_header");
const close_ok = document.querySelector("#close_ok");

question_btns.forEach((question_btn) => {
  question_btn.addEventListener("click", (e) => {
    modal_header.innerHTML = header_contents[e.target.ariaLabel];
    modal_body.innerHTML = modal_contents[e.target.ariaLabel];
    question_modal.style.display = "block";
  });
});

close_ok.addEventListener("click", () => {
  question_modal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target.id !== "question_mark") {
    question_modal.style.display = "none";
  }
});

// const modal_contents = [
//   `*Total team members must reach 0 <br /> *Total team reacharge reach must $0 <br /> *Incentive ratio - 0% <br /> *incentive Period - 0 days <br />  `,
//   `*Total team members must reach 5 <br /> *Total team reacharge reach must $500 <br /> *Incentive ratio - 0.3% <br /> *incentive Period - 45 days <br />  `,
//   `*Total team members must reach 10 <br /> *Total team reacharge reach must $1000 <br /> *Incentive ratio - 0.5% <br /> *incentive Period - 60 days <br />  `,
//   `*Total team members must reach 50 <br /> *Total team reacharge reach must $5000 <br /> *Incentive ratio - 1% <br /> *incentive Period - 120 days <br />  `,
//   `*Total team members must reach 20 <br /> *Total team reacharge reach must $2000 <br /> *Incentive ratio - 0.7% <br /> *incentive Period - 90 days <br />  `,
// ];

// const question_modal = document.querySelector("#question_modal");
// const question_btn_0 = document.querySelector("#question_btn_0");
// const question_btn_1 = document.querySelector("#question_btn_1");
// const question_btn_2 = document.querySelector("#question_btn_2");
// const question_btn_3 = document.querySelector("#question_btn_3");
// const question_btn_4 = document.querySelector("#question_btn_4");
// const close_ok = document.querySelector("#close_ok");
// const modal_body = document.querySelector(".modal_body");

// question_btn_0.addEventListener("click", () => {
//   modal_body.innerHTML = modal_contents[0];
//   question_modal.style.display = "block";
// });

// close_ok.addEventListener("click", () => {
//   question_modal.style.display = "none";
// });
