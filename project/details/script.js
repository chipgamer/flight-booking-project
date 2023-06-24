


function bookFlight() {
  // Get the selected flight type, number of passengers, and class type from URL parameters
  var urlParams = new URLSearchParams(window.location.search);
  var flightType = urlParams.get("flightType");
  var numPassengers = urlParams.get("numPassengers");
  var classType = urlParams.get("classType");

  // Get the passenger details
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;

  // Redirect to the confirmation page
  var url = "confirmation.html?flightType=" + flightType + "&numPassengers=" + numPassengers + "&classType=" + classType + "&name=" + name + "&email=" + email + "&phone=" + phone;
  window.location.href = url;
}

