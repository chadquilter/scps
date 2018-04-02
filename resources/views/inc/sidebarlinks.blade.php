
<div class="main-color text-light sidebar_pad shadow_only">
  <h4 class="display-4">{{__('Bookmarks')}}</h4>
</div>
<div class="card">
  <div class="card-body shadow_only">
    <ul>
      @foreach($sidelinks as $sidelink)
          <a class="btn-primary btn-block {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/{{ $sidelink["link"] }}">{{$sidelink["label"]}}</a>
          <a class="btn-primary btn-block {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Services Overview</a>
          <br>
      @endforeach
    </ul>
    <hr class="style-two">
  </div>
</div>
