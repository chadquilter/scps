<div class="main-color text-light sidebar_pad">
  <h1>{{__('Links')}}</h1>
</div>
<br>
<div class="card">
  <div class="card-body">
    <ul>
      @foreach($sidelinks as $sidelink)
          <a href="/{{$sidelink["link"]}}" class="btn btn-primary">{{$sidelink["label"]}}</a>
          <br>
      @endforeach
    </ul>
    <hr class="lead">
  </div>
</div>
