<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST request received";
} else {
    echo "This script only handles POST requests.";
}
?>
