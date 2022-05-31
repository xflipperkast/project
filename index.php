<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" >
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?=get_option('website_favicon', BASE."assets/images/favicon.png")?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    
    <link rel="stylesheet" href="<?=BASE?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    
    <script src="<?=BASE?>assets/js/vendors/jquery-3.2.1.min.js"></script>

    <!-- Core -->
    <link href="<?=BASE?>assets/css/core.css" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/plugins/aos/dist/aos.css" />
      
    <!-- toast -->
    <link rel="stylesheet" type="text/css" href="<?=BASE?>assets/plugins/jquery-toast/css/jquery.toast.css">
    <link rel="stylesheet" href="<?=BASE?>assets/plugins/boostrap/colors.css" id="theme-stylesheet">

    <link href="<?=BASE?>assets/css/util.css" rel="stylesheet">
    <link href="<?=BASE?>assets/css/keyframes.css" rel="stylesheet">
    <link href="<?=BASE?>themes/pergo/assets/css/theme_style.css" rel="stylesheet">
    <link href="<?=BASE?>themes/pergo/assets/css/theme_footer.css" rel="stylesheet">

    <script type="text/javascript">
      var token = '<?=$this->security->get_csrf_hash()?>',
          PATH  = '<?=PATH?>',
          BASE  = '<?=BASE?>';
      var    deleteItem = '<?=lang("Are_you_sure_you_want_to_delete_this_item")?>';
      var    deleteItems = '<?=lang("Are_you_sure_you_want_to_delete_all_items")?>';
    </script>
    <?=htmlspecialchars_decode(get_option('embed_head_javascript', ''), ENT_QUOTES)?>
  </head>
  <body class="">
    
    <div id="page-overlay" class="visible incoming">
      <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
          <div class="lds-double-ring">
            <div></div>
            <div></div>
            <div>
              <div></div>
            </div>
            <div>
              <div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php if($display_html){?>
    <header class="header fixed-top" id="headerNav">
      <div class="container">
        <nav class="navbar navbar-expand-lg ">
          <a class="navbar-brand" href="#">
            <img class="site-logo d-none" src="<?=get_option('website_logo', BASE."assets/images/logo.png")?>" alt="Webstie logo">
            <img class="site-logo-white" src="<?=get_option('website_logo_white', BASE."assets/images/logo-white.png")?>" alt="Webstie logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fe fe-menu"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item active">
                <a class="nav-link js-scroll-trigger" href="#home"><?=lang("INFO")?></a>
              </li>

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#features"><?=lang("FAQ")?></a>
              </li>

              <?php
                if (get_option("enable_service_list_no_login") == 1) {
              ?>
              <li class="nav-item">
                <a class="nav-link" href="<?=cn("services")?>"><?=lang("Contact")?></a>
              </li>
              
               <li class="nav-item">
                <a class="nav-link" href="<?=cn("services")?>"><?=lang("event")?></a>
              </li>
              <?php }?>

            </ul> 
            <div class="nav-item d-md-flex btn-login-signup">
              <?php 
                if (!session('uid')) {
              ?>
              <a class="link btn-login" href="<?=cn('auth/login')?>"><?=lang("Admin")?></a>
              <?php if(!get_option('disable_signup_page')){ ?>
              <a href="<?=cn('auth/signup')?>" class="btn btn-pill btn-outline-primary sign-up"><?=lang("Sign_Up")?></a>
              <?php }; ?>
              <?php }else{?>
              <a href="<?=cn('statistics')?>" class="btn btn-pill btn-outline-primary btn-statistics text-uppercase"><?=lang("statistics")?></a>
              <?php }?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    
    <section class="banner"  id="home">
      <div class="container">
        <div class="row">
            <div class="index">
                <img class="draakje" src="<?=BASE?>themes/pergo/assets/images/draakje.png" alt="draakje">
                <div class="animation-2">
                  <img class="intro-img" src="<?=BASE?>themes/pergo/assets/images/blikjes.png" alt="blikjes">
                   <div class="contents">
              <h2 class="head-title">
                WELKOM
              </h2>
              
              <p class="ppp">
                Green dragon is de nieuwste en sterkste energie drink van deze tijd met ons nieuwe recept is onze energie niet alleen powerfull maar ook laag in calorieën tijdens festivals of projecten big or small Green dragon can give it all.
              </p>
            </div>
            </div>
          </div>          
        </div>
        </div>
    </section>
    <div class="footer footer_top dark">
      <div class="container m-t-60 m-b-50">
        <div class="row">
        </div>
      </div>
    </div>
    <?php }?>
    
    <script src="<?=BASE?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE?>assets/js/vendors/jquery.sparkline.min.js"></script>
    <script src="<?=BASE?>assets/js/core.js"></script>
    <script type="text/javascript" src="<?=BASE?>assets/plugins/jquery-toast/js/jquery.toast.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/plugins/aos/dist/aos.js"></script>
    <!-- Script js -->
    <script src="<?=BASE?>assets/js/process.js"></script>
    <script src="<?=BASE?>assets/js/general.js"></script>
  </body>
</html>