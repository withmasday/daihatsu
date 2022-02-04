<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/app.css">
    <title>DaihasuWeb | Sign Up</title>
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
        <h5 class="pb-3">DaihatsuWeb SignUp</h5>
        <ul class="nav nav-pills mb-3 d-none" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control border-0 bg-light rounded-3" name="u_name" required>
            </div>
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
              <button class="btn-red rounded-me py-2 border-0 w-100 mt-2" type="button" onclick="showSlide('#pills-profile')">Lanjut</button>
              <a href="<?= BASEURL; ?>" class="btn btn-outline-red rounded-me w-100 py-2 my-2">Kembali</a>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="mb-3">
              <label class="form-label">Telp</label>
              <input type="text" class="form-control border-0 bg-light rounded-3" name="u_telp" placeholder="08xxxxxxxxxx" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Telp WhatsApp</label>
              <input type="text" class="form-control border-0 bg-light rounded-3" name="u_whatsapp" placeholder="08xxxxxxxxxx" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <textarea class="form-control border-0 bg-light rounded-3" name="u_alamat" rows="2" required></textarea>
            </div>
            <div class="mb-2">
              <div class="g-recaptcha mb-3" data-sitekey="6LcQukMeAAAAAGWASuQvRXVoCul-MxEMyJtBIlpX"></div>
              <input class="btn-red rounded-me py-2 border-0 w-100 mt-2" type="submit" name="submit" value="Daftar"/>
              <a onclick="showSlide('#pills-home')" class="btn btn-outline-red rounded-me w-100 py-2 my-2">Kembali</a>
            </div>
          </div>
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
      function showSlide(target){
        $('#pills-tab button[data-bs-target="'+ target +'"]').tab('show');
      }
    </script>