<?php
session_start();

// Function to sanitize input data
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Function to validate form data
function validateForm($data) {
    $errors = [];
    
    if (empty($data['nom'])) {
        $errors[] = "Le nom est requis";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $data['nom'])) {
        $errors[] = "Le nom ne doit contenir que des lettres";
    }
    
    if (empty($data['age']) || !is_numeric($data['age'])) {
        $errors[] = "L'âge doit être un nombre valide";
    }
    
    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }
    
    if (empty($data['pass'])) {
        $errors[] = "Le mot de passe est requis";
    }
    
    return $errors;
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['go'])) {
    $formData = [
        'nom' => sanitizeInput($_POST['nom'] ?? ''),
        'age' => sanitizeInput($_POST['age'] ?? ''),
        'email' => sanitizeInput($_POST['email'] ?? ''),
        'pass' => $_POST['pass'] ?? '',
        'address' => sanitizeInput($_POST['address'] ?? ''),
        'ville' => sanitizeInput($_POST['ville'] ?? ''),
        'sexe' => sanitizeInput($_POST['sexe'] ?? '')
    ];
    
    $errors = validateForm($formData);
    
    if (empty($errors)) {
        try {
            // Database connection parameters
            $host = 'localhost';
            $dbname = 'ouadie';
            $user = 'root';
            $password = "";

            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
            
            // Hash password before storing
            $hashedPassword = password_hash($formData['pass'], PASSWORD_DEFAULT);
            
            // Prepare SQL statement to prevent SQL injection
            $stmt = $pdo->prepare("INSERT INTO username (nom, age, email, password, address, ville, sexe) 
                                    VALUES (:nom, :age, :email, :pass, :address, :ville, :sexe)");
            
            $stmt->execute([
                'nom' => $formData['nom'],
                'age' => $formData['age'],
                'email' => $formData['email'],
                'pass' => $hashedPassword,
                'address' => $formData['address'],
                'ville' => $formData['ville'],
                'sexe' => $formData['sexe']
            ]);
            
            echo "<script>alert('Inscription réussie!');</script>";
            
        } catch (PDOException $e) {
            error_log("Database Error: " . $e->getMessage());
            echo "<script>alert('Une erreur est survenue. Veuillez réessayer.');</script>";
        }
    } else {
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
    }
}
?>