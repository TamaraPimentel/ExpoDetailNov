<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators ">
    @forelse($revslider as $slide)
    @if($loop->index==0)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="active"></li>
    @else
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}"></li>
    @endif
    @empty
    @endforelse
    
  </ol>
  <div class="carousel-inner">
    @forelse($revslider as $slide)
    @if($loop->index==0)
    <div class="carousel-item active">
      <img class=" w-100" src="{{$slide->slider->getUrl()}}" style=" object-fit: contain;">
      <div class="carousel-caption d-md-block"> 
        <h2>{{$slide->hero_title}}</h2> <br> 
        <h5>{{$slide->hero_subtitle}}</h5><br>        
        @if($slide->button_text !=null)    
        <a href="{{$slide->button_url}}" class="impl_btn">{{$slide->button_text}}</a>
        @else
        @endif
      </div>

    </div>
    @else
    <div class="carousel-item">
      <img class="d-block w-100" src="{{$slide->slider->getUrl()}}" style=" object-fit: contain;">

      <div class="carousel-caption d-md-block">  
        <h2>{{$slide->hero_title}}</h2> <br> 
        <h5>{{$slide->hero_subtitle}}</h5> <br>       
        @if($slide->button_text !=null)    
        <a href="{{$slide->button_url}}" class="impl_btn">{{$slide->button_text}}</a>
        @else
        @endif
      </div>
    </div>
    @endif
    @empty
    @endforelse
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<style>
  .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

