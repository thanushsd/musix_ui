<?php include 'components/nav.php' ?>

<style type="text/css">
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
</style>

<div class="p-3 animate__animated animate__fadeInUp " align="center" style=" background-color: #ffb85c;  " >
  <h1 class="animate__animated animate__fadeInDown " style=" color: black; background-color: #4d404d; color: white; font-family: 'Audiowide', cursive; width: 50%; padding: 50px; border: solid; border-width: 1px; border-radius: 25px; border-color: orange; font-weight: bold; "  >ALBUMS</h1>

  <div class="container">
    <!-- Text input -->
    <input placeholder="Search Albums" type="text" class="container__input w-50 p-1" />

    <!-- Search icon sticks to the left or right -->
    <i style=" background-color: white; color: black; padding: 12px; border-radius: 20px; " class="fas fa-search"></i>
  </div>

</div>
<br>
<br>

<div class="container P-4" style=" background-color: #ffb85c; border-radius: 20PX; " >
	<h4>Filter Results</h4>
	<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Artist
  </button>
  <ul class="dropdown-menu"  >
    <li><a class="dropdown-item" href="#">John Divison</a></li>
    <li><a class="dropdown-item" href="#">Peter Anderson</a></li>
    <li><a class="dropdown-item" href="#">Litte Boys</a></li>
    <li><a class="dropdown-item" href="#">Frank Albert</a></li>
    <li><a class="dropdown-item" href="#">Euro Musix</a></li>
    <li><a class="dropdown-item" href="#">Brave Girls</a></li>
  </ul>
</div>
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Reviews
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">5 Stars</a></li>
    <li><a class="dropdown-item" href="#">4 Stars</a></li>
    <li><a class="dropdown-item" href="#">3 Stars</a></li>
    <li><a class="dropdown-item" href="#">2 Stars</a></li>
    <li><a class="dropdown-item" href="#">1 Stars</a></li>
  </ul>
</div>
<div class="btn-group dropend">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Price
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Low To High</a></li>
    <li><a class="dropdown-item" href="#">High To Low</a></li>
   </ul>
</div>
</div>

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

button {
  padding: 0;
}

body:before {
   content: '';
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}
body:after {
  content: '';
  height: 100%;
  left: 0;
  opacity: 0.8;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -2;
}
.media-controls {
  align-items: center;
  background: #fffaee;
  border: 1px solid #fff3eb;
  border-radius: 24px;
  color: #565656;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin: 24px;
  max-width: calc(100% - 24px * 2);
  padding: 24px;
  position: relative;
}
.media-controls:after {
  border-radius: 24px;
  box-shadow: 0 2px 2px rgba(255, 107, 0, 0.25), 0 4px 4px rgba(255, 107, 0, 0.2), 0 8px 8px rgba(255, 107, 0, 0.15), 0 16px 16px rgba(255, 107, 0, 0.1), 0 24px 24px rgba(255, 107, 0, 0.05);
  content: '';
  height: 100%;
  left: 0;
  mix-blend-mode: multiply;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}
.media-buttons {
  display: flex;
  flex-wrap: nowrap;
}
.media-button {
  background-color: transparent;
  border: none;
  align-items: center;
  border-radius: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}
