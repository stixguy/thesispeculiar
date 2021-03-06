<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="icon.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});


</script>
 <style>
html, body {
  height: 100%;
  margin: 0;
}

section {
    height: 100%;
}

.navbar {
  overflow: hidden;
  background-color: none;
  position: fixed;
  top: 0;
  width: 100%;
  height: 10%;
  
}

.navbar a {
  float: right;
  display: block;
  color: #161616;
  text-align: center;
  padding: 14px 25px;
  text-decoration: none;
  font-size: 20px;

}



.main {
  padding: 0px;
  margin-top: 0px;
  height: 600px; /* Used in this example to enable scrolling */
  background-image: url("bg2.png");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
.main2 {
  padding: 0px;
  margin-top: 0px;
  margin-bottom: 0px;
  height: 500px; /* Used in this example to enable scrolling */
  
}

div.c{
font-size: 100px;	
font-family: Helvetica;
margin-left: 0px;
}
div.d{
font-size:180%;
margin-left: 0px;
}


div.e{
font-size:200%;
color: white;
}

.button {
    background-color: white;
    border: none;
    color: none;
    padding: 15px 25px;
    text-align: center;
	
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
	margin-top: 420px;
	opacity: 0.6;
	margin-left: 300px;
	border-radius: 32px;
	font-size: 120%;
    
}

.button:hover {
    background-color: black;
}
a:link {
    text-decoration: none;
}

.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: none;
  vertical-align: middle;
  
}

.flex-container .box {
  background-image: url("bg2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
	height: 600px;
	width: 90%;
 
  
  text-align: justify;
  line-height: 40px;
  font-size: 30px;
}
.carousel{
    background: none;
    margin-top: 20px;

}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
	margin: 80px;
	height: 10px;
	width: 250px;
	margin-bottom: 100px;
	
	

}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
	

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.btn{
background-color: Transparent;
margin-top: 1px;
 
}
#wall{

	background-image: url("background.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 100%;
	margin-left: 0px;
	

}

.dn{
	position: absolute;
	right: 300px;
}
.ab{
	position:absolute;
	right: 450px;
}
.hm{
	position:absolute;
	right: 600px;
}
.dv1{
	height: 100%;
	width: 100%;

}
.p{
	font-size: 30px;
	
	margin-right: 50px;
}
.p1{
	font-size: 22px;
	margin-top: 40px;
	margin-right: 30px;
	margin-bottom: 50px;
	
}
.footer{

	font-size: 20px;
}

.fa {
   padding: 8px;
  font-size: 30px;
  width: 120px;
  text-align: center;
  text-decoration: none;
  margin: 5px 10px;
  border-radius: 32px;
}

.fa:hover {
    opacity: 0.9;
}


.fa-google {
  background: white;
  color:#dd4b39 ;
}

</style>
</head>
<body>
<div class="navbar">

<button id="myBtn" class="btn" style="position: absolute; left: 1050px;" ><h4>Phone Compatibility Information</button>
<a href="download.php" class="dn">Download</a>
<a href="#about" class="ab">About Us</a>
<a href="#home" class="hm">Home</a>

 
</div>


<div class="main" id="home">
  <section id="wall">
	
	<button class="button" ><a href="#game">Show more</a></button>
	</div>
	
  </section>

</div>

<div class="main" id="game">

  
 
	
	
  <div class="flex-container">
  <div class="box"><div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
      
        <!-- Wrapper for carousel items -->
		
        <div class="carousel-inner">
             <div class="item active">
                <img src="1p.png" alt="First Slide">
            </div>
            <div class="item">
                <img src="4p.png" alt="Second Slide">
            </div>
            <div class="item">
                <img src="3p.png" alt="Third Slide">
            </div>
			<div class="item">
                <img src="2pic.png" alt="Fourth Slide">
            </div>
        </div>
		
        
    </div>
</div>
</div>
  <div class="box">&nbsp;&nbsp;&nbsp;&nbsp;
  
 <p class="p1">This Project “Peculiar: An Augmented Reality Cryptography Game” is intended for gamers, students, analytical and logical thinkers. 
 The proposed project serves as a solution to the problem on negligence about the important role of cryptography, 
 secondarily, the lack of knowledge about cryptography and general disinterest in critical thinking.</p>

 <p class="p">"A game play that is easily approachable for newcomers to the cryptography."</p>
</div>
</div>
 

</div>

<div>
	<div class="main2" id="about" >
	
	<!-- Trigger/Open The Modal -->
	<section style="background-color:#e13b52" >
	<br>
	<div class="e">
	<br>
	<img src="dv3.jpg" class="dv1"></img>
	
	<center><p class="footer">If you encounter problems in-game you may send message here <a href="http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=thepeculiar2018@gmail.com&su=" class="fa fa-google">mail</a></p>
	<p class="footer">Copyright © 2018 Peculiar</p></center>
	</div>
	</section>
	
</div>

</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><h2>Android:</h2></p>
    <center><p><h4>Compatible with Android devices that have 2 GB RAM or more and have Android Ver. 5 or up installed.</h4></p></center>
	<center><p><h4>Compatible with Android devices that have Gyroscope installed.</h4></p></center>
    <p><h2>IOS:</h2></p>
    <center><p><h4>Not Compatible for all devices</h4></p></center>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>
	
	
</div>


</body>
</html>
