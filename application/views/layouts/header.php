<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title><?=$title?></title>

  <link rel="icon" href="<?=base_url('assets/img/logo-depok.png')?>">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css?v=<?=time()?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/mixin.css?v=<?=time()?>">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/simple-sidebar.css?v=<?=time()?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/styles-rating.css?v=<?=time()?>">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/ourContentStyle.css?v=<?=time()?>">
  <link rel="stylesheet" href="<?=base_url()?>assets/css/ourFormStyle.css?v=<?=time()?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/40613f3d16.js" crossorigin="anonymous"></script>
  <style>
  </style>
</head>

<body id="body">
    <!-- Sidebar -->
    <sidebarWrapper class="sidebarWrapper" id="sidebarWrapper">
      <sidebarHeading class="sidebar-heading">
        <a href="<?=base_url('dashboard')?>" title="SIWIKODE">
          <i class="fas fa-location-arrow"></i>
          <span>SIWIKODE</span>
        </a>
      </sidebarHeading>
      <!--------------------->
      <sidebarLink class="sidebar-link">
      <?php foreach($whoCanAccessMenu as $row): ?>
        <div class="text-left titleOfMenu">
          <?= $row['menu']; ?>
        </div>
        <?php 
        $menuId = $row['id'];
        $showUserMenu = $this->important_model->__showUserMenuManagement__($menuId);
        ?>
        <!------ Line ------>
        <?php foreach ($showUserMenu as $row): ?>
        <?php if($row['title'] != 'Menu Management'):?>
        <div class="menuSidebar">
          <a href="<?= base_url($row['url']); ?>" class="list-group-item" title="<?=$row['title']?>">
            <i class="<?=$row['icon']?>"></i>
            <span><?=$row['title']?></span>
          </a>
        </div>
        <?php endif;?>
        <?php endforeach; ?>
        <div class="borderBottom"></div>
      <?php endforeach; ?>   
      <div class="menuSidebar">
          <a href="<?= base_url('auth/logout'); ?>" class="list-group-item" title="Logout">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
          </a>
        </div>
      </sidebarLink>

    </sidebarWrapper>
    <!-- sidebar-wrapper -->
    <!-- Page Content -->
    <div class="page-content-wrapper" id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg" id="navbar">
        <navMenuButton class="btn menu-toggle" id="menu-toggle">
          <i id="iconMenuToggle" class="bi bi-caret-left-fill"></i>
        </navMenuButton>

        <welcomeUser class="welcome-user">
          <h6>Welcome, <span><?=$user['username']?></span></h6>
        </welcomeUser>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <!-------------------->
            <li class="nav-item navbarDropdown userProfile" id="navbarDropdown" title="Menu">
              <buttonDropdown class="buttonNavbarDropdown" id="buttonNavbarDropdown">
                <i id="iconNavbarDropdown" class="bi bi-caret-down-fill"></i>
              </buttonDropdown>
              
              <menuDropdown class="menuNavbarDropdown" id="menuNavbarDropdown">
                <a href="<?=base_url('user/edit')?>" class="dropdownItem">
                  <iconDropdown class="iconDropdownItem">
                    <i class="fas fa-cog"></i>
                  </iconDropdown>
                  <textDropdown class="textDropdownItem">
                    Setting and Edit
                  </textDropdown>
                </a>
                <!-------------------->
                <a href="<?=base_url('our_team')?>" class="dropdownItem">
                  <iconDropdown class="iconDropdownItem">
                    <i class="fas fa-users"></i>
                  </iconDropdown>
                  <textDropdown class="textDropdownItem">
                    Our Teams
                  </textDropdown>
                </a>
                <!-------------------->
                <a href="<?=base_url('auth/logout')?>" class="dropdownItem">
                  <iconDropdown class="iconDropdownItem">
                    <i class="fas fa-sign-out-alt"></i>
                  </iconDropdown>
                  <textDropdown class="textDropdownItem">
                    Logout
                  </textDropdown>
                </a>
              </menuDropdown>
            </li>
            <!-------------------->
            <li class="nav-item userProfile">
              <a class="ourImage" href="<?=base_url('user')?>" title="Profile">
                <img class="" src="<?=base_url('assets/img/photo_profile/').$user['image'];?>" alt="<?=$user['username']?>">
              </a>
            </li>
          </ul>
        </div>
      </nav>
