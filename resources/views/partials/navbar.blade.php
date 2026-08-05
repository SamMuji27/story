<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
          <div class="container">
            <a class="navbar-brand" href="/">Navbar</a>
  
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                
                <li class="nav-item">
                  <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about" >About</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link {{ request()->is('stories') ? 'active' : '' }}" href="/stories" >Stories</a>
                </li>

                {{-- <li class="nav-item">
                  <a class="nav-link {{ ($active == "category") ? 'active' : '' }}" href="/category" >Category</a>
                </li> --}}
                
              </ul>
            </div>
          </div>
      </nav>