@media (min-width: 421px) {
  .media-button {
    padding: 12px;
  }
}
.button-icons {
  background-color: #ffc399;
  border-radius: 100%;
  margin-bottom: 4px;
  margin-top: auto;
  padding: 16px;
}
.back-button .button-icons,
.skip-button .button-icons {
  background-color: transparent;
  color: #919191;
}
.rewind-button .button-icons,
.fast-forward-button .button-icons {
  background: linear-gradient(to bottom left, #fff8e7, #ffe1cc);
  color: #838383;
}
.play-button .button-icons {
  background: linear-gradient(to bottom left, #ffffff, #fff8e7);
  border: 1px solid #fff3eb;
  box-shadow: -1px 1px 1px rgba(255, 195, 153, 0.25), 1px -1px 1px rgba(255, 255, 255, 0.25), -2px 2px 2px rgba(255, 195, 153, 0.2), 2px -2px 2px rgba(255, 255, 255, 0.2), -4px 4px 4px rgba(255, 195, 153, 0.15), 4px -4px 4px rgba(255, 255, 255, 0.15), -8px 8px 8px rgba(255, 195, 153, 0.1), 8px -8px 8px rgba(255, 255, 255, 0.1), -16px 16px 16px rgba(255, 195, 153, 0.05), 16px -16px 16px rgba(255, 255, 255, 0.05);
  color: #f26600;
  margin-bottom: 8px;
  padding: 24px;
}
.button-text {
  margin-top: auto;
}
.media-progress {
  align-self: stretch;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.progress-bar-wrapper {
  background-color: transparent;
  border-radius: 12px;
  box-shadow: inset -1px 1px 1px rgba(255, 195, 153, 0.25), inset 1px -1px 1px rgba(255, 255, 255, 0.25), inset -2px 2px 2px rgba(255, 195, 153, 0.2), inset 2px -2px 2px rgba(255, 255, 255, 0.2), inset -4px 4px 4px rgba(255, 195, 153, 0.15), inset 4px -4px 4px rgba(255, 255, 255, 0.15), inset -8px 8px 8px rgba(255, 195, 153, 0.1), inset 8px -8px 8px rgba(255, 255, 255, 0.1), inset -16px 16px 16px rgba(255, 195, 153, 0.05), inset 16px -16px 16px rgba(255, 255, 255, 0.05);
  height: 12px;
  margin-bottom: 8px;
  margin-top: 24px;
  position: relative;
  width: 100%;
}
.progress-bar {
  background: linear-gradient(to right, #fdd25f, #ff6b00);
  border-radius: 12px;
  box-shadow: none;
  height: 12px;
  width: 44%;
}

 .card a{
	background-color: #4d404d;
	color: white;
	text-decoration: none;
	padding: 10px;
	border-radius: 5px;
}


	</style>

	<div class="media-controls animate__animated animate__fadeInUp">
  <div class="media-buttons">
    <button class="back-button media-button" label="back">
      <i class="fas fa-step-backward button-icons"></i>
      <span class="button-text milli">Back</span>
    </button>

    <button class="rewind-button media-button" label="rewind">
      <i class="fas fa-backward button-icons"></i>
      <span class="button-text milli">Rewind</span>
    </button>

    <button class="play-button media-button" label="play">
      <i class="fas fa-play button-icons delta"></i>
      <span class="button-text milli">Play</span>
    </button>

    <button class="fast-forward-button media-button" label="fast forward">

      <i class="fas fa-forward button-icons"></i>
      <span class="button-text milli">Forward</span>
    </button>

    <button class="skip-button media-button" label="skip">
      <i class="fas fa-step-forward button-icons"></i>
      <span class="button-text milli">Skip</span>
    </button>
  </div>
  <h6>Now Playing</h6>
  <h5>Perfect | E D Shreen</h5>
  <div class="media-progress">
    <div class="progress-bar-wrapper progress">
      <div class="progress-bar">
      </div>
    </div>
    <div class="progress-time-current milli">
      2:10
    </div>
    <div class="progress-time-total milli">
      04:40
    </div>
  </div>
</div>

<br>
<br>

<center>
<h5 class="animate__animated animate__fadeInUp" style=" font-weight: bold; font-family: 'Audiowide', cursive; letter-spacing : 10px; border-bottom: solid; border-width: 1px; border-color: #4d404d; width: 50%;  " >PURCHASE YOUR FAVOURITE ALBUM !</h5>
</center>

<div class="row row-cols-1 row-cols-md-3 g-4 m-3 artist animate__animated animate__fadeInUp" >
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p5.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 990</div>
      </div>      <div class="card-body">
        <h5 class="card-title">EUROVISION </h5>
        <p>Little Boys</p>
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
        </div>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 m-3 artist" >
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p6.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 2490</div>
      </div>      <div class="card-body">
        <h5 class="card-title">DAY DREAMER </h5>
        <p>Little Boys</p>
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
        </div>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 m-3 artist" >
  <div class="col">
    <div class="card">
<div class="imagep" >
      <img src="images/p4.jpeg" class="card-img-top" alt="...">
      <div style=" color: black; " class="top-left sty">LKR 2490</div>
      </div>      <div class="card-body">
        <h5 class="card-title">DAY DREAMER </h5>
        <p>Little Boys</p>
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
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
        <a href="">Preview</a>
        <a href="">Buy</a>
        </div>
    </div>
  </div>
</div>

<div>
	<img class="w-100" style=" height: 60%; object-fit: cover; " src="images/back3.jpeg">
  
  </div>
  <br>
  <br>
  <br>

<?php include 'components/footer.php' ?>
