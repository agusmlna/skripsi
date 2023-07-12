const radioButton = document.getElementsByName("btnradio");
const idOrder = document.querySelector(".id-order");
const totalOrder = document.querySelector(".total-order");
const change = document.querySelector(".change");
const formPay = document.querySelector(".form-pay");

//
let totalPrice = 0;
let valuePay = 0;

function addChecked(payInput) {
  payInput.checked = true;
}

function removeChecked(payInput) {
  payInput.checked = false;
}

function removeAllChecked() {
  for (const pay of radioButton) {
    pay.checked = false;
  }
}

function changeReturn() {
  change.textContent = valuePay - totalPrice;
}

// memasukan data ke modal
// ambil data dari php html
function returnDataToModal(id, total) {
  idOrder.textContent = id;
  totalOrder.textContent = total;
  totalPrice = total;
  valuePay = radioButton[0].value;
  formPay.value = radioButton[0].value;
  changeReturn();
}

for (const pay of radioButton) {
  pay.addEventListener("click", () => {
    removeAllChecked();
    valuePay = pay.value;
    formPay.value = pay.value;
    addChecked(pay);
    changeReturn();
  });
}

formPay.addEventListener("input", (event) => {
  console.log(event.target.value);
  valuePay = event.target.value;

  for (const pay of radioButton) {
    if (pay.value != valuePay) {
      removeChecked(pay);
    } else {
      addChecked(pay);
    }
  }
  changeReturn();
});
