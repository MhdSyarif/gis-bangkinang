<!-- YANG INI UNTUK SLIDER DI ATAS Wednesday, June 27, 2012 7:48 PM -->
<script type="text/javascript" src="./jQuery Slider Menu_files/jquery-1.2.6.min.js"></script>
<script type="text/javascript"></script>
<style type="text/css">
body {
margin: 0;
font-size:16px;
color: #000000;
font-family:Arial, Helvetica, sans-serif;
}
#sliderWrap {

  margin: 0 auto;
  width: 300px;
}
#slider {
  position: absolute;
  background-image:url('jQuery Slider Menu_files/slider.png');
  background-repeat:no-repeat;
  background-position: bottom;
  width: 300px;
  height: 159px;
  margin-top: -141px;
}
#slider img {
border: 0;
}
#sliderContent {
/*margin: 50px 0 0 50px;*/
position: absolute;
text-align:center;
background-color:;
color:#333333;
font-weight:bold;
padding: 10px;
}
#header {
margin: 0 auto;
width: 600px;	
background-color: #F0F0F0;
height: 200px;
padding: 10px;
}
#wrd {
margin: 0 auto;
width: 600px;
padding: 10px;
}
#openCloseWrap {
position:absolute;
margin: 143px 0 0 120px;
font-size:12px;
font-weight:bold;
}
</style>

</head>
<body>


	<script type="text/javascript">
	$(document).ready(function() {
		$(".topMenuAction").click( function() {
			if ($("#openCloseIdentifier").is(":hidden")) {
				$("#slider").animate({ 
					marginTop: "-141px"
					}, 500 );
				$("#topMenuImage").html('<img src="./jQuery Slider Menu_files/open.png" alt="open" />');
				$("#openCloseIdentifier").show();
			} else {
				$("#slider").animate({ 
					marginTop: "0px"
					}, 500 );
				$("#topMenuImage").html('<img src="./jQuery Slider Menu_files/close.png" alt="close" />');
				$("#openCloseIdentifier").hide();
			}
		});  
	});
	</script>
	
	
	
	<div id="sliderWrap">
		<div id="openCloseIdentifier"></div>
		<div id="slider" style="backgroundimage:url(./jQuery Slider Menu_files/slider.png);">
			<div id="sliderContent">
				Sistem Informasi Geografis Fasilitas Umum Kota Bangkinang<br><br>
				TIF Politeknik Kampar <br>2012
			</div>
			<div id="openCloseWrap">
				<a href="#" class="topMenuAction" id="topMenuImage">
					<img src="./jQuery Slider Menu_files/open.png" alt="open" />
				</a>
			</div>
		</div>
	</div>