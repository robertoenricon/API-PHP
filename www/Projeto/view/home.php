<?php

require_once('../model/header.php');

$cookie = new cookie();
$cookie = $cookie->get_cookie();

?>

<body>

  <nav class="navbar navbar-expand-lg nav-cookie <?php echo isset($cookie) ? 'color-' . $cookie['cookieType'] : 'color-1'; ?>">

    <div class="container-fluid">

      <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
      </a>

      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <div class="col">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
          </ul>
        </div>

        <div class="col">
          <ul class="navbar-nav dropstart justify-content-end">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Opções
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <label class="form-label p-2">
                    <h6>Escolha a cor do seu Layout</h6>
                  </label>
                  <form class="margin-range">
                    <input type="range" class="custom-range" id="customRange" min="0" max="100" value="<?php echo isset($cookie) ? $cookie['cookieVal'] : '10'; ?>">
                  </form>
                </li>

              </ul>
            </li>
          </ul>
        </div>

      </div>

    </div>

  </nav>

  <!-- TABLE -->
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="table-responsive">
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">User</th>
                <th scope="col">pass</th>
              </tr>
            </thead>
            <tbody id="list">

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <?php

  require_once('../model/footer.php');

  ?>

</body>

</html>