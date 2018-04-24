<div class="row">
  <div class="col">
    <img src="/images/icon-photo-gallery.png" border="0">
    <h4 class="display-4">{{__('Photo Gallery')}}</h4>
    <hr>
  </div>
</div>
<div class="row">
  <div class="card-deck-wrapper">
    <div class="card-deck">
      @foreach($links as $link)

        <div class="card card-inverse text-center img-container shadow_only border-warning grow" style="min-width: 8.0rem; max-width: 9.5rem;">
          <!-- Image -->
          <a href="{{ $link["link"] }}" class="nounderline">
            <img class="card-img-top img-image bg-warning" src="{{ $link["image_link"] }}" alt="Thumbnail to {{ $link["label"] }}">
            <!-- Text Overlay -->
            <div class="card-img-overlay d-flex align-items-end">
              <div class="bg-warning text-white" style="width:100%;">
                <h6 class="card-text"><strong>{{ __($link["label"])}}</strong></h6>
              </div>
            </div>
          </a>
        </div>

      @endforeach
    </div>
  </div>
</div>
<hr>
