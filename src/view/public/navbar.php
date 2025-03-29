<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7f2b18;">
  <style>
    .navbar-brand {
      color:rgb(8, 3, 3) !important;
    }
    .navbar-nav .nav-link:not(.active) {
      font-family: 'Arial', sans-serif;
      color: rgb(247, 246, 243) !important;
    }
  </style>
  <a class="navbar-brand" href="?action=listLivre">COJO's LIBRAIRIE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link active" href="?action=listLivre">Gestion des livres</a>
      <br>
      <a class="nav-item nav-link " href="?action=listCategorie">Gestion des categories</a>
      <br>
      <a class="nav-item nav-link " href="?action=listAuteur">Gestion des auteurs</a>
      <br>
      <a class="nav-item nav-link " href="?action=listUsers">Gestion des users</a>
      <br>
      <a class="nav-item nav-link " href="?action=listRole">Gestion des rôles</a>
    </div>
    <div class="navbar-nav ml-auto d-flex justify-content-end">
      <span class="nav-item nav-link">
        <?php echo $_SESSION['prenom'] ?? 'Utilisateur'; ?>
      </span>
      <a class="nav-item nav-link" href="?action=logout">Déconnexion</a>
    </div>
  </div>
</nav>