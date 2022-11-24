  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{asset('public/images/logo/logobalitour.png')}}" alt="AdminLTE Logo" class="brand-image img-circle "
              style="opacity: .8">
          <span class="brand-text font-weight-light">DRIVERBALI</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->


          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">

                  <li class="nav-item">
                      <a href="{{url('home')}}" class="nav-link {{request()->is('home*') ? 'active' : ''}}">
                          <i class="fa-solid fa-signs-post"></i>
                          <p>
                              Postingan
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{url('mediasosial')}}" class="nav-link  {{request()->is('mediasosial*') ? 'active' : ''}}">
                          <i class="fa-solid fa-hashtag"></i>
                          <p>
                              Media Sosial
                          </p>
                      </a>
                  </li>
                  
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>