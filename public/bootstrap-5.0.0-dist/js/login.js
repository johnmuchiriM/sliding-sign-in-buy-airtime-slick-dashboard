const sign_in_btn = document.querySelector("#sign-in-btn");
const get_airtime_btn = document.querySelector("#get-airtime-btn");
const container = document.querySelector(".container");

get_airtime_btn.addEventListener("click", () => {
    container.classList.add("get-airtime-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("get-airtime-mode");
});
