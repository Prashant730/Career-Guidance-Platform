<?php
/**
 * Logout Test Script
 * This script helps you test the logout functionality
 */

session_start();

echo "<h1>Logout Test Page</h1>";

// Check if user is logged in
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    echo "<div style='background: #d4edda; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
    echo "<h2>✓ Session Active</h2>";
    echo "<p><strong>User ID:</strong> " . htmlspecialchars($_SESSION["id"]) . "</p>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($_SESSION["fullname"]) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_SESSION["email"]) . "</p>";
    echo "</div>";

    echo "<h3>Test Actions:</h3>";
    echo "<ol>";
    echo "<li><a href='src/auth/logout.php' style='color: blue;'>Click here to logout</a></li>";
    echo "<li>After logout, use browser back button - you should NOT be able to access this page</li>";
    echo "<li>Or delete your user from database and refresh this page - you should be logged out automatically</li>";
    echo "</ol>";
} else {
    echo "<div style='background: #f8d7da; padding: 15px; margin: 10px 0; border-radius: 5px;'>";
    echo "<h2>✗ No Active Session</h2>";
    echo "<p>You are not logged in.</p>";
    echo "<p><a href='src/auth/login.php' style='color: blue;'>Go to Login</a></p>";
    echo "</div>";
}

echo "<hr>";
echo "<h3>Session Data:</h3>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<h3>Cookie Data:</h3>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
