

<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SSPLAT News Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon" href="favicon.ico">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/salvattore.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<script>
function myFunction(x) {   // liking function
  x.style.color = "blue";
}
</script>
	
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<a class="navbar-brand" href="index.php">SSPLAT News Website</a>		
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-main">
		<div class="container">

			<div class="row">

        <div id="fh5co-board" data-columns>
        	<?php
//API key

$api_url = 'http://newsapi.org/v2/everything?q=bitcoin&from=2020-09-02&sortBy=publishedAt&apiKey=0192cd42fd5643c7ae3ccfdc4d8f6fc8';  

//  Read JSON file
$json_data = file_get_contents($api_url);

//  Decode JSON data into PHP array
$response_data = json_decode($json_data);   

//  All user data exists in 'data' object 
$user_data = $response_data->articles;

foreach ($user_data as $user) {


?>

        	<div class="item">
        		<!-- whole as a hyperlink--> 
        		<a href="<?php echo $user->url; ?>"  target="_blank">
        			<!--  get image link--> 
        		<div class="animate-box">
	        		<img src="<?php echo $user->urlToImage; ?>" alt="No image available">
        		</div>
        		<!-- get title and content from the json file--> 
        		<div class="fh5co-desc"><div style="color:black;font-weight: bold;font-size: 20px;"><?php echo $user->title; ?></div><div style="color: rgb(88,88,88);text-align: justify;"><?php echo $user->content; ?></div></div>
        		</a>
        		<!-- Like button--> 
        		
        		<p class="fh5co-social-icons" style="margin-left: 20px;margin-right: 20px"><i onclick="myFunction(this)" style="margin-right: 10px" class="fa fa-thumbs-up"></i>
        			<!-- comment box--> 
        			<input type="text" placeholder="Comment box" style="padding: 6px 10px;  display: inline-block;  margin-right: 5px; border: 1px solid #ccc;  border-radius: 4px;box-sizing: border-box;">
        			<!-- comment icon--> 
        			<i class="fa fa-comment-o" aria-hidden="true"></i></p>
        			<!-- share orignal link on whatsapp--> 
        			<div style="margin-left: 20px;margin-right: 20px;float : right;"><a href= "whatsapp://send?text=<?php echo $user->url; ?>"  data-action="share/whatsapp/share" target="_blank"><i class="fa fa-whatsapp"></i></a></div>


        	</div>
        	<?php
}
        	?>
        	
        </div>
        </div>
       </div>
	</div>

	


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	

	
	</body>
</html>
