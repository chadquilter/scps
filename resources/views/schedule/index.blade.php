@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Manage Calendar Tasks/Items:</h1>
      <div class="card mx-auto">
        <br>
        <div class="card-body">
          @include('inc.dashmenu')
          <hr class="my-1">
          @include('inc.messages')
          <br>
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          @if(count($items) > 0)
            <div class="container border border-secondary rounded shadow_only">
            <table class="table table-striped table-hover table-responsive">
              <thead class="thead-inverse">
                <tr>
                  <th nowrap><h3><span class="badge badge-secondary">{{ $items->count() }}</span> Total Tasks:</h3></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                  <tr>
                    <td width=80%>
                      <strong> {{$item->name}} </strong>
                      <hr class="my-1">
                      Description: </strpmg> <span class="badge badge-secondary"> {{$item->description}} </span>
                      Type: </strong> <span class="badge badge-secondary"> {{$item->type}} </span>
                      Date: </strong> <span class="badge badge-secondary"> {{$item->date}} </span>
                    </td>
                    <td width=10%><a href="/schedule/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>
                    <td width=10%>

                    </td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <td>
                    {{$items->links()}}
                  </td>
                  <td></td>
                  <td></td>
                </tr>
              </tfoot>
            </table>
          </div>
          @else
            <p>No Tasks found</p>
          @endif
        </div>
      </div>
    </div>
@endsection
