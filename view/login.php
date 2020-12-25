<?php include("../view/frontend/header.php") ?>

  <body>

    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="../assets/img/DUGNY01.jpg" alt="login" class="login-card-img">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="../assets/img/Wischoollogo.png" alt="logo" class="logo mr-2">
                  <span class="font-weight-bold">WeDoSchool</span>
                </div>
                <p class="login-card-description">Connectez-vous</p>
                <form action="ct-login.php">
                    <div class="form-group">
                      <label for="email" class="sr-only">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Adresse Mail">
                    </div>
                    <div class="form-group mb-4">
                      <label for="password" class="sr-only">Password</label>
                      <input type="password" name="password" id="password" class="form-control" placeholder="*********">
                    </div>
                    <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="Se connecter">
                  </form>
                  <a href="#!" class="forgot-password-link">Mot de passe oublié ?</a>
                  <p class="login-card-footer-text">Pas encore de compte? <a href="../view/register.php" class="text-reset">S'enregistre</a></p>
                  <div class="login-card-footer-nav">
                    <a href="../view/privacy.php">CGU</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
