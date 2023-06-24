

function bookFlight() {
  // Get the selected flight type
  var flightType = document.getElementById("flight-type").value;

  // Get the number of passengers
  var numPassengers = document.getElementById("num-passengers").value;

  // Calculate the total price
  var pricePerPassenger = getPricePerPassenger(flightType);
  var totalPrice = pricePerPassenger * numPassengers;

  // Redirect to the passenger details page
  var url = "passenger-details.html?flightType=" + flightType + "&numPassengers=" + numPassengers + "&totalPrice=" + totalPrice;
  window.location.href = url;
}

function getPricePerPassenger(flightType) {
  // Define the prices for each flight type
  var prices = {
    economy: 5000,
    business: 10000,
    "first-class": 20000
  };

  // Return the price for the selected flight type
  return prices[flightType];
}