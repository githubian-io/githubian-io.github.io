<?php

session_start();

if(isset($_POST['pid'])){
	if($_POST['pid'] == '8079'){
		$_SESSION['authUsr'] = 'telefans';
	}else{
	echo '<center style="color: red; margin-top: 5%">Fuck outta here! You are lost!</center>';
}
}

if(isset($_SESSION['authUsr'])){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background: #C4C4C4; font-family: 'Montserrat', sans-serif;">
	<div class="container">
		<div class="row" style="height: 375px; background:linear-gradient(0deg, rgba(20, 20, 20, 0.6), rgba(20, 20, 20, 0.6)), url(https://st1.thehealthsite.com/wp-content/uploads/2017/11/SR-butt-cheeks-THS-655x353.jpg); background-size: cover; background-position: center; z-index: 1; background-repeat: no-repeat; ">

			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3" style="padding: 10px; background: rgba(52, 176, 227, 0.4); color: #f2f2f2; cursor: pointer; ">
						<center>1M Views</center>
					</div>
					<div class="col-md-3" style="padding: 10px; background: rgba(52, 176, 227, 0.4); color: #f2f2f2; cursor: pointer; ">
						<center>120 Photos</center>
					</div>
					<div class="col-md-3" style="padding: 10px; background: rgba(52, 176, 227, 0.4); color: #f2f2f2; cursor: pointer; ">
						<center>12 Videos</center>
					</div>
					<div class="col-md-3" style="padding: 10px; background: rgba(52, 176, 227, 0.4); color: #f2f2f2; cursor: pointer; ">
						<center>LIVE</center>
					</div>
				</div>
				
			</div>
			
			<div style="width: 30%; margin-top: 136px">
				<!-- <center>
					<h5 style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 18px; line-height: 22px; color: #34B0E3;">1M</h5>
					<p style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 14px; line-height: 17px; color: rgba(242, 242, 242, 0.85);">Views</p>
				</center> -->
			</div>
			<div style="width: 40%;">
				<center><div style="background-image: url(https://images.dennismaglic.se/data/product/raw/dm_vit_crop_top_-_babe_2.jpg); background-size: cover; height: 145px; width: 145px; border-radius: 175px; margin-top: 70px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"></div></center>
				<center style="margin-top: 10px">
					<p style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 24px; line-height: 29px; color: #FFFFFF;">Babe Girl<br>
						<img src="lc.png"><span style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 18px; line-height: 22px; color: #34B0E3;"> Nairobi</span>
					</p>
				</center>
			</div>
			<div style="width: 30%; margin-top: 136px">
				<!-- <center>
					<h5 style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 18px; line-height: 22px; color: #34B0E3;">2K</h5>
					<p style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 14px; line-height: 17px; color: rgba(242, 242, 242, 0.85);">Content</p>
				</center> -->
			</div>

			<div class="col-md-12" style="margin-top: 55px;">
				<center>
					<button style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 14px;height: 40px; width: 130px; color: #ffffff; border: 0; background: linear-gradient(252.9deg, #34B0E3 0%, #1897C9 100%); box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25); border-radius: 4px;">FOLLOW</button> &emsp;
					<button style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 14px; height: 40px; width: auto; color: #ffffff; border: 0; background: linear-gradient(252.9deg, #34B0E3 0%, #1897C9 100%); box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.25); border-radius: 4px;" id="content">VIEW CONTENT</button>
				</center>
			</div>

		</div>

		<div class="row" style="background: #484848;">

			<div class="col-md-12" style="margin-top: 100px;">
				<center>
					<a style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 18px; line-height: 22px; color: #FFFFFF; cursor: pointer;" id="subscription">Subscription</a> &emsp; 
					<a style="font-family: Montserrat; font-style: normal; font-weight: 500; font-size: 18px; line-height: 22px; color: #FFFFFF; cursor: pointer;" id="media">Media</a>
				</center>
				<center>
					<div id="subLine" style="width: 120px; height: 4px; background: #34B0E3; border-radius: 4px; margin-right: 80px; margin-top: 4px;"></div> 
					<div id="mediaLine" style="width: 60px; height: 4px; background: #34B0E3; border-radius: 4px; margin-left: 140px; margin-top: 4px; display: none"></div> 
				</center>
				  <div class="media-content" style="display: none; margin-bottom: 50px">
				  	<div class="container">
				  		<div class="row">
					  		<div class="col-md-4" style="margin-top: 35px">
					  			<div class="card" style="width:100%; height: 350px; filter: blur(8px); -webkit-filter: blur(8px); background-image: url(image.jpg); background-size: cover; background-position: center;">
					  				<center><i class="fa fa-play fa-4x" style="color: #34B0E3; position:fixed; top: calc(50% - 2vh);"></i></center>
								</div>
					  		</div>
					  		<div class="col-md-4" style="margin-top: 35px">
					  			<div class="card" style="width:100%; height: 350px; filter: blur(8px); -webkit-filter: blur(8px); background-image: url(image.jpg); background-size: cover; background-position: center;">
								</div>
					  		</div>
					  		<div class="col-md-4" style="margin-top: 35px">
					  			<div class="card" style="width:100%; height: 350px; filter: blur(8px); -webkit-filter: blur(8px); background-image: url(image.jpg); background-size: cover; background-position: center;">
								</div>
					  		</div>
					  		<div class="col-md-4" style="margin-top: 35px">
					  			<div class="card" style="width:100%; height: 350px; filter: blur(8px); -webkit-filter: blur(8px); background-image: url(image.jpg); background-size: cover; background-position: center;">
								</div>
					  		</div>
					  		<div class="col-md-4" style="margin-top: 35px">
					  			<div class="card" style="width:100%; height: 350px; filter: blur(8px); -webkit-filter: blur(8px); background-image: url(image.jpg); background-size: cover; background-position: center;">
					  				<center><i class="fa fa-play fa-4x" style="color: #34B0E3; position:fixed; top: calc(50% - 2vh);"></i></center>
								</div>
					  		</div>
					  		<div class="col-md-4" style="margin-top: 35px">
					  			<div class="card" style="width:100%; height: 350px; filter: blur(8px); -webkit-filter: blur(8px); background-image: url(image.jpg); background-size: cover; background-position: center;">
								</div>
					  		</div>	  			
				  		</div>
				  	</div>
				  </div>
				  <div class="subscription-content">
				  	<div class="container" style="margin-top: 25px; margin-bottom: 50px">
				  		<div class="row">
					  		<div class="col-md-2"></div>
					  		<div class="col-md-8">
					  			<div class="card" style="width: 100%; padding: 1vw; background: transparent; border-color: #f2f2f2; border-radius: 1vw; color: #fff">
					  				<div class="card-body">
					  					<h3><strong>$1</strong><input type="radio" name="sub" id="day" style="float: right;" checked></h3>
					  					<h5 style="font-family: 'Montserrat', sans-serif;">Access to Baby Girl’s content for a day.</h5>
					  				</div>
					  			</div>
					  			<div class="card" style="width: 100%; padding: 1vw; background: transparent; border-color: #f2f2f2; border-radius: 1vw; color: #fff; margin-top: 2vh">
					  				<div class="card-body">
					  					<h3><strong>$15</strong><input type="radio" name="sub" id="week" style="float: right;"></h3>
					  					<h5 style="font-family: 'Montserrat', sans-serif;">Access to Baby Girl’s content for a week.</h5>
					  				</div>
					  			</div>
					  			<div class="card" style="width: 100%; padding: 1vw; background: transparent; border-color: #f2f2f2; border-radius: 1vw; color: #fff; margin-top: 2vh">
					  				<div class="card-body">
					  					<h3><strong>$28</strong><input type="radio" name="sub" id="month" style="float: right;"></h3>
					  					<h5 style="font-family: 'Montserrat', sans-serif;">Access to Baby Girl’s content for a month.</h5>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="col-md-2"></div>
				  		</div>
				  	</div>
				  </div>

				<div class="row" style="margin-top: 2vh; margin-bottom: 5vh">
					<div class="col-md-12">
						<center><a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nd/4.0/88x31.png" /></a><br />Licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nd/4.0/">Creative Commons Attribution-NoDerivatives 4.0 International License</a></center>
					</div>
				</div>
			</div>
		</div>

	</div>

	<center>
		<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 10vh; width: 60vw; margin-bottom: 10vh; margin-right: 20vw; margin-left: 20vw;">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title video-name">Authorization Required</h5>
		        <button type="button" class="close modal-dismiss" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <div class="">
		        	<input type="text" class="form-control" name="authCode" placeholder="Video Access Key" required id="access">
		        	<iframe class="video-content" src="https://player.vimeo.com/video/418102849" style="display: none; width: 50vw; height: 50vh;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
		        	<!-- <video width="100%" class="video-content" height="100%" id="videoSource" controls autoplay style="display: none;">
		        		<source src="https://vimeo.com/telefans/download/418102849/aa0cbf1a00" >
              		</video> -->
		        </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary video-access">Access Video</button>
		        <button type="button" class="btn btn-secondary modal-dismiss">View Profile</button>
		      </div>
		    </div>
		  </div>
		</div>	
	</center>

	<script>

		$(document).ready(function(){

			const urlParams = new URLSearchParams(window.location.search);
			const myParam = urlParams.get('media');

			window.onpopstate = function(event) {
				event.preventDefault()
				alert('i refuse')
			}

			if(myParam != null && myParam != ''){

				$('#video').modal('show');

			}

			$("body").on("contextmenu",function(){
				return false;
			}); 

			$('#content').on('click', ()=>{
				window.location.href = 'tg://resolve?domain=Telefans_bot'
			})

			$('.modal-dismiss').on('click', ()=>{
				window.location.href = './'
			})

			$('.video-access').on('click', ()=>{
				$('#access').css('display', 'none')
				$('.video-content').css('display', 'block')
				$('.video-access').css('display', 'none')
				$('.video-name').html('Babe Girl')
			})

			$('#media').on('click', ()=>{
				$('.media-content').css('display', 'block')
				$('.subscription-content').css('display', 'none')
				$('#mediaLine').css('display', 'block')
				$('#subLine').css('display', 'none')
			})

			$('#subscription').on('click', ()=>{
				$('.media-content').css('display', 'none')
				$('.subscription-content').css('display', 'block')
				$('#mediaLine').css('display', 'none')
				$('#subLine').css('display', 'block')
			})

		});
	</script>

</body>
</html>

<?php

}else{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Credential</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-md-2">
				<form method="post" style="margin-top: 10%">
					<div class="form-group">
						<input type="password" placeholder="pass key" name="pid" class="form-control">
						<center><input type="submit" name="submit" value="Access" class="btn btn-outline-primary"></center>
					</div>
				</form>
			</div>
			<div class="col-md-5"></div>
		</div>
	</div>
</body>
</html>

<?php

}
	
?>