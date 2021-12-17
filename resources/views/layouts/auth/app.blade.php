
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Arquivo histórico
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/paper-dashboard.min.css')}}?v=2.1.1" rel="stylesheet" />
    
    <link rel="stylesheet" type="text/css" id="" href="{{asset('assets/plugins/font-awesome/4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" id="" href="{{asset('assets/plugins/line-awesome/1.3.0/css/line-awesome.min.css')}}"/>

    <link href="{{asset('assets/css/utils.css')}}?v=2.1.1" rel="stylesheet" />
    
    <style>
        body{
          
          background: #0f6fbd;
          background: url('{{asset('assets/img/bgs/05.jpeg')}}') fixed center top no-repeat;
        }
        
                
    </style>
</head> 

<body class="">

<!-- End Navbar -->
<div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" data-image="{{asset('assets/img/bgs/07.jpg')}}">
        
        <div id="card-login" class="content">
            <div class="container">
                @yield('content');
                
            </div>
        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>

                        </ul>
                    </nav>
                    <div class="credits ml-auto">
              
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>

<script src="{{asset('assets/plugins/flexverticalcenter/jquery.flexverticalcenter.js')}}"></script>



<script type="text/javascript">

    
    jQuery.fn.center = function () {
        this.css("position","absolute");
        this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
                                                    $(window).scrollTop()) + "px");
        this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
                                                    $(window).scrollLeft()) + "px");
        return this;
    }
    
    $(document).ready(function() {
        $('.card-center').flexVerticalCenter();
    });

</script>


</body>

</html>
