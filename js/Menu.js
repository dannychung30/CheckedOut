function addToCart() {
  const menu = document.getElementById('menu');
  const inputs = menu.getElementsByTagName('input');

  const selectedItems = Array.from(inputs)
    .filter((item) => item.checked)
    .map((item) => {
      return { name: item.name, price: item.value, quantity: 1 };
    });

  window.localStorage.setItem('cart', '[]');
  window.localStorage.setItem('cart', JSON.stringify(selectedItems));
}

const add_to_cart_btn = document.getElementById('add_to_cart_btn');
add_to_cart_btn.addEventListener('click', addToCart);
