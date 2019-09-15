<div class="site-menubar">
        <div class="site-menubar-body">
          <div>
            <div>
              <ul class="site-menu" data-plugin="menu">
                <li class="site-menu-category">General</li>
                <li class="site-menu-item {{ $sidemenuActive == 'index' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/dashboard') }}">
                          <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                          <span class="site-menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="site-menu-item {{ $sidemenuActive == 'pengunjung' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/pengunjung') }}">
                          <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                          <span class="site-menu-title">Data Pengunjung</span>
                      </a>
                </li>
                
                <li class="site-menu-item {{ $sidemenuActive == 'objekwisata' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/objekwisata') }}">
                          <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                          <span class="site-menu-title">Data Objek Wisata</span>
                      </a> 
                
                <li class="site-menu-item {{ $sidemenuActive == 'laporan' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/laporan') }}">
                          <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                          <span class="site-menu-title">Data Laporan</span>
                      </a>
                </li>
                <li class="site-menu-item {{ $sidemenuActive == 'users' ? 'active': '' }}">
                  <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/users') }}">
                                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                                <span class="site-menu-title">Data User</span>
                            </a>
                </li>
                <li class="site-menu-item has-sub {{ $sidemenuActive == 'master' ? 'active open': '' }}">
                  <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                          <span class="site-menu-title">Data Master</span>
                                  <span class="site-menu-arrow"></span>
                      </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item {{ $sidemenuSubActive == 'kepemilikan' ? 'active': '' }}">
                      <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/master/kepemilikan') }}">
                        <span class="site-menu-title">Kepemilikan</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'kecamatan' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/master/kecamatan') }}">
                        <span class="site-menu-title">Kecamatan</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'kelurahan' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/master/kelurahan') }}">
                        <span class="site-menu-title">Kelurahan</span>
                      </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'kategori' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/master/kategori') }}">
                           <span class="site-menu-title">Kategori</span>
                        </a>
                    </li>
                    <li class="site-menu-item {{ $sidemenuSubActive == 'potensi' ? 'active': '' }}">
                        <a class="animsition-link waves-effect waves-classic" href="{{ url('/admin/master/potensi') }}">
                          <span class="site-menu-title">Potensi</span>
                        </a>
                    </li>
                    
                  </ul>
                </li>
              </ul>
              <div class="site-menubar-section">
                <h5>
                  Milestone
                  <span class="float-right">30%</span>
                </h5>
                <div class="progress progress-xs">
                  <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                </div>
                <h5>
                  Release
                  <span class="float-right">60%</span>
                </h5>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                </div>
              </div>      </div>
          </div>
        </div>
      
        <div class="site-menubar-footer">
          <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
          </a>
          <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
          </a>
          <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
          </a>
        </div>
      </div>