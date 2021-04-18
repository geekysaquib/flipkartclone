<?php
	require("config.php");
	session_start();
	if(isset($_POST['login']))
	{
		$ename=$_POST['EMAIL'];
		$pass=$_POST['MOBILE'];

		$sql="select * from pythonquizparticipant where EMAIL='".$ename."' AND MOBILE='".$pass."' limit 1";
		$sqli="select * from answerpythonquiz where email='".$ename."' limit 1";
		$resulti=mysqli_query($link,$sqli);
		$counti=mysqli_num_rows($resulti);
		$result=mysqli_query($link,$sql);
		$count=mysqli_num_rows($result);
		if($count==1)
		{
			if($counti==0)
			{
			while($row=mysqli_fetch_assoc($result))
			{
				$_SESSION['admin']=$row['EMAIL'];
				$_SESSION['Name']=$row['NAME'];
				header("Location:demo1.php");
			}
		}
		else{
			header('Location:reattempting.php');
		}
		}
		else
		{
			echo "Incorrect details.!!!Try Again";
		}
	}
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Designed by Mohammad Saquib Khan | Codingathon 2020 | Studyeze.in -->
<head>
    <html lang="en-US" prefix="og: http://ogp.me/ns#" >

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162097280-1"></script>
    <script>
    gtag('set', {'user_id': 'USER_ID'}); // Set the user ID using signed-in user_id.
    ga('set', 'userId', 'USER_ID'); // Set the user ID using signed-in user_id.
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-162097280-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TW7DZC7');</script>
    <!-- End Google Tag Manager -->
    
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Mohammad Saquib Khan">
	<meta name="google-site-verification" content="duEkJ8SA4ADf7CHi0Ntmi4X6zymf5953pWiZ0AABxFw" />
    <link rel="shortcut icon" href="https://studyeze.in/logo1.png" type="image/x-icon" />
    <meta name="Description" content="Codingathon 2020 is a Coding Contest organised by Studyeze which is an E-Learning Platform. Studyeze was designed by Mohammad Saquib khan for the Engineering Students. Mohammad Saquib Khan is the Founder of Studyeze.">
	<meta name="Keywords" content="Codingathon, coding 2020, event, studyeze, owner of studyeze, studyeze.in, United Group of Institutions">
	<meta name="Studyeze" content="E-Learning Platform" />
	<meta name="Study" content="studyeze.in">
	<meta property="og:image" content="https://studyeze.in/logo1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="" />
     <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Studyeze",
      "image": "https://studyeze.in/images/logo1.png",
      "@id": "https://www.facebook.com/Studyeze-101452494649680/",
      "url": "https://www.studyeze.in",
      "telephone": "8576857691",
      "priceRange": "Free",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "United College of Engineering & Research , Prayagraj",
        "addressLocality": "Prayagraj (Allahabad)",
        "postalCode": "211008",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.342354,
        "longitude": 81.90195969999999
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "https://www.facebook.com/Studyeze-101452494649680/",
        "https://twitter.com/Studyeze1",
        "https://www.instagram.com/studyeze_team/",
        "https://www.youtube.com/channel/UCBB7QkP5Sdn4Z1SJfXsmpeg",
        "https://in.linkedin.com/in/studyeze-e-learning-platform-336477199",
        "https://www.studyeze.in"
      ]
    }
    </script>
        <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Person",
      "name": "Mohammad Saquib Khan",
      "url": "https://www.studyeze.in/",
      "image": "https://studyeze.in/images/saquib.jpeg",
      "sameAs": [
        "https://www.facebook.com/Studyeze-101452494649680/",
        "https://twitter.com/Studyeze1",
        "https://www.instagram.com/studyeze_team/",
        "https://github.com/geekysaquib",
        "https://www.studyeze.in",
        "https://in.linkedin.com/in/studyeze-e-learning-platform-336477199",
        "https://www.youtube.com/channel/UCBB7QkP5Sdn4Z1SJfXsmpeg"
      ],
      "jobTitle": "Founder",
      "worksFor": {
        "@type": "Organization",
        "name": "Studyeze"
      }  
    }
    </script>
        <script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "Studyeze",
            "url" : "https://www.studyeze.in/",
            "logo" : "https://www.studyeze.in/images/logo1.png",
            "description" : "Studyeze is an E-Learning Platform designed by Mohammad Saquib khan from United College of Engineering & Research, Allahabad. Mohammad Saquib Khan is the Founder of Studyeze Frameworks & Industry.",
            "founder": [
                {
                    "@type" : "Person",
                    "name" : "Mohammad Saquib Khan",
                    "url" : "https://in.linkedin.com/in/mohammad-saquib-khan-1b032b171"
                }
            ],
            "sameAs" : [ "https://www.facebook.com/pages/category/Education-Website/Studyeze-101452494649680/",
                "https://in.linkedin.com/in/studyeze-e-learning-platform-336477199",
                "https://www.youtube.com/channel/UCBB7QkP5Sdn4Z1SJfXsmpeg"
            ]
        }
    </script>
    <title>Codingathon 2020 Team | Studyeze | E-Learning Platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="https://studyeze.in/logo1.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TW7DZC7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="page_loader"></div>

<!-- Login 3 start -->
<div class="login-3 tab-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-pad-0 form-section">
                <div class="login-inner-form">
                    <div >
                        <a href="#">
                            <img src="assets/img/logos/logo_transparent.png" height="100" width="100" alt="logo">
                            
                        </a>
                        <h2>Codingathon 2020 (Quizophile- Python)</h2>
                        <h3>Sign into Start Quizophile</h3>
                        <form action="" method="POST">
                            <div class="form-group">
                                <input type="email" name="EMAIL" class="input-text" placeholder="Email Address" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="MOBILE" class="input-text" placeholder="Phone number" required="">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" name="login" class="btn-md btn-theme btn-block">Login</button>
                            </div>
                            <p class="none-2">Don't forget to logout after completeing the Quiz</p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-pad-0 bg-img none-992">
                <div class="informeson">
                    
                    <h3>TEAM CODINGATHON 2020 </h3>
                    <p>This Panel is designed only for Codingathon 2020 Team to handle & manage the details of Studyeze & Codingathon - 2020</p>
                    <div class="social-box">
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-color"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-color"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-color"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-color"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 3 end -->

<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
<!-- Custom JS Script -->

</body>

<!-- Designed by Mohammad Saquib Khan | Codingathon 2020 | Studyeze.in -->
</html>