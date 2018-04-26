<hr class="my-4">
<div class="card border border-secondary rounded shadow_only">
  <div class="card-header">
    <h3><strong>Dashboard Services:</strong></h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-4">
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
        <div class="card">
          <div class="card-header">
            Service:
          </div>
          <div class="card-body">
            Media
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
