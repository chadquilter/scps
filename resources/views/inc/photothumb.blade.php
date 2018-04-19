<div class="row">
  <div class="col">
    <img src="/images/icon-photo-gallery.png" border="0">
    <h4 class="display-4">{{__('Photo Gallery')}}</h4>
    <hr>
  </div>
</div>
<div class="row">
  @foreach($links as $link)
  <div class="col">
    <br>
    <div class="card card-inverse text-center img-container" style="max-width: 202px;">
      <!-- Image -->
      <img class="card-img-top img-image" src="{{ $link["link"] }}" alt="Thumbnail to {{ $link["link"] }}">
      <!-- Text Overlay -->
      <div class="card-img-overlay align-items-end">
        <div class="alert alert-dark">
          <p class="card-text">{{ __( '{$link["label"]}' )}}</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
<hr>
