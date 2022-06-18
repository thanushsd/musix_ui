<?php 

include 'main.php';

?>

<style type="text/css">
	.font a{
		font-family: 'Audiowide', cursive;
    color: white;
	}

	li {
 display:inline-block;
 padding:1px;
 color: white;
}

li:hover {
  color: white;
  border-bottom: 2px solid; white;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark " style=" background-image: url('images/cvr.jpeg'); ">
  <div class="container-fluid font">
  	<a class="navbar-brand" href="#">
      <img src="images/logo.png" alt="" width="50" height="50">
    </a>
    <a style=" font-weight: bold ; " class="navbar-brand" href="#">E Music Cloud</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active txt" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="albums.php">ALBUMS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="playlist.php">PLAYLISTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="help.php">HELP</a>
        </li>
        
        <li class="nav-item">
        </li>
      </ul>
        
        <div class="  d-flex" >
      	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        	<a href="login.php" class="nav-link active">LOGIN / REGISTER</a>
        </li>
        </ul>
    </div>
     </div>
  </div>
</nav>

