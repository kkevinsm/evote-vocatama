<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="public/assets/img/favicon.ico">
  <title>Evote | Musycab</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-social.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4566ed067d.js" crossorigin="anonymous"></script>

  <!-- CSS Tambahan -->
  @yield('head')

  <style>
    @media only screen and (max-width: 500px) {
        #app{
            max-height: 100vh;
        }
        .tampilan {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 150px 0px 0px 0px;
        }

        .items-profile-hangker {
            margin-top: 10px;
        }

        .section {
            height: auto;
        }
    }

    @media only screen and (max-width: 400px) {
        .tampilan {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin: 0px;
        }

        .items-profile-hangker {
            margin-top: 10px;
        }

        .section-1 {
            margin-top: 50px;
        }
        .section {
            height: 150vh!important;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 35px!important;
        }
        .main-footer {
            margin: 0!important;
        }
    }
  </style>
</head>

<body class="sidebar-mini">
  <div id="app" class="">
    <div class="main-wrapper">

    <section style="font-family: Montserrat; height: 100vh" class="section bg-[#071e34] font-medium">
        <div class="flex items-center justify-center h-5 w-screen text-white">
            <div class="header mt-40 text-[50px]">
                <p>Meet Our Team</p>
            </div>
        </div>

        <div class="tampilan flex items-center justify-center w-screen h-[85%]">
            <section class="items-profile-hangker section-1 w-64 bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg mx-[50px]">
                <div class="flex items-center justify-between">
                    <span class="text-gray-400 text-xs">Chief Marketing Officer</span>
                    <span class="text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                    </span>
                </div>

                <div class="mt-8 flex justify-center ">
                    <h2 class="text-white font-bold text-2xl tracking-wide">Ishlah Rizky</h2>
                </div>
                <div class="flex text-white justify-center h-5 my-4">
                    <a href="https://wa.me/6288805454700" target="_blank">
                        <i class="fa-brands fa-whatsapp mx-2 fa-2xl " style="color: #ffffff;"></i>
                    </a>
                    <a href="https://www.instagram.com/ishlahyt/" target="_blank">
                        <i class="fa-brands fa-instagram mx-2 fa-2xl" style="color: #ffffff;"></i>
                    </a>
                    <a href="#">
                        <i class="fa-brands fa-linkedin mx-2 fa-2xl" style="color: #ffffff;"></i>
                    </a>
                </div>
            </section>

            <section class="items-profile-hangker w-64 bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg mx-[50px]">
                <div class="flex items-center justify-between">
                    <span class="text-gray-400 text-xs">Chief Operational Officer</span>
                    <span class="text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                    </span>
                </div>

                <div class="mt-8 flex justify-center ">
                    <h2 class="text-white font-bold text-2xl tracking-wide">Kevin Safrisal</h2>
                </div>
                <div class="flex text-white justify-center h-5 my-4">
                    <a href="https://wa.me/6282132609848" target="_blank">
                        <i class="fa-brands fa-whatsapp mx-2 fa-2xl " style="color: #ffffff;"></i>
                    </a>
                    <a href="https://www.instagram.com/kkevinsm/" target="_blank">
                        <i class="fa-brands fa-instagram mx-2 fa-2xl" style="color: #ffffff;"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/kevin-safrisal-740502242/" target="_blank">
                        <i class="fa-brands fa-linkedin mx-2 fa-2xl" style="color: #ffffff;"></i>
                    </a>
                </div>
            </section>

            <section class="items-profile-hangker w-64 bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg mx-[50px]">
                <div class="flex items-center justify-between">
                    <span class="text-gray-400 text-xs">Chief Technology Officer</span>
                    <span class="text-emerald-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                    </span>
                </div>

                <div class="mt-8 flex justify-center ">
                    <h2 class="text-white font-bold text-2xl tracking-wide">Dawwas Inha</h2>
                </div>

                <div class="flex text-white justify-center h-5 my-4">
                    <a href="https://wa.me/6281357281859" target="_blank">
                        <i class="fa-brands fa-whatsapp mx-2 fa-2xl " style="color: #ffffff;"></i>
                    </a>
                    <a href="https://www.instagram.com/dawwas.inha/" target="_blank">
                        <i class="fa-brands fa-instagram mx-2 fa-2xl" style="color: #ffffff;"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-linkedin mx-2 fa-2xl" style="color: #ffffff;"></i>
                    </a>
                </div>
            </section>
        </div>
        
        <footer class="main-footer footerku">
            <div class="footer-left">
            Copyright &copy; 2023 <div class="bullet"></div> Made with ❤️ By <a href="#">Hangker Sepanjang</a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </section>
    </div>
  </div>
  
  <!-- General JS Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>


  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/custom2.js') }}"></script> -->

  <!-- JS Tambahan -->
  @yield('js')
</body>
</html>
