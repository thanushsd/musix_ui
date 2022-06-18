<?php include 'components/nav.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Home</title>

	<style type="text/css">
		h1 , h4 ,p {
			font-family: 'Audiowide', cursive;
		}

		.cont{
      background-color: #4d404d;
      }

      h5{
      	font-family: 'Oswald', sans-serif;
      	font-weight: bold;
      	letter-spacing: 2px;
      }

      .artist h5{
      	color: #4d404d; 
      	font-size: 20px; 
      	font-weight: bold; 
      	border-bottom: solid;
      	padding-bottom: 2px;
      }

      .artist p{
      	font-size: 12px;
      }

      .imagep {
  position: relative;
  text-align: center;
  color: white;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 8px;
}

.sty{
	background-color: white;
	border-radius: 5px;
	font-weight: bolder;
	padding: 3px;
}

.search {
                        display: flex;

                        /* If you want to place the icon before the text input */
                        flex-direction: row-reverse;

                        /* Border */
                        border: 1px solid rgba(0, 0, 0, 0.3);
                    }

                    .container__input {
                        border-color: transparent;
                        /* Take available width */
                         flex: 1;
                         padding: 5px;
                         border-radius: 20px;
                    }

                    .card a{
  background-color: #ffb85c;
  color: white;
  text-decoration: none;
  padding: 10px;
  border-radius: 5px;
  color: black;
}



	</style>

</head>
<body onload="load()">

<!-- IMAGE PART -->
	<div
  class="bg-image p-5 text-center shadow-1-strong  mb-5 text-white" style="background-image: url('images/cvr2.png'); height: 60%; object-fit: cover; ">
  <br>
  <br>
  <br>
  <div class="container">
    <!-- Text input -->
    <input placeholder="Search Songs Or Artists" type="text" class="container__input w-50 animate__animated animate__fadeInLeft" />

    <!-- Search icon sticks to the left or right -->
    <i style=" background-color: white; color: black; padding: 12px; border-radius: 20px; " class="fas fa-search animate__animated animate__fadeInRight"></i>
</div>
  <div class="animate__animated animate__fadeInUp" >
  <h1 class="mb-3 h2">Listen To Your Favourite Music</h1>
  <a href="albums.php" class="btn btn" style=" border: solid; border-width: 1px; border-color: wheat; color: white; font-family: 'Oswald', sans-serif; border-radius: 5px; letter-spacing: 3px; "  > DISCOVER >> </a>
  <div>
</div>
</div>
</div>
<!-- IMAGE PART END -->

<center>
<p>
     </p>
      <p>
      <div class="cont">
         <div class="row">
            <div class="col-sm animate__animated animate__fadeInLeft">
               <p id='0101' class="fs-2 text-light">8000+</p>
               <p class="text-light">Songs</p>
            </div>
            <div class="col-sm animate__animated animate__fadeIn">
               <p id='0102' class="fs-2 text-light">2000+</p>
               <p class="text-light">Albums</p>
            </div>
            <div class="col-sm animate__animated animate__fadeInRight">
               <p class="fs-2 text-light"><span id='0103'>150000+</span></p>
               <p class="text-light align-content-center">Users</p>
            </div>
         </div>
      </div>
      </p>
  </center>

<br>
<br>
<center>
<h5 style=" font-weight: bold; font-family: 'Audiowide', cursive; letter-spacing : 10px; border-bottom: solid; border-width: 1px; border-color: #4d404d; width: 50%;  " >SEE WHAT'S NEW</h5>
</center>

<div class="row row-cols-1 row-cols-md-6 g-4 m-3 artist" >
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p5.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 990</div>
      </div>      <div class="card-body">
        <h5 class="card-title">EUROVISION </h5>
        <p>Little Boys</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p13.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 490</div>
      </div>      <div class="card-body">
        <h5 class="card-title">HAPPIER</h5>
        <p>E D Shreen</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>

        </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p14.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 890</div>
      </div>      <div class="card-body">
        <h5 class="card-title">PERFECT</h5>
        <p>E D Shreen</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
         </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="imagep" >
      <img src="images/p1.png" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 1990</div>
      </div>
      <div class="card-body">
        <h5 class="card-title">SMILE</h5>
        <p>John Division</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
         </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p15.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 1490</div>
      </div>      <div class="card-body">
        <h5 class="card-title">TEEN PARTY</h5>
        <p>Teeny</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
       </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p12.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 290</div>
      </div>      <div class="card-body">
        <h5 class="card-title">LITTLE MIX</h5>
        <p>Mixyz</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
        </div>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-6 g-4 m-3 artist" >
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p6.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 2490</div>
      </div>      <div class="card-body">
        <h5 class="card-title">DAY DREAMER </h5>
        <p>Little Boys</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p7.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 1690</div>
      </div>      <div class="card-body">
        <h5 class="card-title">DREAM POP</h5>
        <p>E D Shreen</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p8.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 990</div>
      </div>      <div class="card-body">
        <h5 class="card-title">STEPPING OUT</h5>
        <p>E D Shreen</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
         </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="imagep" >
      <img src="images/p10.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 790</div>
      </div>
      <div class="card-body">
        <h5 class="card-title">COSPING</h5>
        <p>John Division</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>

         </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p11.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 2190</div>
      </div>      <div class="card-body">
        <h5 class="card-title">ARAB MUSIC</h5>
        <p>Teeny</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
       </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p9.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 1390</div>
      </div>      <div class="card-body">
        <h5 class="card-title">MELLOW POP</h5>
        <p>Mixyz</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
        </div>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-6 g-4 m-3 artist" >
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p4.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 2490</div>
      </div>      <div class="card-body">
        <h5 class="card-title">DAY DREAMER </h5>
        <p>Little Boys</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p3.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 1690</div>
      </div>      <div class="card-body">
        <h5 class="card-title">DREAM POP</h5>
        <p>E D Shreen</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p17.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 990</div>
      </div>      <div class="card-body">
        <h5 class="card-title">STEPPING OUT</h5>
        <p>E D Shreen</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
         </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="imagep" >
      <img src="images/p1.jpg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 790</div>
      </div>
      <div class="card-body">
        <h5 class="card-title">COSPING</h5>
        <p>John Division</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
         </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p18.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 2190</div>
      </div>      <div class="card-body">
        <h5 class="card-title">ARAB MUSIC</h5>
        <p>Teeny</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
       </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p16.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 1390</div>
      </div>      <div class="card-body">
        <h5 class="card-title">MELLOW POP</h5>
        <p>Mixyz</p>
        <a class="w-100" href="">Play</a>
        <a class="w-100" href="">Buy</a>
        </div>
    </div>
  </div>
</div>

<br>
<center>
<a href="albums.php" class="btn btn" style=" border: solid; border-width: 1px; border-color: wheat; color: black; font-family: 'Oswald', sans-serif; border-radius: 5px; letter-spacing: 3px; "  > VIEW MORE >> </a>
</center>

  <br>
  <br>
  <br>
<?php include 'components/footer.php' ?>

</body>
</html>