
@if (count($files) > 0)
<br>
<div class="card alt-color border border-dark rounded image_display_r">
  <div class="card-img-top">
    <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($files as $file)
          @php $active = $loop->index === 0 ? 'active' : ''; @endphp
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class={{$active}}></li>
        @endforeach
      </ol>
      <div class="carousel-inner" role="listbox">
        @foreach($files as $file)
          @php $active = $loop->index === 0 ? 'active' : ''; @endphp
        <div class="carousel-item  {{$active}}">
            <img class="" src="/images/{{$file}}" alt="Custom Houses, Custom Construction, custom tile, carpet, drywall, Custom Metal Work, Paving, Asphalt, Show House, kitchen, bath House Remodeling, House Renovations, House Repair, Custom Deck, tile, shower,Custom Bridges, Custom Roads, Excivation, Interior Design, Custom Patio, rock floor">
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="card-footer">
    <h6><small>
      "The academic environment at SCPS is a rarity in colleges. Seeing it at the high school level essentially makes CCHS one of a kind."
      <br>
      Zachary K., alumnus and West Point graduate
    </small></h6>
  </div>
</div>
<br>
@else
  <br>
    <div class="alert alert-warning" for="alert">No Images available inside directory (i.e .. /images/xx123 .. )</div>
  <br>
@endif
