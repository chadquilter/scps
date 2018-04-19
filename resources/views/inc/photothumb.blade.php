<div class="row">
  <div class="col">
    <img src="/images/icon-photo-gallery.png" border="0">
    <h4 class="display-4">{{__('Photo Gallery')}}</h4>
    <hr>
  </div>
</div>
<div class="row">
  @foreach($links as $link)
  <a href="{{ $link["link"] }}">
  <div class="col">
    <br>
    <div class="card card-inverse text-center img-container" style="max-width: 202px;">
      <!-- Image -->
      <img class="card-img-top img-image" src="{{ $link["image_link"] }}" alt="Thumbnail to {{ $link["label"] }}">
      <!-- Text Overlay -->
      <div class="card-img-overlay d-flex align-items-end">
        <div class="bg-warning text-white sidebar_pad">
          <h4 class="card-text">{{ __($link["label"])}}</h4>
        </div>
      </div>
    </div>
  </div>
  </a>
  @endforeach
</div>
<hr>
