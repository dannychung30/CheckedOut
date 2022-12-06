const cart = JSON.parse(localStorage.getItem('cart'));

function loadCart() {
  const cartAsHTML = cart.map(({ name, price, quantity }) => {
    const quantityInput = document.getElementById('quantity-selection');

    return `
        <tr class="menuItem">
          <td><img src="../photos/trash.png" /></td>
          <!--<td><img id="itemPhoto"></td>-->
          <td id="name_description">
            <h3>${name}</h3>
          </td>
          <td id="cost">
            <h3 id="itemsCost">$${price}</h3>
          </td>
          <td id="quantity">
            <form style="border: none">
              <select id="quantity-selection">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </form>
          </td>
          <td id="cost">
            <h3 id="totalItemsCost">$${price * quantity}</h3>
          </td>
        </tr>
      `;
  });

  const table = document.getElementById('cartItems');
  table.innerHTML = cartAsHTML.join('');
}

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

const updateBtn = document.getElementById('updateCart-button');
updateBtn.addEventListener('click', () => {
  updateTotal();
  loadCart();
});

updateTotal();
loadCart();
