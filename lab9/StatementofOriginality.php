

<html>
<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>StatementofOriginality</title>
    <script type='text/javascript' src='js/x3dom.js'> </script>
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'/>
	<!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>


<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">Coca-Cola
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link " href="StatementofOriginality.php">Statement of Originality</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="models.php">Models</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  onclick="tanchuang()">Contact</a>
                        </li>
                    </ul>
                    <!-- search-right -->
                   
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="inner-text-title font-weight-bold pt-5">Statement of Originality</h4>
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><i class="fas fa-angle-right mx-2"></i>StatementofOriginality </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 inner-banner-right text-center">
                        <img src="img/tou.png" alt="" class="img-fluid" style="width:200px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- about section -->
    <section class="w3l-aboutblock py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                  <div style="width:100%;margin:0 auto;font-size:30px;text-center:center;height:40px;">Statement of Originality</div>
				  <div style="font-size:18px;line-height:40px;margin-top:20px;margin-bottom:40px;height:200px;">This assignment is submitted as part requirement for the degree of ... at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give / withhold permission for a copy of this assignment to be loaned out to students in future years (delete/update as necessary).</div>
            </div>
        </div>
    </section>
    <!-- //about section -->

    

    <!-- footer -->
    <footer class="w3l-footer-22 py-5" style="background-color:#0abf53">
        <div class="container py-md-5 py-4">
            <div class="row sub-columns">
                <div class="col-lg-4 col-sm-6 sub-one-left">
                    
                   <p>2023 Coca Cola. by@<a href="https://www.coca-cola.co.uk/brands">coca-cola</a></p>
                    
                    
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-4 pt-sm-0 pt-3">
                    <h6 class="footer-title-29">Home</h6>
                    <ul class="lists-para-two">
                        
                        <li> <a href="index.php">Home</a></li>
                       
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 sub-two-right mt-lg-0 mt-4">
                    <h6>3D Models</h6>
                    <ul>
                        <li><a href="detail.php?id=1"><span class="fas fa-angle-right mr-2"></span>Coca-Cola</a></li>
                        <li><a href="detail.php?id=2"><span class="fas fa-angle-right mr-2"></span>Sprite</a>
                        </li>
                        <li><a href="detail.php?id=3"><span class="fas fa-angle-right mr-2"></span>Fenta</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-4">
                    <h6>StatementofOriginality</h6>
                    <ul>
                        <li><a href="StatementofOriginality.php"><span class="fas fa-angle-right mr-2"></span>StatementofOriginality</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->

        <!-- //copyright -->
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
     <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function () {
            $("#owl-demo2").owlCarousel({
                loop: true,
                nav: false,
                margin: 50,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    736: {
                        items: 1,
                        nav: false
                    },
                    991: {
                        items: 2,
                        margin: 30,
                        nav: false
                    },
                    1080: {
                        items: 2,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
    <script>
        
		function tanchuang(){
	
	  alert("Producer: Jinjia Xie /Contact email: jx96@sussex.ac.uk");
	  
	}
    </script>

<script>
   
    function tietu(id){
        
	  $("#luyou1").css("display", "block");
	  $("#luyou2").css("display", "none");
	  $("#luyou3").css("display", "none");
	  
	  $("#an1").css("background-color", "green");
	  $("#an2").css("background-color", "");
	  $("#an3").css("background-color", "");
   
    }
	
	function wangge(id){
	   
	  $("#luyou1").css("display", "none");
	  $("#luyou2").css("display", "block");
	  $("#luyou3").css("display", "none");
	  $("#an1").css("background-color", "");
	  $("#an2").css("background-color", "green");
	  $("#an3").css("background-color", "");
	}
    
	function yuanxing(id){
	   
	  $("#luyou1").css("display", "none");
	  $("#luyou2").css("display", "none");
	  $("#luyou3").css("display", "block");
	  $("#an1").css("background-color", "");
	  $("#an2").css("background-color", "");
	  $("#an3").css("background-color", "green"); 
	
	}
	
	
	function kai(){
	  
	  $("#luyou1").css("background-color", "#f8f9fa");
	  $("#luyou2").css("background-color", "#f8f9fa");
	  $("#luyou3").css("background-color", "#f8f9fa");
	  $("#an4").css("background-color", "green");
	  $("#an5").css("background-color", "");
	}
	
	function guan(){
	   
	   $("#luyou1").css("background-color", "#524f4f");
	  $("#luyou2").css("background-color", "#524f4f");
	  $("#luyou3").css("background-color", "#524f4f");
	   $("#an4").css("background-color", "");
	  $("#an5").css("background-color", "green");
	}
	
	
	function tanchuang(){
	
	   alert("lianxifangshi");
	  
	}
	function cameraBack()
{
	document.getElementById('model__CameraBack').setAttribute('bind', 'true');
}
</script>