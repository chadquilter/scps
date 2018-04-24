
<br>
<div class="main-color text-light sidebar_pad shadow_only">
  <h1>{{__('Bookmarks')}}</h1>
</div>
<div class="card">
  <div class="card-body shadow_only">
    <ul>
      @foreach($sidelinks as $sidelink)
        <a class="btn btn-outline-danger btn-block {{ ( \Request::url() == url($sidelink["link"]) ) ? 'active' : '' }}" href="{{ url($sidelink["link"]) }}"><h5>{{ __($sidelink["label"])}}</h5></a>
      @endforeach
    </ul>
    <hr class="style-two">
  </div>
</div>
