@extends('layouts.front')

@section('content')
  <div class="sub-container">
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
              <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Task Name') }}</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
              </div>
            </div>
            <div class="form-group row">
              <label for="type" class="col-sm-4 col-form-label text-md-right">{{ __('Task Type') }}</label>
              <div class="col-md-6">
                <select id="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}" required autofocus>
                  <option id="academic">Academic</option>
                  <option id="academic">Daily</option>
                  <option id="academic">Sports</option>
                  <option id="academic">Events</option>
                </select>
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
                <input id="task_date" type="date" class="form-control{{ $errors->has('task_date') ? ' is-invalid' : '' }}" name="task_date" value="{{ old('taks_date') }}" required autofocus>
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
