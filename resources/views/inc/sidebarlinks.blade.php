
<div class="card">
  <div class="card-img-top main-color text-light sidebar_pad image_display_r">
    <h1>{{__('Bookmarks')}}</h1>
  </div>
  <div class="card-body image_display_r">
    <div class="card-txt">
    <ul class="list-group">
      @foreach($sidelinks as $sidelink)
        <li class="list-group-item">
          <div class="button-cool text-light nounderline">
            <a class="btn btn-xl btn-danger pull-right {{ ( \Request::url() == url($sidelink["link"]) ) ? 'active' : '' }}" href="{{ url($sidelink["link"]) }}">
              {{ __($sidelink["label"])}}
              <span> <<- </span>
            </a>
          </div>
        </li>
      @endforeach
    </ul>
    </div>
  </div>
</div>
