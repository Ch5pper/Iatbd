<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geleende items</title>
    <style>
        body {
            background-color: #f5f5f5;
        }
        .padding {
            padding: 3rem !important
        }
        .user-card-full {
            overflow: hidden;
        }
        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
            box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
            border: none;
            margin-bottom: 30px;
        }
        .m-r-0 {
            margin-right: 0px;
        }
        .m-l-0 {
            margin-left: 0px;
        }
        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px;
        }
        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263);
        }
        .user-profile {
            padding: 20px 0;
        }
        .card-block {
            padding: 1.25rem;
        }
        .m-b-25 {
            margin-bottom: 25px;
        }
        .img-radius {
            border-radius: 5px;
        }
        h3 {
            font-size: 14px;
        }
        .card .card-block p {
            line-height: 25px;
        }
        @media only screen and (min-width: 1400px){
            p {
                font-size: 14px;
            }
        }
        .card-block {
            padding: 1.25rem;
        }
        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }
        .m-b-20 {
            margin-bottom: 20px;
        }
        .p-b-5 {
            padding-bottom: 5px !important;
        }
        .card .card-block p {
            line-height: 25px;
        }
        .m-b-10 {
            margin-bottom: 10px;
        }
        .text-muted {
            color: #919aa3 !important;
        }
        .f-w-600 {
            font-weight: 600;
        }
        .m-t-40 {
            margin-top: 20px;
        }
        .p-b-5 {
            padding-bottom: 5px !important;
        }
        .m-b-10 {
            margin-bottom: 10px;
        }
        .m-t-40 {
            margin-top: 20px;
        }
        .user-card-full .social-link li {
            display: inline-block;
        }
        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .navbar {
            background-color: #f5f5f5;
            padding: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .navbar a {
            color: #333333;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 3px;
        }

        .navbar a:hover {
            background-color: #cccccc;
        }

    </style>
</head>
<body>
    <div class="navbar">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Ga terug') }}
            </x-nav-link>
        </div>
    </div>

    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <h3>Profiel: </h3>
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h3 class="m-b-20 p-b-5 b-b-default f-w-600">Informatie</h3>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h3 class="text-muted f-w-400">{{ Auth::user()->email }}</h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Wachtwoord</p>
                                            <h3 class="text-muted f-w-400">{{ Auth::user()->password }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
