<hr class="my-4">
<p class="lead">
    <div class="card border border-secondary rounded shadow_only">
      <div class="card-header">
        <h3><strong>Dashboard Services:</strong></h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
        <hr class="my-4">
        @if (  Request::url() != url('dashboard') )
          <span data-feather="home"></span>
           <a href="/dashboard" class="alert alert-primary btn btn-secondary" role="button">Return to Dashboard</a>
        @endif
        @if ( Request::route()->getName() != 'schedule.index')
          <span data-feather="scheule"></span>
           <a href="/schedule" class="alert alert-primary btn btn-secondary" role="button">Calendar Manager</a>
        @endif
        @if ( Request::route()->getName() == 'schedule.index')
          <a href="/schedule/create" class="alert alert-primary btn btn-secondary" role="button">Add Calendar Task</a>
        @endif
        @if ( Request::route()->getName() != 'document.index')
          <span data-feather="document"></span>
           <a href="/document" class="alert alert-primary btn btn-secondary" role="button">Document Manager</a>
        @endif
        @if ( Request::route()->getName() == 'document.index')
          <a href="/schedule/create" class="alert alert-primary btn btn-secondary" role="button">Add Document</a>
        @endif
      </div>
      <div class="col-8">
        Media
      </div>
    </div>
      </div>
    </div>
</p>
