<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/app.css">
    <title>DaihasuWeb | Sign In</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light py-2 fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>">
          <img src="<?= BASEURL; ?>/img/logo.png" alt="" width="45px" height="45px" class="rounded-3">
        </a>
      </div>
    </nav>

    <div class="d-flex justify-content-center py-3 mt-3">
      <form class="mt-5 rounded-3 border-1 border p-3" method="post" style="width: 340px;" novalidate="novalidate">
        <h5 class="pb-3">DaihatsuWeb SignIn</h5>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control border-0 bg-light rounded-3" name="u_username" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control border-0 bg-light rounded-3" name="u_password" id="thisFormPassword" required>
        </div>
        <div class="mb-3 float-end">
          <input type="checkbox" id="thisShowPassword" onclick="ShowPassword()">
          <span class="checkbox">Show Password</span>
        </div>
        <div class="mb-2">
          <div class="g-recaptcha mb-5" data-sitekey="6LcQukMeAAAAAGWASuQvRXVoCul-MxEMyJtBIlpX"></div>
          <input type="submit" class="btn-red rounded-me py-2 border-0 w-100 mt-2" value="Masuk" name="u_submit">
          <a href="<?= BASEURL; ?>/signup" class="btn btn-outline-red rounded-me w-100 py-2 my-2">Daftar</a>
        </div>
      </form>
    </div>

    <script type="text/javascript">
      function ShowPassword() {
      var checkBox = document.getElementById("thisShowPassword");
      var formPassword = document.getElementById("thisFormPassword");

        if (checkBox.checked == true){
          formPassword.type = 'text';
        } else {
          formPassword.type = 'password';
        }
      } 
    </script>