@extends('templates/main')

@section('content')
<section id="Mainaboutus">
  <div class="about-all-con">
    <div class="mab-con">
      <div class="aboutitem1 about-1">
        <h3>About us</h3>
        <p>
        Welcome to Taste & Write, your ultimate guide to discovering the best dining experiences. Whether you're searching for a cozy café, a hidden gem, or a five-star restaurant, we curate a diverse list of eateries to suit every palate. Our mission is to help food lovers explore and enjoy culinary delights from every corner of the city.
        </p>
      </div>
    </div>
    <div class="mab-points point-1">
      <div class="mp-img1">
        <img src="{{ asset('img/Logo/CHEF.png') }}" alt="" />
      </div>
      <div class="mp-text">
        <h3>Fancy Restaurant</h3>
        <p>
          We provide a variety of customer pet equipment. From food and water bowls to beds and leashes, we have everything you need for customers pet.
        </p>
      </div>
    </div>
    <div class="mab-points point-2 desktop-point">
      <div class="mp-text">
        <h3>Foods</h3>
        <p>
          We assure you that the doctors we provide are highly experienced and will not disappoint.
        </p>
      </div>
      <div class="mp-img2">
        <img src="{{ asset('img/Logo/Culinary.png') }}" alt="" />
      </div>
    </div>

    <div class="mab-points mb-point">
      <!--This point for mobile-->
      <div class="mp-text">
        <h3>Foods</h3>
        <p>
          We assure you that the doctors we provide are highly experienced and will not disappoint.
        </p>
      </div>
    </div>

    <div class="mab-points point-3"> 
      <div class="mp-img3">
        <img src="{{ asset('img/Logo/RESTAURANT.png') }}" alt="" />
      </div>
      <div class="mp-text">
        <h3>Good Chef</h3>
        <p>
          help your furry friend feel comfortable and secure in their new home.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection