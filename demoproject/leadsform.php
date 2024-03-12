<!DOCTYPE html> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<title>User Registration</title>
</head>

<div class="sidebar">
<form id="myForm" action="submit.php" method="post">
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required>

<label for="phone">Phone:</label>
<input type="text" id="phone" name="phone">

<label for="Country">Country:</label>
<input type="text" id="Country" name="Country"></textarea>

<label for="TravelAgent">Travel Agent ?:</label>
<input type="text" id="Travel_Agent" name="Travel_Agent"></textarea>


<label for="message">Message:</label>
<textarea id="message" name="message"></textarea>

<input type="submit" value="Submit">
</form>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('myForm');
    var thankYouMsg = document.getElementById('thankYouMsg');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(form);

        // Send form data asynchronously using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', form.getAttribute('action'), true);
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 400) {
                // On successful submission, display thank you message
                thankYouMsg.style.display = 'block';
            } else {
                // On error, display error message
                console.error(xhr.statusText);
            }
        };
        xhr.onerror = function() {
            // Display error message if AJAX request fails
            console.error('Error: Unable to submit form.');
        };
        xhr.send(formData);
    });
});
</script>
</div>

</html>