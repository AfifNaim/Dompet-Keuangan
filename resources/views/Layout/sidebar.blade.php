      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">@yield('title') {{ config('app.name') }}</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="{{ route('categorie.index') }}"><i class="fas fa-pencil-fill"></i> <span>Categorie</span></a></li>
              <li><a class="nav-link" href="{{ route('expense.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Expense</span></a></li>
              <li><a class="nav-link" href="{{ route('income.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Income</span></a></li>
              <li><a class="nav-link" href="{{ route('ontime.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Ontime</span></a></li>
              <li><a class="nav-link" href="{{ route('recurent.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Recurent</span></a></li>
              <li><a class="nav-link" href="{{ route('sub_categorie.index') }}"><i class="fas fa-pencil-ruler"></i> <span>Sub Categorie</span></a></li>
          </ul>
        </aside>
      </div>