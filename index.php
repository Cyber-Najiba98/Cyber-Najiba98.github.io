
<!DOCTYPE html>
 <html lang="ar" class="no-js">
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>وعينا أمن</title>		
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet"type="text/css" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">الرئيسية</a></li>
                        <li><a href="#URL">فحص الروابط</a></li>
                        <li><a href="#footer">مواقع التواصل</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
			
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                           
                        </div>

					</div>

				</div>
				
				
				

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			
			<!-- URL section -->
			<section id="URL">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center">
							<h2 class="wow animated bounceInLeft">أدخل طلبك هنا</h2>
							<div>
							<p class="wow animated bounceInRight">عنوان ويب</p>
						</div>
							</div>
								<form action="" method="post">

									<div class="input-field">
										<input type="url" name="id" class="form-control" required  placeholder="أدخل الرابط ثم انقر على مفتاح الإدخال من لوحة المفاتيح">
										<div class="caption-content">
											
										
									</div>
									<button type="submit" name ="sub" class="btn-url btn btn-blue btn-effect tex">بحث</button>							
									<div class="res text-center" role="alert">
										
									<?php
 if (!empty($_POST)) { $urls = $_POST["\x69\x64"]; $urlbase64 = base64_encode($urls); $deleatequl = strpos($urlbase64, "\x3d"); $urlbase64without = substr($urlbase64, 0, $deleatequl); $result = ''; $curl = curl_init(); curl_setopt_array($curl, array(CURLOPT_URL => "\x68\x74\164\x70\163\72\x2f\x2f\x77\x77\x77\56\x76\x69\x72\x75\x73\164\x6f\x74\x61\x6c\56\x63\x6f\x6d\57\x61\x70\151\57\x76\x33\57\x75\x72\154\x73\57{$urlbase64without}", CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => '', CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 30, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "\107\105\124", CURLOPT_HTTPHEADER => array("\141\143\x63\x65\160\x74\x3a\40\141\160\160\x6c\151\143\141\x74\151\157\x6e\57\152\163\x6f\156", "\x78\x2d\141\160\x69\153\145\x79\72\x20\x39\x33\x61\141\70\64\x32\x32\62\70\x37\143\62\60\143\143\67\x36\71\66\x39\x37\x33\x32\143\65\70\64\62\64\x38\64\66\x39\x33\146\66\145\x64\65\x62\60\x65\70\61\146\x35\146\x36\142\144\62\61\x39\60\x30\146\60\61\x38\63\x32\65\61"))); $response = curl_exec($curl); $err = curl_error($curl); curl_close($curl); if ($err) { echo "\143\125\122\114\x20\x45\162\162\x6f\162\x20\43\x3a" . $err; } else { function getBetween($string, $start = '', $end = '') { if (strpos($string, $start)) { $startCharCount = strpos($string, $start) + strlen($start); $firstSubStr = substr($string, $startCharCount, strlen($string)); $endCharCount = strpos($firstSubStr, $end); if ($endCharCount == 0) { $endCharCount = strlen($firstSubStr); } return substr($firstSubStr, 0, $endCharCount); } else { return ''; } } $data1 = json_decode($response, true); $result = getBetween($response, "\x74\157\164\141\x6c\137\x76\157\164\145\163", "\x74\150\x72\x65\x61\164"); function result() { global $result; if (str_contains($result, "\x3a\x20\61")) { echo "\xd8\xa7\331\x84\330\261\xd8\247\xd8\250\xd8\xb7\40\330\247\331\204\xd9\205\330\xaf\xd8\xae\331\204\x20\330\272\xd9\212\xd8\261\40\xd8\xa2\xd9\x85\331\206"; } else { echo "\xd8\xa7\331\x84\330\261\330\xa7\xd8\xa8\xd8\267\x20\330\247\331\x84\xd9\205\xd8\257\xd8\256\xd9\204\40\330\xa2\331\x85\xd9\206"; } } if (empty(!$result)) { result(); } else { echo "\xd8\256\xd8\267\xd8\xa3\x2c\40\331\x84\xd9\205\x20\xd9\212\330\xaa\xd9\205\40\330\247\331\204\xd8\271\xd8\xab\xd9\x88\xd8\xb1\40\330\271\331\x84\xd9\211\40\330\xa7\xd9\x84\330\261\xd8\xa7\330\xa8\xd8\xb7"; } } } ?>
	</div>	
								</form>
										
	
									

						</div>
					</div>
						
					</div>
				
			</section>
			<!-- end Service section -->
			
		
			
			<!-- Testimonial section -->
			<section id="testimonials" class="">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>إنجازات وطنية نفتخر بها</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
								
									<img src="img\KING.jpg" alt="King Salman">
									<div class="clearfix">
										<span>خادم الحرمين الشريفين الملك سلمان بن عبدالعزيز حفظه الله</span>
										<p>"حققت المملكة المرتبة الأولى عالميًا في عدد من المؤشرات الأمنية مقارنة بالدول الخمس دائمة العضوية في مجلس الأمن الدولي ودول مجموعة العشرين كافة وجاءت الثانية عالميا في المؤشر العالمي للأمن السيبراني"
										</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img\MBS.jpg" alt="crown prince mohammed bin salman">
									<div class="clearfix">
										<span>ولي العهد محمد سلمان بن عبدالعزيز آل سعود</span>
										<p>نحن نعيش في زمن الابتكارات العلمية والتقنية غير المسبوقة، وآفاق النمو غير المحدودة، ويمكن لهذه التقنيات الجديدة مثل الذكاء الاصطناعي وإنترنت الأشياء، في حال تم استخدامها على النحو الأمثل، أن تجلب للعالم فوائد ضخمة</p>
									</div>
								</div>
								
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- end Testimonial section -->
			
			

		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					
						
						<div class="footer-social">
							<ul>
							<div class="wow animated fadeInDown">
							<p>قم بمتابعتنا لتحصل هلى اخر تحديثاتنا</p>
</div>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/scli_h" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
								
							</ul>
						</div>
											</div>
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
    </body>
</html>