  <!-- partial -->
  <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="<?= base_url('assets/label-free/images/profile/male/image_1.png') ?>" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name">Admin</p>
            <h6 class="display-income">@IProtect</h6>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>          
          <li>
            <a href="<?= site_url('/') ?>">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>           
          <li>
            <a href="<?= site_url('dashboard/request-maintenance') ?>">
              <span class="link-title">Request Maintenance</span>
              <i class="mdi mdi-laptop-mac link-icon"></i>
            </a>
          </li>         
          <li>
            <a href="<?= site_url('dashboard/chat') ?>">
              <span class="link-title">Chat</span>
              <i class="mdi mdi-wechat link-icon"></i>
            </a>
          </li>  
          <li>
            <a href="<?= site_url('dashboard/label') ?>">
              <span class="link-title">Label</span>
              <i class="mdi mdi-label link-icon"></i>
            </a>
          </li>  
          <li>
            <a href="<?= site_url('dashboard/question') ?>">
              <span class="link-title">Question</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>  
          <li class="nav-category-divider">DOCS</li>
          <li>
            <a href="#">
              <span class="link-title">Documentation</span>
              <i class="mdi mdi-asterisk link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">