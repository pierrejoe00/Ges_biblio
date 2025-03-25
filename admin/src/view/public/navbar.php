<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">IPP GESTION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="?action=listLivre">Gestion des Livres</a>
      <a class="nav-item nav-link" href="?action=listAuteur">Gestion des Auteurs</a>
      <a class="nav-item nav-link" href="?action=listCategorie">Liste des categories</a>
      <a class="nav-item nav-link" href="?action=listUsers">Gestion des Utilisateurs</a>
      <a class="nav-item nav-link" href="?action=listRole">Gestion des Roles</a>
    </div>
    <div class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['user'])): ?>
        <span class="navbar-text mr-3">
          Connecté en tant que : <strong><?php echo htmlspecialchars($_SESSION['user']['username']); ?></strong>
        </span>
        <a class="nav-item nav-link btn btn-danger text-white" href="?action=logout">Déconnexion</a>
      <?php else: ?>
        <a class="nav-item nav-link btn btn-primary text-white" href="?action=login">Connexion</a>
      <?php endif; ?>
    </div>
  </div>
</nav>