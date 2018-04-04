@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Create Job</h1>
      <div class="card mx-auto border border-secondary">
        <br>
        <div class="card-body">
          @include('inc.dashmenu')
          <hr class="my-1">
          @include('inc.messages')
          <br>
          <form action="{{ route('schedule.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="task" class="col-sm-4 col-form-label text-md-right">{{ __('Task Name') }}</label>
              <div class="col-md-6">
                <input id="task" type="text" class="form-control{{ $errors->has('task') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="type" class="col-sm-4 col-form-label text-md-right">{{ __('Task Type') }}</label>
              <div class="col-md-6">
                <input id="type" type="select" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-sm-4 col-form-label text-md-right">{{ __('Task Description') }}</label>
              <div class="col-md-6">
                <input id="description" type="textarea" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="date" class="col-sm-4 col-form-label text-md-right">{{ __('Task Date') }}</label>
              <div class="col-md-6">
                <input id="task" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <input type="submit" value="Save" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
