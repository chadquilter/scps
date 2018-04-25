
<div class="card">
  <div class="card-img-top main-color text-light sidebar_pad image_display_r">
    <h1>{{__('Bookmarks')}}</h1>
  </div>
  <div class="card-body image_display_r">
    <div class="card-txt">
    <ul class="list-group">
      @foreach($sidelinks as $sidelink)
        <li class="list-group-item">
          <div class="nounderline">
            <a class="btn-block text-light  {{ ( \Request::url() == url($sidelink["link"]) ) ? 'btn static-button-cool disable' : 'button-cool' }}" href="{{ url($sidelink["link"]) }}">
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
