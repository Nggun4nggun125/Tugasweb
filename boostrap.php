<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

 <style>
  .bordered {
  border: solid;
}

 .contoh { 
  height: 50px;
 background-color: skyblue;
}
</style>

  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
 <div class="container-fluid">
   
    <a class="navbar-brand" href="#">

<img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Hacker_inside.jpg" width="50">  

Toko Grea Bakery
</a> <buton class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item mx-3">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>
<div>
 <style>


.banner {

    height: 80vh;
   
 background: url('img/1.jpg');

                
 background-size: cover;
   background-position: center;
}
   .banner-contain {
   height: 100%;
   display: flex;
   align-items: cover;
}
.background
background-color: skyblue;
width: 100%;
.bordered{
     border: solid;
}
</style>
<body>
<!--banner-->
<div class="container-fluid banner">

<div class="container banner-contain col-ig-6">

<div class="my-5 text-center text-white">
<p class="fs-4">Selamat datang di Grea bakery</p>
<p class="container col-10 text-white">Setiap gigitan adalah sebuah kenangan manis yang takkan terlupakan.Dapatkan sekarang hanya di toko kami.</p>

<button class="btn btn-outline-light mt-3 btn-lg">Reservasi</button>
</div>
</div>
</div>
<div class="my-5 container col-10 col-sn-9 col-md-8 col-6">
<h2 class="text center mb-5">kenapa harus belanja di Great Bekery</h2>
<div class="accordion" id="accordionExample">
 

 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        karena murah
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Fresh from oven
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       
        jaminan uang kembali
 </button> 
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
<div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
       
       ada cashback 30%
 </button> 
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" >
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class="container-fluid py-5 bg-black text-white">
<div class="container"> 
 <h2 class="text center mb-5">Produk Terbaik Kami
</h2> 

<div id="carouselExampleIndicators" class="carousel slide col-lg-8 offset-lg-2">

<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
        <h5>Produk 1</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block"> 
       
<h5>Produk 2</h5> <p>Some representative placeholder content for the first slide.</p>
 </div> 
</div>
    <div class="carousel-item">
     
 <img src="img/2.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block"> 
<h5>Produk 3</h5> 
<p>Some representative placeholder content for the first slide.</p> 
</div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
 
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> 
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
</div>
<div class="container-fluid py-5">
     <div class="container">
          <h2 class="text-center">Produk Terlaris</h2>

          <div class="col-ig-6 col-md-8 d-block mx-auto mt-5">
          <img src="img/2.jpg" class="img-thumbnail" alt="">
          </div>
       </div>
    </div>


      <div class="col-12 mb-4">
           <figure class="text-center text-md-start">
           <blockquote class="blockquote">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, consequatur.</p>
            </blockquote>
             <figcaption class="blockquote-footer">
      Captain Tsubasa
             </figcaption>
         </figure>
</div>
<div class="container-fluid py-5">
       <div class="container">

    <h2 class="text-center nb-7">produk kami</h2>
<div class="col-12">
<div class="row">

<div class="col-lg-3 col-md-3">
<div class="list-group">
  <a class="list-group-item list-group-item-primary">Roti kering</a>
  <a class="list-group-item list-group-item-secondary">Roti basa</a>
  <a class="list-group-item list-group-item-warning">Cake</a>
  <a class="list-group-item list-group-item-info">Kue</a>
  <a class="list-group-item list-group-item-primary">Molen</a></div>

</div>
<div class="col-lg-9 col-md-9">
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="card">
  <img src="img/7.jpg"class="card-img-top" alt=".">
  <div class="card-body">
 
   <h5 class="card-title">roti nanas</h5>
    
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <p href="#" class="btn btn-primary">lihat</p>
         </div>
       </div>
     </div>
  <div class="col-lg-3 col-md-3 col-sm-6">

  <div class="card">

 <img src="img/7.jpg"class="card-img-top" alt=".">
  <div class="card-body">
 
   <h5 class="card-title">roti nanas</h5>
    
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <p href="#" class="btn btn-primary">lihat</p>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="card">
  <img src="img/7.jpg"class="card-img-top" alt=".">
  <div class="card-body">
 
   <h5 class="card-title">roti nanas</h5>
    
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <p href="#" class="btn btn-primary">lihat</p>
         </div>
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
    <div class="card">
  <img src="img/7.jpg"class="card-img-top" alt=".">
  <div class="card-body">
 
   <h5 class="card-title">roti nanas</h5>
    
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   <p href="#" class="btn btn-primary">lihat</p>
             </div>
           </div>
         </div>
       </div>
      </div>
          </div>
             </div>
                 </div>     
                     </div>
</div>

<div class="container-fluid py-5 bg-black">
     <div class="container text-white">
          <h2 class="text-center mb-5">Apa Kata Customer Kami</h2>


 <div class="col-14 md-4">
    <figure class="text-center text-md-start">
    <blockquote class="blockquote">
    <p>lorem ipsum dolor sit amet consectetur adipisicing elit.quo,consequatur.</p>
   



     </blockquote>
    <figcaption class="blockquote-footer">
captain tsubasa
  
 </figcaption>

  </figure>
    </div>  
  </div>
</div>    
<div class="container-fluid py-5 bg-dark text-light">
  <div class="container">
<h2 class="text-center mb-5">customer beruntung minggu ini</h2>

 <table class="table table-bordered border-warning">
<thead>
<tr class="table-primary">
     <th>#</th>
      <th>nama</th>
      <th>no. Handphone</th>
      <th>tanggal pembelian </th>
      <th>no. struk</th>
      <th>no. undian</th>
      <th>hadiah</th>

           </tr>
       </thead>
     <tbody>


<tr>
  
     <th>1</th>
    <td>mark</td>
    <td>0813 4567xxxx</td>
    <td>12 juli 2021</td>
    <td>01932211</td>
    <td>021</td>
   <td>1 paket molen</td>
</tr>
 


    <tr>
         <th>2</th>
       <td>jacob</td>
      <td>0813 4565xxxx</td>    
     <td>11 juni 2021</td>
    <td>01932244</td>
       <td>023</td>
    <td>1 paket molen</td>
  </tr>

    <tr>
<th>3</th>
  <td>jojo</td>
   <td>0813 4511xxxx</td>
   <td>16 juni 2021</td>
  <td>01932112</td>
   <td>011</td>
   <td>1 roti basah</td>
</tr>


<tr>

<th>4</th>
   <td>joen</td>
   <td>0813 4561xxxx</td>
 <td>12 juni 2021</td>
   <td>019311211</td>
   <td>026</td>
   <td>1 paket kering</td>
</tr>


<tr>  
      <th>5</th>
         <td>estes</td>
             <td>0813 4515xxxx</td>
         <td>12 juni 2021</td>
     <td>01232211</td>
   <td>042</td>
 <td>1 paket kue ultah</td>
       </tr>
    </tbody>
  </table>
      </div>
    
</div>
   </div>

 <h1>Lezat dan Nikmat</h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>