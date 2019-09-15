<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Register | Remark Admin Template</title>
    
    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="../../assets/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../../global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="../../../global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="../../../global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="../../../global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="../../../global/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="../../assets/examples/css/pages/register.css">

    <!-- select start -->
    <link rel="stylesheet" href="../../../global/vendor/select2/select2.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-select/bootstrap-select.css">
        <link rel="stylesheet" href="../../../global/vendor/icheck/icheck.css">
        <link rel="stylesheet" href="../../../global/vendor/switchery/switchery.css">
        <link rel="stylesheet" href="../../../global/vendor/asrange/asRange.css">
        <link rel="stylesheet" href="../../../global/vendor/ionrangeslider/ionrangeslider.min.css">
        <link rel="stylesheet" href="../../../global/vendor/asspinner/asSpinner.css">
        <link rel="stylesheet" href="../../../global/vendor/clockpicker/clockpicker.css">
        <link rel="stylesheet" href="../../../global/vendor/ascolorpicker/asColorPicker.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
        <link rel="stylesheet" href="../../../global/vendor/jquery-labelauty/jquery-labelauty.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="../../../global/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
        <link rel="stylesheet" href="../../../global/vendor/timepicker/jquery-timepicker.css">
        <link rel="stylesheet" href="../../../global/vendor/jquery-strength/jquery-strength.css">
        <link rel="stylesheet" href="../../../global/vendor/multi-select/multi-select.css">
        <link rel="stylesheet" href="../../../global/vendor/typeahead-js/typeahead.css">
        <link rel="stylesheet" href="../../assets/examples/css/forms/advanced.css">
    <!-- select end -->
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="../../../global/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="../../../global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="../../../global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-register layout-full page-dark">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
      <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="brand">
          <img class="brand-img" src="../../assets//images/logo.png" alt="...">
          <h2 class="brand-text">DINAS PARIWISATA PESAWARAN</h2>
        </div>
        <p>Sign up to find interesting thing</p>
        <form method="post" role="form">
          <div class="form-group">
            <label class="sr-only" for="inputName">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password"
              placeholder="Password">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPasswordCheck">Retype Password</label>
            <input type="password" class="form-control" id="inputPasswordCheck" name="passwordCheck"
              placeholder="Confirm Password">
          </div>
            <div class="example-wrap">
                    <div class="example">
                      <select data-plugin="selectpicker">
                        <option>STAF</option>
                        <option>ADMIN</option>
                        <option>K.A DINAS</option>
                      </select>
                    </div>
            </div>
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <p>Have account already? Please go to <a href="{{ url('/') }}">Sign In</a></p>

        <footer class="page-copyright page-copyright-inverse">
          <p>WEBSITE BY Tamtam</p>
          <p>© 2019. DINAS PARIWISATA PESAWARAN.</p>
          <div class="social">
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-twitter" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-facebook" aria-hidden="true"></i>
        </a>
            <a class="btn btn-icon btn-pure" href="javascript:void(0)">
          <i class="icon bd-dribbble" aria-hidden="true"></i>
        </a>
          </div>
        </footer>
      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="../../../global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="../../../global/vendor/jquery/jquery.js"></script>
    <script src="../../../global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="../../../global/vendor/bootstrap/bootstrap.js"></script>
    <script src="../../../global/vendor/animsition/animsition.js"></script>
    <script src="../../../global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="../../../global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="../../../global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="../../../global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="../../../global/vendor/switchery/switchery.js"></script>
    <script src="../../../global/vendor/intro-js/intro.js"></script>
    <script src="../../../global/vendor/screenfull/screenfull.js"></script>
    <script src="../../../global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- select start -->
    <script src="../../../global/vendor/select2/select2.full.min.js"></script>
        <script src="../../../global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
        <script src="../../../global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="../../../global/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script src="../../../global/vendor/icheck/icheck.min.js"></script>
        <script src="../../../global/vendor/switchery/switchery.js"></script>
        <script src="../../../global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="../../../global/vendor/ionrangeslider/ion.rangeSlider.min.js"></script>
        <script src="../../../global/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="../../../global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="../../../global/vendor/ascolor/jquery-asColor.min.js"></script>
        <script src="../../../global/vendor/asgradient/jquery-asGradient.min.js"></script>
        <script src="../../../global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
        <script src="../../../global/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="../../../global/vendor/jquery-knob/jquery.knob.js"></script>
        <script src="../../../global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
        <script src="../../../global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
        <script src="../../../global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="../../../global/vendor/timepicker/jquery.timepicker.min.js"></script>
        <script src="../../../global/vendor/datepair/datepair.min.js"></script>
        <script src="../../../global/vendor/datepair/jquery.datepair.min.js"></script>
        <script src="../../../global/vendor/jquery-strength/password_strength.js"></script>
        <script src="../../../global/vendor/jquery-strength/jquery-strength.min.js"></script>
        <script src="../../../global/vendor/multi-select/jquery.multi-select.js"></script>
        <script src="../../../global/vendor/typeahead-js/bloodhound.min.js"></script>
        <script src="../../../global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
        <script src="../../../global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <!-- select end -->
    
    <!-- Scripts -->
    <script src="../../../global/js/Component.js"></script>
    <script src="../../../global/js/Plugin.js"></script>
    <script src="../../../global/js/Base.js"></script>
    <script src="../../../global/js/Config.js"></script>
    
    <script src="../../assets/js/Section/Menubar.js"></script>
    <script src="../../assets/js/Section/GridMenu.js"></script>
    <script src="../../assets/js/Section/Sidebar.js"></script>
    <script src="../../assets/js/Section/PageAside.js"></script>
    <script src="../../assets/js/Plugin/menu.js"></script>
    
    <script src="../../../global/js/config/colors.js"></script>
    <script src="../../assets/js/config/tour.js"></script>
    <script>Config.set('assets', '../../assets');</script>
    
    <!-- Page -->
    <script src="../../assets/js/Site.js"></script>
    <script src="../../../global/js/Plugin/asscrollable.js"></script>
    <script src="../../../global/js/Plugin/slidepanel.js"></script>
    <script src="../../../global/js/Plugin/switchery.js"></script>
        <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>
        <script src="../../../global/js/Plugin/animate-list.js"></script>
    
    <!-- select start -->
    <script src="../../../global/js/Plugin/select2.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-tokenfield.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-tagsinput.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-select.js"></script>
        <script src="../../../global/js/Plugin/icheck.js"></script>
        <script src="../../../global/js/Plugin/switchery.js"></script>
        <script src="../../../global/js/Plugin/asrange.js"></script>
        <script src="../../../global/js/Plugin/ionrangeslider.js"></script>
        <script src="../../../global/js/Plugin/asspinner.js"></script>
        <script src="../../../global/js/Plugin/clockpicker.js"></script>
        <script src="../../../global/js/Plugin/ascolorpicker.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-maxlength.js"></script>
        <script src="../../../global/js/Plugin/jquery-knob.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-touchspin.js"></script>
        <script src="../../../global/js/Plugin/card.js"></script>
        <script src="../../../global/js/Plugin/jquery-labelauty.js"></script>
        <script src="../../../global/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="../../../global/js/Plugin/jt-timepicker.js"></script>
        <script src="../../../global/js/Plugin/datepair.js"></script>
        <script src="../../../global/js/Plugin/jquery-strength.js"></script>
        <script src="../../../global/js/Plugin/multi-select.js"></script>
        <script src="../../../global/js/Plugin/jquery-placeholder.js"></script>
    
        <script src="../../assets/examples/js/forms/advanced.js"></script>
    <!-- select end -->
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
  </body>
</html>
