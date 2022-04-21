


const kwota1 = document.querySelector("#kwota_netto1");
const kwota2 = document.querySelector("#kwota_netto2");
let kwota_netto1 = 12;
kwota1.innerHTML = kwota_netto1;
let kwota_netto2 = 1200;
kwota2.innerHTML = kwota_netto2;

const ile1 = document.querySelector("#ile1");
const ile2 = document.querySelector("#ile2");
const vat1 = document.querySelector("#VAT1");
const vat2 = document.querySelector("#VAT2");

const k_brutto1 = document.getElementById("k_brutto1");
const w_netto1 = document.getElementById("w_netto1");
const w_brutto1 = document.getElementById("w_brutto1");
const k_brutto2 = document.getElementById("k_brutto2");
const w_netto2 = document.getElementById("w_netto2");
const w_brutto2 = document.getElementById("w_brutto2");

const changeToGreen1 = document.getElementById("first");
const changeToGreen2 = document.getElementById("second");
const button = document.getElementById("addBtn");

button.addEventListener("click", () => {
  if (kwota1.textContent >= 1000) {
    changeToGreen1.style.backgroundColor = "green";
  } else if (kwota2.textContent >= 1000) {
    changeToGreen2.style.backgroundColor = "green";
  }
});

ile1.addEventListener("input", (e) => {
  kwota_netto1;
  let ilosc = e.target.value;
  console.log(vat1.value);
  k_brutto1.innerHTML=kwota_netto1*vat1.value/100+kwota_netto1;
  w_netto1.innerHTML = kwota_netto1 * ilosc;
  w_brutto1.innerHTML=ilosc*((kwota_netto1*vat1.value)/100+kwota_netto1)


});

ile2.addEventListener("input", (e) => {
  console.log(e.target.value);
  kwota_netto2;
  let ilosc = e.target.value;
  k_brutto2.innerHTML=kwota_netto2*vat2.value/100+kwota_netto2;
  w_netto2.innerHTML = kwota_netto2 * ilosc;
  w_brutto2.innerHTML=ilosc*((kwota_netto2*vat2.value)/100+kwota_netto2)

});

vat1.addEventListener("change", (e) => {
  kwota_netto1;
  let ilosc =ile1.value;
  let vat1_v = e.target.value;
  console.log(vat1.value);
  k_brutto1.innerHTML=kwota_netto1*vat1_v/100+kwota_netto1;
  w_netto1.innerHTML = kwota_netto1 * ilosc;
  w_brutto1.innerHTML=ilosc*((kwota_netto1*vat1_v)/100+kwota_netto1)


});

vat2.addEventListener("change", (e) => {
  console.log(e.target.value);
  kwota_netto2;
  let ilosc =ile2.value;
  let vat2_v = e.target.value;
  console.log(vat1.value);
  k_brutto1.innerHTML=kwota_netto1*vat2_v/100+kwota_netto1;
  w_netto1.innerHTML = kwota_netto1 * ilosc;
  w_brutto1.innerHTML=ilosc*((kwota_netto1*vat2_v)/100+kwota_netto1)


});
