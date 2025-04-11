// Get all the itotal elements and the gtotal and ototal elements
const itotals = document.getElementsByClassName('itotal');
const gtotal = document.getElementById('gtotal');
const ototal = document.getElementById('ototal');

// Function to calculate the subtotal for each item and update the itotal element
function updateSubtotal(index, newPrice, newQuantity) {
  const price = parseFloat(newPrice || document.querySelectorAll('.table tbody tr')[index].children[2].innerText.replace('Rs:- ', '').replace(' /-', ''));
  const quantity = parseFloat(newQuantity || document.querySelectorAll('.table tbody tr')[index].children[3].children[0].value);
  const itotal = price * quantity;
  itotals[index].innerText = `Rs:- ${itotal.toFixed(2)} /-`;

  // Calculate the grand total
  let total = 0;
  for (let i = 0; i < itotals.length; i++) {
    total += parseFloat(itotals[i].innerText.replace('Rs:- ', '').replace(' /-', ''));
  }
  gtotal.innerText = `Rs:- ${total.toFixed(2)} /-`;
  ototal.innerText = `Rs:- ${total.toFixed(2)} /-`;
}

// Function to handle quantity changes
function handleQuantityChange(event, index) {
  updateSubtotal(index, null, event.target.value);
}

// Function to handle price changes
function handlePriceChange(event, index) {
  const newPrice = event.target.value.replace('Rs:- ', '').replace(' /-', '');
  updateSubtotal(index, newPrice, null);
}

// Add an event listener to each quantity input element to update the subtotal when the quantity changes
const quantityInputs = document.querySelectorAll('.table tbody tr td input[type="number"]');
for (let i = 0; i < quantityInputs.length; i++) {
  quantityInputs[i].addEventListener('change', function(event) {
    handleQuantityChange(event, i);
  });
}

// Add an event listener to each price input element to update the subtotal when the price changes
const priceInputs = document.querySelectorAll('.table tbody tr td input[type="text"]');
for (let i = 0; i < priceInputs.length; i++) {
  priceInputs[i].addEventListener('change', function(event) {
    handlePriceChange(event, i);
  });
}

// Initialize the subtotal and grand total for the first item in the cart
updateSubtotal(0);