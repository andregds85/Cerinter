<aside class="main-sidebar sidebar-light bg-light">
    <a href="{{ route('home') }}" class="brand-link">
          <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('limpo.menu')
            </ul>
        </nav>
    </div>

</aside>
