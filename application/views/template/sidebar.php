<?php
if($content == "dashboard_sample"){
  $dashboard_active = "active";
  $profile_active   = "";
  $faq_active       = "";
  $contact_active   = "";
  $gallery_active   = "";
  $menu_active      = "";
}elseif($content == "profile"){
  $dashboard_active = "";
  $profile_active   = "active";
  $faq_active       = "";
  $contact_active   = "";
  $gallery_active   = "";
  $menu_active      = "";
}elseif($content == "faq" || $content == "faq_create" || $content == "faq_edit"){
  $dashboard_active = "";
  $profile_active   = "";
  $faq_active       = "active";
  $contact_active   = "";
  $gallery_active   = "";
  $menu_active      = "";
}elseif($content == "contact"){
  $dashboard_active = "";
  $profile_active   = "";
  $faq_active       = "";
  $contact_active   = "active";
  $gallery_active   = "";
  $menu_active      = "";
}elseif($content == "gallery" || $content == "gallery_create"){
  $dashboard_active = "";
  $profile_active   = "";
  $faq_active       = "";
  $contact_active   = "";
  $gallery_active   = "active";
  $menu_active      = "";
}elseif($content == "menu" || $content == "menu_create"){
  $dashboard_active = "";
  $profile_active   = "";
  $faq_active       = "";
  $contact_active   = "";
  $gallery_active   = "active";
  $menu_active      = "";
}else{
  $dashboard_active = "";
  $profile_active   = "";
  $faq_active       = "";
  $contact_active   = "";
  $gallery_active   = "";
  $menu_active      = "";
}
?>
<ul class="sidebar navbar-nav">
  <li class="nav-item <?=$dashboard_active;?>">
    <a class="nav-link" href="<?=site_url('dashboard');?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item <?=$profile_active;?>">
    <a class="nav-link" href="<?=site_url('b_profile');?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Profile</span></a>
  </li>
  <li class="nav-item <?=$faq_active;?>">
    <a class="nav-link" href="<?=site_url('b_faq');?>">
      <i class="fas fa-fw fa-table"></i>
      <span>F.A.Q</span></a>
  </li>
  <li class="nav-item <?=$contact_active;?>">
    <a class="nav-link" href="<?=site_url('b_contact');?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Contact</span></a>
  </li>
  <li class="nav-item <?=$gallery_active;?>">
    <a class="nav-link" href="<?=site_url('b_gallery');?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Gallery</span></a>
  </li>
  <li class="nav-item <?=$menu_active;?>">
    <a class="nav-link" href="<?=site_url('b_menu');?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Menu</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?=site_url('logout');?>">
      <i class="fas fa-fw fa-sign-out-alt"></i>
      <span>Logout</span></a>
  </li>
</ul>