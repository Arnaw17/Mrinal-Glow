// Check if the quantity value is stored in local storage
var storedQuantity = localStorage.getItem('quantity');
if (storedQuantity) {
  // If it is, set the value of the input field and display element
  document.getElementById('quantity-input').value = storedQuantity;
  document.getElementById('quantity-display').innerHTML = storedQuantity;
}

// Add an event listener to the input field to update local storage
document.getElementById('quantity-input').addEventListener('change', function() {
  var quantity = this.value;
  localStorage.setItem('quantity', quantity);
  document.getElementById('quantity-display').innerHTML = quantity;
});