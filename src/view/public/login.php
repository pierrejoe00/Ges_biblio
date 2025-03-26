<div class="container mt-5">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header text-white py-4" style="background: linear-gradient(135deg, #2c3e50, #3498db);">
                    <h2 class="text-center mb-0">Connexion</h2>
                </div>
                <div class="card-body p-5" style="background-color: #f8f9fa;">
                    <form action="?action=login" method="POST">
                        <div class="mb-4 px-3">
                            <label for="email" class="form-label fw-bold fs-5" style="color: #2c3e50;">Email</label>
                            <input type="email" class="form-control form-control-lg border-0 shadow-sm py-3" id="email" name="email" required>
                        </div>
                        <div class="mb-5 px-3">
                            <label for="password" class="form-label fw-bold fs-5" style="color: #2c3e50;">Mot de passe</label>
                            <input type="password" class="form-control form-control-lg border-0 shadow-sm py-3" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2 px-3">
                            <button type="submit" class="btn btn-lg text-white py-3 fs-5" style="background: linear-gradient(135deg, #2c3e50, #3498db);">
                                Se connecter
                            </button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p class="text-secondary fs-5">Pas encore inscrit ? 
                            <a href="?action=register" class="fw-bold" style="color: #3498db; text-decoration: none;">
                                Créer un compte
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
