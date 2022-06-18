<?php include 'components/nav.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Help - Musix</title>

	<style type="text/css">
		input {
border:none;
    border-bottom: 1px solid black;
    padding: 5px 10px;
    outline: none;
    font-family: 'Oswald', sans-serif; 
}

input:focus {
  border-color: #1890ff;
}

textarea {
border:none;
    border-bottom: 1px solid black;
    padding: 5px 10px;
    outline: none;
    font-family: 'Oswald', sans-serif; 
}

textarea:focus {
  border-color: #1890ff;
}
	</style>

</head>
<body>

	<div class="p-3 animate__animated animate__fadeInUp " align="center" style=" background-color: #ffb85c;  " >
  <h1 class="animate__animated animate__fadeInDown " style=" color: black; background-color: #4d404d; color: white; font-family: 'Audiowide', cursive; width: 50%; padding: 50px; border: solid; border-width: 1px; border-radius: 25px; border-color: orange; font-weight: bold; "  >HELP</h1></div>


<br>
<br>
<center>
<h5 class="animate__animated animate__fadeInUp " style=" font-weight: bold; font-family: 'Audiowide', cursive; letter-spacing : 10px; border-width: 1px; border-color: #4d404d; width: 50%;  " >GET IN TOUCH</h5>
</center>
<div class="container border animate__animated animate__fadeInUp  " >
	<br>
<form>
	<div class="row ">
  <div class="col">
    <input class="w-100"  type="text"  placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input class="w-100"  type="text" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col">
    <input class="w-100" type="text" placeholder="Last name" aria-label="Last name">
  </div>
</div>
<br>
<br>
<div class="row ">
  <div class="col">
    <textarea placeholder="Enter Your Messege" class="w-100" type="text"> </textarea>
    <br>
    <br>
  </div>
</div>
<a href="albums.php" class="btn btn" style=" border: solid; border-width: 1px; border-color: black; color: black; font-family: 'Oswald', sans-serif; border-radius: 5px; letter-spacing: 3px; "  > SEND MESSEGE >> </a>
</form>
</div>

<br>
<br>
<br>

<div class="mapouter container animate__animated animate__fadeInUp  "><div class="gmap_canvas"><iframe width="1000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=colombo%20&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1000px;}</style><a href="https://www.embedgooglemap.net">embed google map into website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style></div></div>


<br>
<br>
<br>

<?php include 'components/footer.php' ?>
</body>
</html>