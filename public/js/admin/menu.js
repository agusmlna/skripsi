document.querySelectorAll('.item-1').forEach(function(el) {
  el.addEventListener('click', function() {
      document.querySelector('.dropdown-text-1').innerText = el.children[0].textContent;
      document.querySelector('#name-1').value = el.children[0].textContent;
      document.querySelector('#id-1').value = el.children[1].textContent;
  });
});

document.querySelectorAll('.item-2').forEach(function(el) {
  el.addEventListener('click', function() {
    document.querySelector('.dropdown-text-2').innerText = el.children[0].textContent;
    document.querySelector('#name-2').value = el.children[0].textContent;
    document.querySelector('#id-2').value = el.children[1].textContent;
  });
});

document.querySelectorAll('.item-3').forEach(function(el) {
  el.addEventListener('click', function() {
    document.querySelector('.dropdown-text-3').innerText = el.children[0].textContent;
    document.querySelector('#name-3').value = el.children[0].textContent;
    document.querySelector('#id-3').value = el.children[1].textContent;
  });
});