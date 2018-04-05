<div>
  <h1>Alert: Recieved SCPS Contact Email!</h1>
  <hr>
  <div>
    <strong>From: </strong> {{ $quoteName }}
    <br>
    <strong>Date: </strong> {{ $quoteDate }}
    <br>
    <strong>Phone: </strong> {{ $quotePhone }}
    <br>
    <strong>Email: </strong> {{ $quoteEmail }}
  </div>
  <br>
  <div>
    <strong>Description: </strong>
    <hr>
    {!! $quoteDescription !!}
  </div>
  <hr>
  <div>
    <strong>Notes: </strong> {{ $quoteNotes }}
  </div>
</div>
