<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="custom.js"></script>

<div class="brand-carousel section-padding owl-carousel">
  @forelse($patrocinadores as $patro)
    <div class="single-logo" style="text-align: -webkit-center">
      <a href="{{$patro->web_url}}" target="_blank">
        <img src="{{$patro->logo->getUrl()}}" alt="" style="width:80px;height: 80px;">
        <span>{{$patro->name}}</span>
      </a>
    </div>
  @empty
  @endforelse
</div>

<style>

.section-padding{
padding:5px 0;
}
.brand-carousel {
background:none;
margin-top: 1%;
}
.owl-dots {
text-align: center;
margin-top: 4%;
}
.owl-dot {
display: inline-block;
height: 15px !important;
width: 15px !important;
background-color: #e7e7e7 !important;
opacity: 0.8;
border-radius: 50%;
margin: 0 5px;
}
.owl-dot.active {
background-color: #fff !important;
}

</style>

<script>
  $('.brand-carousel').owlCarousel({
  loop:true,
  autoplay:true,
 dots:false,
  responsive:{
    0:{
      items:1
    },
    600:{
      items:3
    },
    1000:{
      items:5
    }
  }
}) 

</script>