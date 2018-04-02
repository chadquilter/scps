<div class="main-color text-light sidebar_pad">
  <h1>{{__('Quick Links')}}</h1>
</div>
<br>
<div class="card">
  <div class="card-body image_display_r">
    <ul>
      @foreach($sidelinks as $sidelink)
          <a href="/{{$sidelink["link"]}}" class="btn btn-primary btn-block">{{$sidelink["label"]}}</a>
          <br>
      @endforeach
    </ul>
    <hr class="lead">
  </div>
</div>
