

<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ url('frontend/assets/images/logo2.png')}}" type="image/x-icon">
  <meta name="description" content="{{ $header_json['en_description'] }}">
  <meta name="keywords" content="{{ $header_json['keywords'] }}">
  <title>{{ $header_json['en_title'] }}</title>
  <link rel="stylesheet" href="{{ url('frontend/assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  
  <link rel="stylesheet" href="{{ url('frontend/assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/as-pie-progress/css/progress.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('frontend/custom/css/home.css') }}" type="text/css">

<!--  <link rel="stylesheet" href="{{ url('frontend/custom/css/arabic.css') }}" type="text/css"> -->
</head>
<body>
	
	
	

	<!-- The Modal -->
	<div class="modal fade" id="loginModel">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title"><span class="mbri-login"></span> Login</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <div class="modal-body">
			<form action="/action_page.php">
			  <div class="form-group">
			    <label for="email">Email address:</label>
			    <input type="email" class="form-control" id="email">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd">
			  </div>
			  <div class="form-group form-check">
			    <label class="form-check-label">
			      <input class="form-check-input" type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
	      </div>

	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>

	    </div>
	  </div>
	</div>
	
	

  <!-- <section class="overlay">
		<h1>loading</h1>
  </section>

  -->
  <section class="menu cid-r9hf9MDaoP" once="menu" id="menu1-d">

    
<!--beta-menu navbar-dropdown align-items-center navbar-toggleable-sm bg-color -->
    <nav class="navbar navbar-expand navbar-toggleable-sm bg-color align-items-center">
		<!--transparent,navbar-fixed-top -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{ url('/') }}">
                         <img src="{{ url('frontend/assets/images/logo2.png') }}" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <!-- <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="https://mobirise.co">
                        MOBIRISE
                    </a>
                </span> -->
            </div>
        </div>
		
		

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ url('services') }}">
                        <span class="mbri-menu mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#" data-toggle="modal" data-target="#loginModel">
                        <span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ url('register') }}">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Register
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{ url('register') }}">عربي   
                     <span class="mbri-globe-2 mbr-iconfont mbr-iconfont-btn"></span>
					</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.co">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.co">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.co">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li> -->
            </ul>
            <!-- <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="https://mobirise.co">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                    Try It Now!
                </a>
            </div> -->
        </div>
    </nav>
</section>

	
@yield("content")
	

<section class="cid-r9heV1Pay0" id="footer1-a">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
					{{ $footer_json['ar_desc'] }}
                    <!-- <a href="https://mobirise.co/">
                        <img src="{{ url('frontend/assets/images/logo2.png') }}" alt="Mobirise">
                    </a> -->
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">
                    1234 Street Name
                    <br>City, AA 99999
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text">
                    <a class="text-primary" href="https://mobirise.co/">Website builder</a>
                    <br><a class="text-primary" href="https://mobirise.co/">Download for Windows</a>
                    <br><a class="text-primary" href="https://mobirise.co/">Download for Mac</a>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © {{ $footer_json['en_copyright'] }}
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


   <script src="{{ url('frontend/assets/web/assets/jquery/jquery.min.js') }}"></script>
 <script src="{{ url('frontend/assets/popper/popper.min.js') }}"></script>
  <script src="{{ url('frontend/assets/tether/tether.min.js') }}"></script> 
  <script src="{{ url('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('frontend/assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('frontend/assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ url('frontend/assets/theme/js/script.js') }}"></script>
<script src="{{ url('frontend/custom/js/script.js') }}"></script>
</body>
</html>