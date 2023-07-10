let meja = document.querySelector("#inputMeja");
let formCheck = document.querySelector(".form-check-input");
let btnSubmit = document.querySelector(".btn-submit");

// cek tanggal apakah tanggal input dengan tanggal reservasi sama atau tidak
// jika sama return true
// tipe parameter harus timeStamp
function compareDate(date1, date2) {
  return date1 == date2;
}

function disabledInputMeja(reservasi) {
  for (const m of meja.children) {
    if (reservasi["no_meja"] == m.value) {
      m.setAttribute("disabled", "");
      console.log("disabled input meja");
    }
  }
}

function removeDisabledInputMeja() {
  for (const m of meja.children) {
    let dis = m.disabled;
    if (dis != null) {
      m.removeAttribute("disabled");
      console.log("remove disabled input meja");
    }
  }
}

$("#datepicker")
  .datepicker()
  .on("changeDate", function (e) {
    let dataReservasi = document.querySelector(".data-reservasi");
    let reservasi = JSON.parse(dataReservasi.textContent);

    let inputTanggal = document.querySelector("#inputTanggal").value;
    let date1 = new Date(inputTanggal).getTime();

    // hapus semua disabled pada input meja
    // laru lakukan pengecekan tanggal input dengan tanggal reservasi
    removeDisabledInputMeja();
    for (const r of reservasi) {
      let date2 = new Date(r["tanggal"]).getTime();
      if (compareDate(date1, date2)) {
        console.log("sama");
        disabledInputMeja(r);
      }
    }
  });

document.querySelector(".btn-confirm").addEventListener("click", function () {
  // input
  let inputNamaDepan = document.querySelector("#inputNamaDepan").value;
  let inputNamaBelakang = document.querySelector("#inputNamaBelakang").value;
  let inputEmail = document.querySelector("#inputEmail").value;
  let inputTelpon = document.querySelector("#inputTelpon").value;
  let inputMeja = document.querySelector("#inputMeja").value;
  let inputTanggal = document.querySelector("#inputTanggal").value;

  // modal
  let modalNamaDepan = document.querySelector(".nama-depan");
  let modalNamaBelakang = document.querySelector(".nama-belakang");
  let modalEmail = document.querySelector(".modal-email");
  let modalTelpon = document.querySelector(".modal-telpon");
  let modalMeja = document.querySelector(".modal-meja");
  let modalTanggal = document.querySelector(".modal-tanggal");

  // insert input to modal
  modalNamaDepan.textContent = inputNamaDepan;
  modalNamaBelakang.textContent = inputNamaBelakang;
  modalEmail.textContent = inputEmail;
  modalTelpon.textContent = inputTelpon;
  modalMeja.textContent = inputMeja;
  modalTanggal.textContent = inputTanggal;

  let meja = document.querySelector("#meja");

  meja.value = inputMeja;
});

// fungsi untuk cek apakah checkbox tercentang
formCheck.addEventListener("click", function () {
  if (!formCheck.checked) {
    btnSubmit.setAttribute("disabled", "");
  } else {
    btnSubmit.removeAttribute("disabled");
  }
});
