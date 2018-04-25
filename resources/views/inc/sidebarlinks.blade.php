
<div class="card">
  <div class="card-img-top main-color text-light sidebar_pad image_display_r">
    <h1>{{__('Bookmarks')}}</h1>
  </div>
  <div class="card-body image_display_r">
    <div class="card-txt">
    <ul class="list-group">
      @foreach($sidelinks as $sidelink)
        <li class="list-group-item">
          <div>
            <a class="  {{ ( \Request::url() == url($sidelink["link"]) ) ? 'static-button-cool' : 'button-cool' }} {{ ( \Request::url() == url($sidelink["link"]) ) ? 'disabled' : '' }}" href="{{ url($sidelink["link"]) }}">
              {{ __($sidelink["label"])}}
              <span>&#x21D0;</span>
            </a>
          </div>
        </li>
      @endforeach
    </ul>
    </div>
  </div>
</div>
