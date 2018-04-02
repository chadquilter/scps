
<div class="main-color text-light sidebar_pad shadow_only">
  <h1>{{__('Section Bookmarks')}}</h1>
</div>
<div class="card">
  <div class="card-body shadow_only">
    <ul>
      @foreach($sidelinks as $sidelink)
          <a href="/{{$sidelink["link"]}}" class="btn btn-primary btn-block">{{$sidelink["label"]}}</a>
          <br>
      @endforeach
    </ul>
    <hr class="lead">
  </div>
</div>
