<?php include 'components/nav.php' ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PlayList</title>

  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700');

*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
    color:white;
  font-family: Quicksand, Arial, san-serif;
}

.card{
  width:450px;
  background: white;
  border-radius: 11px;
  padding: 7px;
  border: solid;
  border-color: #4d404d;
  border-width: 1px;
}

.card > .content-layout{
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  margin: 0px 10px;
}

.card > .content-layout img {
  width:150px;
  border-radius: 7px;

}

.button-layout{
  padding:7px;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  margin-bottom: 7px
}

.card > .content-layout > figure {
  margin-bottom: 7px;
}
.content > .title {
  font-weight: 400;
  font-size: 1.3em; 
}

.content > .description {
  color: white;
  margin: 7px 0;
}


.content > .rating {
  color: #BBBBBB;
  margin-top: 10px;
  margin-bottom: 5px
}

.card > .content-layout > .content {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  margin-left: 10px;
}

.button{
  font-weight: 700;
  font-size:1.34em;
  margin:4px;
  
  border-radius: 6px;
  text-align: center;
  text-decoration: none;
  padding: 1px 0px;
  background:#4d404d;
  border:3px solid #4d404d;
  color: white;
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  -webkit-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
}


.button.bordered {
  border:3px solid #4d404d;
  background: transparent;
  color: #4d404d;
}

.button:hover{
  background:white;
  border-color:white;
  color:#F96D00;
}

.rate-icons{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.rate-icons div:first-child{
  margin-left: 0;
}

.icon {
  width: 15px;
  height: 15px;
  margin:4px;
  background: transparent;
  border: 2px solid #4d404d;
  border-radius: 100%;
}

.icon.is-active {
  background: #4d404d;
}

.desc {
  color: black;
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

  </style>

</head>

<body>


<div class="p-3 animate__animated animate__fadeInUp " align="center" style=" background-color: #ffb85c;  " >
  <h1 class="animate__animated animate__fadeInDown " style=" color: black; background-color: #4d404d; color: white; font-family: 'Audiowide', cursive; width: 50%; padding: 50px; border: solid; border-width: 1px; border-radius: 25px; border-color: orange; font-weight: bold; "  >PLAYLISTS</h1>

  <div class="container">
    <!-- Text input -->
    <input placeholder="Search Songs Or Artists" type="text" class="container__input w-50 p-1" />

    <!-- Search icon sticks to the left or right -->
    <i style=" background-color: white; color: black; padding: 12px; border-radius: 20px; " class="fas fa-search"></i>
  </div>

</div>
<br>
<br>

<div class="container P-4" style=" background-color: #ffb85c; border-radius: 20PX; " >
  <h4 style=" color: black; " >Filter Results</h4>
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
<br>
<br>

<div class="container animate__animated animate__fadeInUp ">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p14.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">PERFECT</h1>
        <h5 class="desc">E D Shreen</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container animate__animated animate__fadeInUp">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p13.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">HAPPIER</h1>
        <h5 class="desc">E D Shreen</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container animate__animated animate__fadeInUp">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p4.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">SLEEP</h1>
        <h5 class="desc">Music</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p1.png" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">SMILE</h1>
        <h5 class="desc">John Divison</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p15.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">TEEN PARTY</h1>
        <h5 class="desc">Teeny</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p5.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">EUROVISION PARTY</h1>
        <h5 class="desc">EU Musix</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p11.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">ARAB MUSIC</h1>
        <h5 class="desc">ARB Music</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p8.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">STEPPING OUT</h1>
        <h5 class="desc">Dev Peterson</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p18.jpeg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">THIS IS IZ*ZONE</h1>
        <h5 class="desc">Zonal Mz.</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<div class="container">
  <div class="card w-100">
    <div class="content-layout">
      <figure><img style=" border: solid; border-color: white; border-width: 1px; " src="images/p1.jpg" alt="Image"/></figure>
      <div class="content">
        <h1 style=" background-color:#4d404d ; border-radius: 10px; font-weight: bold; " class="title p-1">LIFE HACKS</h1>
        <h5 class="desc">M Brooten</h5>
        <h6 class="rating">Rating</h6>
        <div class="rate-icons">
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon is-active"></div>
          <div class="icon"></div>
        </div>
      </div>
    </div>
    <div class="button-layout"><a class="button" href="#">Download</a><a class="button bordered" href="#">Play</a></div>
  </div>
</div>
<br>
<br>

<?php include 'components/footer.php' ?>


</body>
</html>