
<div class="card">
  <div class="card-img-top main-color text-light sidebar_pad image_display_r">
    <h1>{{__('Bookmarks')}}</h1>
  </div>
  <div class="card-body image_display_r">
    <div class="card-txt">
    <ul class="list-group">
      @foreach($sidelinks as $sidelink)
        <li class="list-group-item">
          <a class="btn btn-outline-danger btn-block btn-sm {{ ( \Request::url() == url($sidelink["link"]) ) ? 'active' : '' }}" href="{{ url($sidelink["link"]) }}">{{ __($sidelink["label"])}}</a>
        </li>
      @endforeach
    </ul>
    </div>
  </div>
</div>
