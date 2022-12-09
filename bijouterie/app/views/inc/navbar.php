    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
        <img src="<?php echo URLROOT.'/images/logo.png'; ?>" alt="logo de site">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo URLROOT.'/pages/'; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT.'/pages/about'; ?>"> About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT.'/pages/gallery'; ?>"> Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT.'/pages/contact'; ?>"> Contact</a>
            </li>
            <?php if(isset($_SESSION['id'])) :?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?= $_SESSION['name'] ?></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo URLROOT.'/Admin/dashbord'; ?>">Dashbord</a></li>
                    <hr>
                    <li><a class="dropdown-item" href="<?php echo URLROOT.'/Admins/logout'; ?>">Log out</a></li>
                  </ul>
              </li> 
            <?php else :?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT.'/pages/connect'; ?>">Connect</a>
              </li>
            <?php endif ;?>
          </ul>
        </div>
      </div>
    </nav>