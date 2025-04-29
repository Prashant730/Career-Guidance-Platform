<?php
require_once "../auth/config.php";

// Create test HR users
$testUsers = [
    [
        'fullname' => 'HR Manager 1',
        'email' => 'hr1@example.com',
        'password' => password_hash('password123', PASSWORD_DEFAULT),
        'role' => 'hr'
    ],
    [
        'fullname' => 'HR Manager 2',
        'email' => 'hr2@example.com',
        'password' => password_hash('password123', PASSWORD_DEFAULT),
        'role' => 'hr'
    ],
    [
        'fullname' => 'HR Manager 3',
        'email' => 'hr3@example.com',
        'password' => password_hash('password123', PASSWORD_DEFAULT),
        'role' => 'hr'
    ]
];

// Insert test users
$sql = "INSERT INTO users (fullname, email, password, role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

foreach ($testUsers as $user) {
    $stmt->bind_param("ssss",
        $user['fullname'],
        $user['email'],
        $user['password'],
        $user['role']
    );

    try {
        $stmt->execute();
        echo "Created user: " . $user['email'] . "\n";
    } catch (mysqli_sql_exception $e) {
        // Skip if user already exists
        if ($e->getCode() == 1062) { // Duplicate entry error
            echo "User already exists: " . $user['email'] . "\n";
        } else {
            throw $e;
        }
    }
}

$stmt->close();
$conn->close();

echo "Test users creation completed.\n";
?>