<!DOCTYPE html>
<html>
<head>
    <title>Espace Client - Bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Ma Bibliothèque</a>
            <div class="navbar-nav">
                <a class="nav-link" href="index.php?action=catalogue">Catalogue</a>
                <a class="nav-link" href="index.php?action=mes-emprunts">Mes Emprunts</a>
                <a class="nav-link" href="index.php?action=mon-profil">Mon Profil</a>
                <a class="nav-link" href="index.php?action=logout">Déconnexion</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Mes livres empruntés</h2>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Le Petit Prince</h5>
                        <p class="card-text">Date d'emprunt: 01/03/2024</p>
                        <p class="card-text">À retourner le: 15/03/2024</p>
                        <a href="#" class="btn btn-primary">Prolonger</a>
                    </div>
                </div>
            </div>
            <!-- Autres livres -->
        </div>
    </div>
</body>
</html>
