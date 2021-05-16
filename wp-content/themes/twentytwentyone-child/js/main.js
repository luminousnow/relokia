"use strict";

const loaderWrapper = document.querySelector(".form-wrapper");
const myForm = document.querySelector(".form");
const slidePage = document.querySelector(".form div.page");
const doneMessage = document.querySelector(".done");

// PROGRESS BAR
const infoStep = document.querySelector("#info");
const quantityStep = document.querySelector("#quantity");
const priceStep = document.querySelector("#price");
const doneStep = document.querySelector("#done");

// BUTTONS
const continueFirstPage = document.querySelector(".continue-1");
const continueSecondPage = document.querySelector(".continue-2");
const backSecondPage = document.querySelector(".back-2");
const continueThirdPage = document.querySelector(".continue-3");
const backThirdPage = document.querySelector(".back-3");
const startSecondPage = document.querySelector(".start");

// stop reloading page
function doNotReloadPage(evt) {
  evt.preventDefault();
  evt.stopPropagation();
}

// disable submit when [enter key] press
myForm.onkeydown = function (evt) {
  if (evt.which === 13) {
    doNotReloadPage(evt);

    return false;
  }
};

// to quantity step
continueFirstPage.addEventListener("click", function (evt) {
  doNotReloadPage(evt);

  // simple validation
  const email = document.querySelector("#inputEmail");
  if (!email.checkValidity()) {
    email.classList.add("is-invalid");
    return;
  }
  email.classList.remove("is-invalid");

  slidePage.style.marginLeft = "-25%";

  infoStep.classList.remove("current");
  quantityStep.classList.add("current");
});

// to price step
continueSecondPage.addEventListener("click", function (evt) {
  doNotReloadPage(evt);

  // simple validation
  const quantity = document.querySelector("#inputQuantity");
  if (!quantity.checkValidity()) {
    quantity.classList.add("is-invalid");
    return;
  }
  quantity.classList.remove("is-invalid");

  // calculate price
  calculate();

  slidePage.style.marginLeft = "-50%";

  quantityStep.classList.remove("current");
  priceStep.classList.add("current");
});

// to done step
myForm.addEventListener("submit", function (evt) {
  doNotReloadPage(evt);
  formSend(evt);

  async function formSend(evt) {
    const formData = new FormData(myForm);

    loaderWrapper.classList.add("sending");

    const response = await fetch("/wp-content/themes/twentytwentyone-child/sendmail.php", {
      method: "POST",
      body: formData,
    });

    const { message } = await response.json();

    if (response.ok) {
      doneMessage.textContent = message;
      loaderWrapper.classList.remove("sending");
    } else {
      doneMessage.textContent = message;
      loaderWrapper.classList.remove("sending");
    }
  }

  slidePage.style.marginLeft = "-75%";

  priceStep.classList.remove("current");
  doneStep.classList.add("current");
});

// to info step
startSecondPage.addEventListener("click", function (evt) {
  doNotReloadPage(evt);

  slidePage.style.marginLeft = "0%";

  infoStep.classList.add("current");
  doneStep.classList.remove("current");
  myForm.reset();
});

// to info step
backSecondPage.addEventListener("click", function (evt) {
  doNotReloadPage(evt);

  slidePage.style.marginLeft = "0%";

  infoStep.classList.add("current");
  quantityStep.classList.remove("current");
});

// to quantity step
backThirdPage.addEventListener("click", function (evt) {
  doNotReloadPage(evt);

  slidePage.style.marginLeft = "-25%";

  priceStep.classList.remove("current");
  quantityStep.classList.add("current");
});
