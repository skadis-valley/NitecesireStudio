@extends('layouts.app')
@section('content')



<!-- Navigation -->


<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <div class="row" style="margin-top: 5%; margin-bottom:5%;">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading text-uppercase">Product</h2>
    </div>
  </div>


  <!-- Image Header -->
  <img class="img-fluid  mb-5" src="img/product_img_5.jpg" alt="">

  <!-- Marketing Icons Section -->
  
  <div class="container" >
    <div class="row">
      <div class="col-md-3 col-sm-5 portfolio-item bg-light">
        <a class="portfolio-link" data-toggle="modal" href="/product/detail">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img style="margin-bottom: 5%; margin-top: 5%;" class="img-fluid" style="padding-top:5%;" src="img/portfolio/01-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h2>Scrapframe</h2>
          <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <h4></h4>
          <a href="/product/detail" class="card-link">Order</a>
        </div>
      </div>

      <div class="col-md-3 col-sm-5 portfolio-item bg-light">
        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img style="margin-bottom: 5%; margin-top: 5%;" class="img-fluid" style="padding-top:5%;" src="img/portfolio/01-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h2>Scrapframe</h2>
          <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <h4></h4>
          <a href="#" class="card-link">Order</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-5 portfolio-item bg-light">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img style="margin-bottom: 5%; margin-top: 5%;" class="img-fluid" style="padding-top:5%;" src="img/portfolio/01-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h2>Scrapframe</h2>
          <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <h4></h4>
          <a href="#" class="card-link">Order</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-5 portfolio-item bg-light">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
          <div class="portfolio-hover">
            <div class="portfolio-hover-content">
              <i class="fa fa-plus fa-3x"></i>
            </div>
          </div>
          <img style="margin-bottom: 5%; margin-top: 5%;" class="img-fluid" style="padding-top:5%;" src="img/portfolio/01-thumbnail.jpg" alt="">
        </a>
        <div class="portfolio-caption">
          <h2>Scrapframe</h2>
          <p class="text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <h4></h4>
          <a href="#" class="card-link">Order</a>
        </div>
      </div>

    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
  </div>
  <!-- /.container -->
</footer>
<script type="text/javascript">

  function goToProductDetail($param) {
   if($param == 'Scrapframe'){
    $.post("{{url('product/detail')}}");
  }
  else{
    alert('yang lainn');
  }
}

</script>


@endsection
