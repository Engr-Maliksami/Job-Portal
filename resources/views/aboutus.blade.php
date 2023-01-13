@include('header')
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Who we are?</h2>
      <p><a href="#" title="Home">Home</a> <i class="ti-angle-double-right"></i> About us</p>
    </div>
  </div>
</div>

<!-- ================= About us start ========================= -->
<secton id="about_us">
<div class="about_us ">

  <div class="about_right">

    <img src="../assets/img/about1.png" width="500px" height="400px">

  </div>
  <div class="about_left">
    <h1>Jobish World Talent pool</h1>
    <h3>Work out who your audience is. Are you just looking for prospective candidates or are you an agency looking for new clients, too?</h3>



  </div>
</div>

<div class="about_us">

  <div class="about_left">
    <h1>Start your letter the right way</h1>




  </div>


  <div class="about_right">

    <img src="..assets/img/about2.png" width="500px" height="400px" />

  </div>
</div>





</section>



<!-- ================= about us ends ========================= -->





<!-- ================= contact us ends ========================= -->



<section class="contact " id="contact">
  <div class="heading text-center"><h1><i class="fa fa-address-book-o m-2"> </i>Contact us</h1></div>

  <div class="text-center contact-inner">

      <form action="get" class="contact-form">

          <input type="text" name="Name" placeholder="Name" required>
          <input type=" email" name="Email" placeholder="Email" required>
          <input type="text" name="subject" placeholder="subject" required>
          <textarea name="textarea" placeholder="Message"></textarea>
          <input type="submit" value="submit" class="btn btn-primary ">



  </form
  </div>




  </section>

<!-- ================= contact us ends ========================= -->


<section class="newsletter theme-bg" style="background-image:url(assets/img/bg-new.png)">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="heading light">
          <h2>Subscribe Our Newsletter!</h2>
          <p>Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
        <div class="newsletter-box text-center">
          <div class="input-group"> <span class="input-group-addon"><span class="ti-email theme-cl"></span></span>
            <input type="text" class="form-control" placeholder="Enter your Email...">
          </div>
          <button type="button" class="btn theme-btn btn-radius btn-m">Subscribe</button>
        </div>
      </div>
    </div>
  </div>
</section>

@include('footer')
