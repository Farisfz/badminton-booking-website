
<style>
  img#user_avatar {
    width: 2em;
    height: 2em;
    object-fit: cover;
    object-position: center center;
  }
a{
  color:white;
}

a:hover{
  color:gray;
}
</style>

<nav class="navbar navbar-expand-lg text-white fixed-top" style= "background-color: black" id="topNavBar">

            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand text-reset" href="./">
                <img src="images/shuttle.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                </a>

                <!-- <form class="form-inline" id="search-form">
                  <div class="input-group">
                    <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </form> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link"<?= isset($page) && $page == 'home'? "active" : '' ?> aria-current="page" href="./">HOME</a></li>
                        <li class="nav-item"><a class="nav-link"<?= isset($page) && $page == 'facility_available'? "active" : '' ?> href="./?p=facility_available">COURTS</a></li>
                        <li class="nav-item"><a class="nav-link"<?= isset($page) && $page == 'about'? "active" : '' ?> href="./?p=about">ABOUT US</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
                <div>
                  <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2): ?>
                    <div class="d-flex align-items-end">
                      <div class="navbar-nav nav-item dropdown">
                        <a class="nav-link text-reset dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span><img src="<?= validate_image($_settings->userdata('image_path')) ?>" alt="user_avatar" id="user_avatar" class="img-fluid img-thumbnail rounded-circle border-dark"></span> Hi, <?= $_settings->userdata('firstname') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="./?p=booking_list">My Bookings</a>
                          <a class="dropdown-item" href="./?p=manage_account">Manage Account</a>
                          <a class="dropdown-item" href="./classes/Login.php?f=logout_client">Logout</a>
                        </div>
                      </div>
                    </div>
                  <?php else: ?>
                    <a href="./login.php"><b>LOGIN</b></a> | 
                    <a href="./register.php"><b>REGISTER</b></a> | 
                    <a href="./admin/login.php"><b>ADMIN</b></a>
                  <?php endif; ?>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>