<?php
// Check if the "color" variable is set
if (isset($_POST["color"])) {
  // Retrieve the value of the "color" variable from the $_POST superglobal array
  $color = $_POST["color"];

  // Do some processing with the value (e.g., store it in a database)

  // Echo the value of the "color" variable
  echo "The selected color is: " . $color;
} else {
  // If the "color" variable is not set, return an error message
  echo "Error: The 'color' variable is not set.";
}

