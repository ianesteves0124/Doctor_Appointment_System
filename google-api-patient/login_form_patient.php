<?php
require_once '../database/config-api.php';

if (isset($_SESSION['user_token'])) {
    header("Location: auth-to-db.php");
}
else{
    echo "<a href = '" . $google_client->createAuthUrl(). "'> Sign in with Google account </a>";
}
?>