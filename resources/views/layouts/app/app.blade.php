
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/assets/css/paper-dashboard.css')}}?v=2.0.1" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" id="" href="{{asset('assets/plugins/line-awesome/1.3.0/css/line-awesome.min.css')}}"/>
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('/assets/img/logo-small.png')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
          <!-- <div class="logo-image-big">
            <img src="{{asset('/assets/img/logo-big.png')}}">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ request()->routeIs('dashboard') ? 'active' : ''  }} ">
            <a href="{{route('dashboard')}}">
              <i class="las la-search"></i>
              <p>Pesquisar</p>
            </a>
          </li>

          @if($isAdmin??NULL)
              <li class="{{ request()->routeIs('arquivos.show') ? 'active' : ''  }} ">
                <a href="{{route('arquivos.show')}}">
                  <i class="las la-file-image"></i>
                  <p>Arquivos</p>
                </a>
              </li>
          @endif
          @if($isAdmin??NULL)
              <li class="{{ request()->routeIs('colecoes.show') ? 'active' : ''  }} ">
                <a href="{{route('colecoes.show')}}">
                  <i class="las la-images"></i>
                  <p>Coleções</p>
                </a>
              </li>
          @endif
          @if($isAdmin??NULL)
              <li class="{{ request()->routeIs('usuarios.show') ? 'active' : ''  }} ">
                <a href="{{route('usuarios.show')}}">
                  <i class="las la-users"></i>
                  <p>Usuários</p>
                </a>
              </li>
          @endif          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                  {{explode(' ', trim(auth()->user()->name),1)[0]}}
                  <p>
                    <span class="d-lg-none d-md-block">
                        {{auth()->user()->name}}
                    </span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <a class="dropdown-item" href="{{route('logout')}}"><i class="las la-sign-out-alt"></i> Sair</a>
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
            @yield('content')
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Arquivo Histórico
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('/assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/assets/js/paper-dashboard.min.js')}}?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('/assets/demo/demo.js')}}"></script>
</body>

</html>