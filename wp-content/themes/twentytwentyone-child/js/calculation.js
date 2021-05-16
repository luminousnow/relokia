"use strict";

let quantity = null;
let price = null;

function calculate() {
  const renderPrice = document.querySelector(".calculate");

  quantity = Number(document.querySelector("#inputQuantity").value);

  if (quantity >= 1 && quantity <= 10) {
    price = "$10";
    return (renderPrice.value = price);
  } else if (quantity >= 11 && quantity <= 100) {
    price = "$100";
    return (renderPrice.value = price);
  } else if (quantity >= 101 && quantity <= 1000) {
    price = "$1000";
    return (renderPrice.value = price);
  } else {
    return (renderPrice.value = "ooops");
  }
}
