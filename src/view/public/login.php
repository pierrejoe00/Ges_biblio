<form action="?action=login" method="POST">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mt-5 mb-5">
          <div class="card-header bg-light">
            <h3 class="text-center">Connexion</h3>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control form-control-lg" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Se connecter</button>
          </div>
          <div class="card-footer bg-light text-center">
            <div class="mt-3">
              <a href="?action=register" class="link-primary">Pas encore inscrit ? Créer un compte</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>