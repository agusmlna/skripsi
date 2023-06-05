$(function(){
    $('#datepicker').datepicker();
  });

document.querySelector('.btn-confirm').addEventListener('click', function() {
  // input
  let inputNamaDepan = document.querySelector('#inputNamaDepan').value;
  let inputNamaBelakang = document.querySelector('#inputNamaBelakang').value;
  let inputEmail = document.querySelector('#inputEmail').value;
  let inputTelpon = document.querySelector('#inputTelpon').value;
  let inputMeja = document.querySelector('#inputMeja').value;
  let inputTanggal = document.querySelector('#inputTanggal').value;

  // modal
  let modalNamaDepan = document.querySelector('.nama-depan');
  let modalNamaBelakang = document.querySelector('.nama-belakang');
  let modalEmail = document.querySelector('.modal-email');
  let modalTelpon = document.querySelector('.modal-telpon');
  let modalMeja = document.querySelector('.modal-meja');
  let modalTanggal = document.querySelector('.modal-tanggal');

  // insert input to modal
  modalNamaDepan.textContent = inputNamaDepan;
  modalNamaBelakang.textContent = inputNamaBelakang;
  modalEmail.textContent = inputEmail;
  modalTelpon.textContent = inputTelpon;
  modalMeja.textContent = inputMeja;
  modalTanggal.textContent = inputTanggal;
});

