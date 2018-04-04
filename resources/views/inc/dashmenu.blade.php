<hr class="my-4">
<p class="lead">
    <div class="card border border-secondary rounded shadow_only">
      <div class="card-body">
        <p class="lead"><strong>Dashboard Services:</strong></p>
        <hr class="my-4">
        @if (  Request::url() != url('dashboard') )
          <span data-feather="home"></span>
           <a href="/dashboard" class="alert alert-primary btn btn-secondary" role="button">Return to Dashboard</a>
        @endif
        @if ( Request::route()->getName() != 'schedule.index')
          <span data-feather="scheule"></span>
           <a href="/schedule" class="alert alert-primary btn btn-secondary" role="button">Return to Dashboard</a>
        @endif
      </div>
    </div>
</p>
