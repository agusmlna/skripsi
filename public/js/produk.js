// let queryname = document.querySelector('.name');
// let queryPrice = document.querySelector('.price');
let queryPesanan = document.querySelector(".pesanan");
let queryTotal = document.querySelector(".total");
let totalPrice = 0;
let dataMenuPesan = [];
let dataPesananHTML = [];
let data = {};
let quantity = 1;
let queryQuantity = document.querySelectorAll(".quantity");
let menuOrder = document.querySelector(".menu-order");
let inputTotal = document.querySelector(".input-total");

let quantity2 = document.querySelector(".quantity-product");
let buttonDec = document.querySelector(".button-dec");

// stok bahan
let stokBahan = document.querySelector(".stok-bahan").textContent;
console.log(JSON.parse(stokBahan));

function pushTemplateSideItemMenu(dataMenu) {
  dataPesananHTML.push(`
        <div class="d-flex flex-xl-nowrap flex-wrap text-dark">
          <div>
              <img class="rounded-4 me-3" src="/img/${
                dataMenu["imageUrl"]
              }" width="50" height="50" alt="">
          </div>
          <div>
              <h5 class="fw-bold nopadding">${dataMenu["menu"]}</h5>
              <p class="fs-5 text-dark ">Rp. ${numberWithCommas(
                dataMenu["price"]
              )}</p>
              <p class="text-dark">
                <i class="fa-solid fa-square-minus fa-lg button-dec" style="color: #000000;" onClick='decQuantity(${
                  dataMenu["id"]
                })'></i>
                  <span class="text-dark quantity quantity-product">${
                    dataMenu["quantity"]
                  }</span>
                <i class="fa-solid fa-square-plus fa-lg button-inc" style="color: #000000;" onClick='incQuantity(${
                  dataMenu["id"]
                })'></i>
              </p>
          </div>
        </div>
      `);
}

function createSideListMenu() {
  dataPesananHTML = [];
  queryPesanan.innerHTML = "";
  for (const dataMenu of dataMenuPesan) {
    pushTemplateSideItemMenu(dataMenu);
  }
  dataPesananHTML.forEach(function (item, index) {
    queryPesanan.innerHTML += item;
  });
}

function dataToInputOrder() {
  menuOrder.value = JSON.stringify(dataMenuPesan);
}

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function removeDataMenuPesan(index) {
  dataMenuPesan.splice(index, 1);
}

function changeQuantity(index) {
  queryQuantity = document.querySelectorAll(".quantity");
  queryQuantity[index].innerText = dataMenuPesan[index]["quantity"];
}

function changeTotalPrice() {
  totalPrice = 0;
  for (let dataMenu of dataMenuPesan) {
    totalPrice += dataMenu["price"] * dataMenu["quantity"];
  }
  inputTotal.value = totalPrice;
  queryTotal.innerText = `Rp. ${numberWithCommas(totalPrice)}`;
}

function decQuantity(id) {
  // find index dari menu id dengaan data id
  let index = dataMenuPesan.findIndex((menu) => menu["id"] == id);
  if (dataMenuPesan[index]["quantity"] != 1) {
    dataMenuPesan[index]["quantity"] -= 1;
    changeQuantity(index);
  } else {
    let newIndex = dataMenuPesan.findIndex((menu) => menu["id"] == id);

    removeDataMenuPesan(newIndex);
    createSideListMenu();
  }
  changeTotalPrice();
  dataToInputOrder();
}

function incQuantity(id) {
  // find index dari menu id dengaan data id
  let index = dataMenuPesan.findIndex((menu) => menu["id"] == id);
  dataMenuPesan[index]["quantity"] += 1;
  changeQuantity(index);
  changeTotalPrice();
  dataToInputOrder();
}

document.querySelectorAll(".btn-pesan").forEach(function (el) {
  el.addEventListener("click", function () {
    data = {
      id: el.children[2].innerText,
      menu: el.children[3].innerText,
      price: el.children[4].innerText,
      imageUrl: el.children[5].innerText,
      quantity: quantity,
    };

    // find index dari menu id dengaan data id
    let index = dataMenuPesan.findIndex((menu) => menu["id"] == data["id"]);

    // jika dataMenuPesan masih 0 atau index tidak ada atau data belom ada
    // makan data push ke dataMenuPesan
    if (dataMenuPesan.length == 0 || index == -1) {
      dataMenuPesan.push(data);
    }

    createSideListMenu();
    changeTotalPrice();
    dataToInputOrder();
  });
});
