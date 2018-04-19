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
    <a href="{{ $link["link"] }}" class="nounderline">
    <div class="card card-inverse text-center img-container" style="min-width: 10rem; max-width: 15rem;">
      <!-- Image -->
      <img class="card-img-top img-image" src="{{ $link["image_link"] }}" alt="Thumbnail to {{ $link["label"] }}">
      <!-- Text Overlay -->
      <div class="card-img-overlay d-flex align-items-end align-items-stretch">
        <div class="bg-warning text-white">
          <h2 class="card-text"><strong>{{ __($link["label"])}}</strong></h2>
        </div>
      </div>
    </div>
    </a>
  </div>

  @endforeach
</div>
<hr>
