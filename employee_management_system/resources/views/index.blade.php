<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GSDA-Employee Management System</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100" style="background-color: rgb(69 69 69);">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h5 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log in or Register Now</p>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">



                                        @if (Route::has('login'))
                                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                                @auth
                                                    <a href="{{ url('/home') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                                @else
                                                    <a href="{{ route('login') }}"
                                                        class="text-sm text-gray-700 dark:text-gray-500 underline"><button
                                                            type="button" class="btn btn-danger btn-lg m-2">Log
                                                            In</button></a>

                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}"
                                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><button
                                                                type="button"
                                                                class="btn btn-warning btn-lg m-2">Register</button></a>
                                                    @endif
                                                @endauth
                                            </div>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image"> --}}
                                    <img src="{{ asset('img/Global skills logo and gif file Final.gif') }}"
                                        class="img-fluid text-center" alt="Sample image"
                                        style="width: 200px;
                                        height: 200px;
                                        margin-left: 130px;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
