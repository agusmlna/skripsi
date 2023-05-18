// let queryname = document.querySelector('.name');
// let queryPrice = document.querySelector('.price');
let queryPesanan = document.querySelector('.pesanan');
let queryTotal = document.querySelector('.total');
let totalPrice = 0;
let dataMenuPesan = [];
let dataPesananHTML = [];
let data = {};
let quantity = 1;

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

document.querySelectorAll('.btn-pesan').forEach(function(el) {
  el.addEventListener('click', function() {
     data ={
      'id': el.children[2].innerText,
      'menu': el.children[3].innerText,
      'price': el.children[4].innerText,
      'quantity': quantity,
    };


    totalPrice += parseInt(data['price']);
    queryTotal.innerText = `Rp. ${numberWithCommas(totalPrice)}`;
    
    // if(data['id'] == el.children[2].innerText) {
    //   data['quantity'] =  1;
    // }

    let index = dataMenuPesan.findIndex((menu) => menu['id'] == data['id']);
    
    // if (dataMenuPesan.length >= 1) {
    //   for (const menu of dataMenuPesan) {
    //     if(menu['id'] == data['id']) {
    //       menu['quantity'] +=  1;
    //       data['quantity'] = 1;
    //     } 
    //   }
    // } else {
    //   dataMenuPesan.push(data);
    // }

    if (dataMenuPesan.length == 0 || index == -1) {
      dataMenuPesan.push(data);
      dataPesananHTML.push( `
        <div class="row">
          <div class="col">
            <h3 class="text-dark name">${data['menu']}</h3>
            <h3 class="text-dark quantity">1</h3>
          </div>
          <div class="col">
            <p class="text-dark price">Rp. ${numberWithCommas(data['price'])}</p>
          </div>
        </div>
      `);
    } else {
      dataMenuPesan[index]['quantity'] += 1;
      data['quantity'] = 1;
    }
    
    // console.log(data['quantity']);
    // console.log(dataMenuPesan);
    // dataMenuPesan.forEach(function(item, index) {
      // dataPesananHTML = [];
      // dataPesananHTML.push( `<div class="row "><div class="col"><h3 class="text-dark name">${item['menu']}</h3></div><div class="col"><p class="text-dark price">Rp. ${numberWithCommas(item['price'])}</p></div></div>`);
    // });
    
    queryPesanan.innerHTML = '';

    dataPesananHTML.forEach(function(item, index) {
      queryPesanan.innerHTML += item;
      let queryQuantity = document.querySelectorAll('.quantity');
      queryQuantity[index].innerText = dataMenuPesan[index]['quantity'];
    });
    // for (let pesan of dataPesananHTML) {
    //   queryPesanan.innerHTML += pesan;
    //   let queryQuantity = document.querySelectorAll('.quantity-1');
    //   queryQuantity[index].innerHTML = dataMenuPesan[index]['quantity'];
    // }
  });
});



