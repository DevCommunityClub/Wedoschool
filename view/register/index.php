<?php include("../frontend/header.php") ?>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="http://localhost/Wedoschool/assets/img/DUGNY01.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
              <img src="http://localhost/Wedoschool/assets/img/Wischoollogo.png" alt="logo" class="logo mr-2">
                  <span class="font-weight-bold">WeDoSchool</span>
              </div>
              <p class="login-card-description">Enregistrez-vous</p>
              <form action="./ct-reg.php" method="post">
                <div class="form-group">
                    <label for="name" class="sr-only">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom Prénom" required>
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="mail" id="mail" class="form-control" placeholder="Adresse Mail" required>
                  </div>
                  <div><input type="checkbox" name="cookie" id="remember" />
              		<label for="remember-me">Remember me</label>
                  <input type="submit" class="btn btn-block login-btn mb-4" value="S'enregistre">
              </form>
              <p style="font-size:12px;" class="text-muted">*Validez l'inscription revient à accepter nos CGU.</p>
                <p class="login-card-footer-text">Vous avez déjà un compte? <a href="http://localhost/Wedoschool/view/login/index.php" class="text-reset">Se connecter</a></p>
                <nav class="login-card-footer-nav">
                    <a href="http://localhost/Wedoschool/view/privacy.php">CGU</a>
                </nav>
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
