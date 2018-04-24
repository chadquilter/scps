
<br>
<div class="main-color text-light sidebar_pad shadow_only">
  <h4><strong>{{__('Bookmarks')}}</strong></h4>
</div>
<div class="card">
  <div class="card-body">
    <ul>
      @foreach($sidelinks as $sidelink)
          <li>
            <h6>
              <a class="btn btn-outline-danger btn-lg {{ ( \Request::url() == url($sidelink["link"]) ) ? 'active' : '' }}" href="{{ url($sidelink["link"]) }}">{{ __($sidelink["label"])}}</a>
            </h6>
            <br>
          </li>
      @endforeach
    </ul>
    <hr class="style-two">
  </div>
</div>
