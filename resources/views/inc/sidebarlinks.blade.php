
<br>
<div class="main-color text-light sidebar_pad shadow_only">
  <h4 class="lead"><strong>{{__('Bookmarks')}}</strong></h4>
</div>
<div class="card">
  <div class="card-body">
    <ul>
      @foreach($sidelinks as $sidelink)
        <a class="btn btn-outline-danger btn-block {{ ( \Request::url() == url($sidelink["link"]) ) ? 'active' : '' }}" href="{{ url($sidelink["link"]) }}">{{ __($sidelink["label"])}}</a>
      @endforeach
    </ul>
    <hr class="style-two">
  </div>
</div>
