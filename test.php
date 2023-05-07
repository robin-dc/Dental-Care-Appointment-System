<!-- HTML code with radio buttons and a button to trigger the AJAX request -->
<script src="jquery-3.6.1.min.js"></script>
<form>
  <input type="radio" name="color" value="red">Red<br>
  <input type="radio" name="color" value="green">Green<br>
  <input type="radio" name="color" value="blue">Blue<br>
  <button type="button" onclick="submitForm()">Submit</button>
</form>

<!-- JavaScript code to submit the form using AJAX -->
<script>
  function submitForm() {
    // Get a reference to the radio button element
    const radioButton = document.querySelector('input[name="color"]:checked');

    // Only submit the form if a radio button is selected
    if (radioButton) {
      // Get the value of the selected radio button
      const selectedValue = radioButton.value;

      // Create a new XMLHttpRequest object
      const xhr = new XMLHttpRequest();

      // Set up a callback function to handle the response from the server
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Handle the response from the server
            console.log(xhr.responseText);
          } else {
            // Handle errors
            console.error(xhr.status);
          }
        }
      };

      // Open the connection to the server-side script
      xhr.open("POST", "testProcess.php", true);

      // Set the content type of the request
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      // Send the request to the server-side script with the selected value as the parameter
      xhr.send("color=" + selectedValue);
    }
  }
</script>
