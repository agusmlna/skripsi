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
let docStokBahan = document.querySelector(".stok-bahan").textContent;
let stokBahan = JSON.parse(docStokBahan);

let recipes = document.querySelectorAll(".recipe");

let btnPesan = document.querySelectorAll(".btn-pesan");
let textPesan = document.querySelectorAll(".text-pesan");

let isCanBuy = false;

function checkStock(isChangeStock = false, dataOrder, id) {
  // perulangan document recipes
  for (let i = 0; i < recipes.length; i++) {
    var isInStock = false;
    var arrInStock = [];

    // perulangan recipe dan ubah ke object dari string
    for (const re of JSON.parse(recipes[i].textContent)) {
      // perulangan stokBahan
      for (const stok of stokBahan) {
        if (stok["id"] == re["id_bahan"]) {
          if (stok["quantity"] > re["quantity"]) {
            arrInStock.push(true);
          } else {
            arrInStock.push(false);
          }
        }
      }
    }

    // cek jika semua data sama dengan true maka return true
    function allEqual(arr) {
      return arr.every((v) => v === true);
    }

    // jika dalam arrInStock hanya memiliki satu data maka
    // isi isInStock dengan data arrInStock
    if (arrInStock.length === 1) {
      isInStock = arrInStock[0];
    } else {
      isInStock = allEqual(arrInStock);
    }

    if (!isInStock) {
      btnPesan[i].setAttribute("disabled", "");
      textPesan[i].innerText = "Habis";
    } else {
      btnPesan[i].getAttribute("disabled");
      btnPesan[i].removeAttribute("disabled");
      textPesan[i].innerText = "Pesan";
    }
  }
}
checkStock();

function checkStockSide() {
  // perulangan document recipes
  for (let i = 0; i < dataMenuPesan.length; i++) {
    var isInStock = false;
    var arrInStock = [];

    // perulangan recipe dan ubah ke object dari string
    for (const re of JSON.parse(dataMenuPesan[i]["recipes"])) {
      // perulangan stokBahan
      for (const stok of stokBahan) {
        if (stok["id"] == re["id_bahan"]) {
          if (stok["quantity"] > re["quantity"]) {
            arrInStock.push(true);
          } else {
            arrInStock.push(false);
          }
        }
      }
    }

    // cek jika semua data sama dengan true maka return true
    function allEqual(arr) {
      return arr.every((v) => v === true);
    }

    // jika dalam arrInStock hanya memiliki satu data maka
    // isi isInStock dengan data arrInStock
    if (arrInStock.length === 1) {
      isInStock = arrInStock[0];
    } else {
      isInStock = allEqual(arrInStock);
    }

    if (!isInStock) {
      let buttonInc = document.querySelectorAll(".button-inc");
      buttonInc[i].setAttribute("disabled", "");
    } else {
      let buttonInc = document.querySelectorAll(".button-inc");
      let dis = buttonInc[i].disabled;
      if (dis != null) {
        buttonInc[i].removeAttribute("disabled");
      }
    }
  }
}

function changeStock(dataPesanan, isBuyProduct) {
  for (const recipe of JSON.parse(dataPesanan["recipes"])) {
    for (const stok of stokBahan) {
      if (stok["id"] == recipe["id_bahan"]) {
        if (isBuyProduct) {
          if (stok["quantity"] > recipe["quantity"]) {
            stok["quantity"] -= recipe["quantity"];
            checkStockSide();
          }
        } else {
          stok["quantity"] += recipe["quantity"];
          checkStockSide();
        }
      }
    }
  }
}

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
              <p class="fs-5 text-dark ">
                Rp. ${numberWithCommas(dataMenu["price"])}
              </p>
              <p class="text-dark">
                <button type="button" class="button-dec" style="border: 0; background-color: transparent" onClick='decQuantity(${
                  dataMenu["id"]
                })'>
                  <i class="fa-solid fa-square-minus fa-lg" style="color: #000000;">
                  </i>
                </button>
                <span class="text-dark quantity quantity-product">
                  ${dataMenu["quantity"]}
                </span>
                <button type="button" class="button-inc" style="border: 0; background-color: transparent" onClick='incQuantity(${
                  dataMenu["id"]
                })'>
                  <i class="fa-solid fa-square-plus fa-lg" style="color: #000000;">
                  </i>
                </button>
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
    changeStock(dataMenuPesan[index], false);
  } else {
    let newIndex = dataMenuPesan.findIndex((menu) => menu["id"] == id);

    changeStock(dataMenuPesan[index], false);
    removeDataMenuPesan(newIndex);
    // changeStock(dataMenuPesan[index], false);

    createSideListMenu();
  }
  changeTotalPrice();
  dataToInputOrder();
  checkStock(true, dataMenuPesan[index]);
}

function incQuantity(id) {
  // find index dari menu id dengaan data id
  let index = dataMenuPesan.findIndex((menu) => menu["id"] == id);
  dataMenuPesan[index]["quantity"] += 1;
  changeQuantity(index);
  changeTotalPrice();
  dataToInputOrder();
  if (dataMenuPesan[index]["isCanBuy"]) {
  }
  changeStock(dataMenuPesan[index], true);
  checkStock(true, dataMenuPesan[index], id);
}

document.querySelectorAll(".btn-pesan").forEach(function (el) {
  el.addEventListener("click", function () {
    data = {
      id: el.children[2].innerText,
      menu: el.children[3].innerText,
      price: el.children[4].innerText,
      imageUrl: el.children[5].innerText,
      recipes: el.children[6].innerText,
      quantity: quantity,
      isCanBuy: true,
    };

    // find index dari menu id dengaan data id
    let index = dataMenuPesan.findIndex((menu) => menu["id"] == data["id"]);

    // jika dataMenuPesan masih 0 atau index tidak ada atau data belom ada
    // makan data push ke dataMenuPesan
    if (dataMenuPesan.length == 0 || index == -1) {
      dataMenuPesan.push(data);
      createSideListMenu();
      changeTotalPrice();
      dataToInputOrder();
      changeStock(data, true);
      checkStock(true, dataMenuPesan[index]);
    }
  });
});
