const cart = JSON.parse(localStorage.getItem('cart'));

function updateTotal() {
  const subtotalTr = document.getElementById('subtotal');
  const taxTr = document.getElementById('tax');
  const totalTr = document.getElementById('total');

  const subtotal = cart.reduce(
    (accumulator, current) => current.price * current.quantity + accumulator,
    0
  );
  const tax = subtotal * 0.08;
  const total = subtotal + tax;

  subtotalTr.innerText = '$' + subtotal.toFixed(2);
  taxTr.innerText = '$' + tax.toFixed(2);
  totalTr.innerText = '$' + total.toFixed(2);
}

updateTotal();
