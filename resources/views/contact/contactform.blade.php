<div class="card mx-auto border border-secondary text-left">
  <div class="card-body">
    @include('inc.messages')
    {!! Form::open(['action' => 'QuotesController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
    <div class="form=group">
      {{Form::label('title', 'Name:')}}
      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
    </div>
    <div id="app-6" class="form=group">
      {{Form::label('phone', 'Phone:')}}
      {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone'])}}
    </div>
    <div class="form=group">
      {{Form::label('email', 'Email:')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
    </div>
    <div class="form=group">
      {{Form::label('description', 'Description:')}}
      {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Quote Description'])}}
    </div>
    <br>
    <div class="form=group">
      {{Form::label('notes', 'Notes:')}}
      {{Form::text('notes', '', ['class' => 'form-control', 'placeholder' => 'Additional Notes'])}}
    </div>
    <br>
    <div class="form=group">
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
