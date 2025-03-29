<?php
try {
    $dsn = "pgsql:host=localhost;port=5432;dbname=Ges_Biblio";
    $username = "postgres";
    $password = "passer";
    
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd']; 
    $numero = $_POST['numero'];

    $sql = "INSERT INTO users (id, nom, prenom, email, pwd, numero, role_id) VALUES (nextval('users_id_seq'), ?, ?, ?, ?, ?, 2)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $pwd, $numero]);

    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Bibliothèque</title>
    <style>
        body {
            background-image: url('./uploads/biblio.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        .btn-login {
            width: 100%;
            padding: 1rem;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.1rem;
            cursor: pointer;
        }
        
        .btn-login:hover {
            background: #0056b3;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 2rem;
        }
        h1 {
            color: #007bff;
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>COJOS LIBRAIRIE</h1>
        <h2>Inscription</h2>
        <form method="POST" class="login-form">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe:</label>
                <input type="password" id="pwd" name="pwd" required>
            </div>
            <div class="form-group">
                <label for="numero">Numéro:</label>
                <input type="text" id="numero" name="numero" required>
            </div>
            <button type="submit" class="btn-login">S'inscrire</button>
        </form>
        <p style="text-align: center; margin-top: 1rem;">
            Déjà inscrit? <a href="login.php" style="color: #007bff; text-decoration: none;">Connectez-vous</a>
        </p>
    </div>
</body>
</html>
