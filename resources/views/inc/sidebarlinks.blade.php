<div class="main-color text-light sidebar_pad">
  <h1>{{__('Links')}}</h1>
</div>
<br>
<div class="card">
  <div class="card-body">
    <ul>
      @foreach($sidelinks as $sidelink)
        <li>
          <a href="/{{$sidelink}}" class="btn btn-primary">{{$sidelink}}</a>
        </li>
      @endforeach
    </ul>
    <hr class="lead">
  </div>
</div>
