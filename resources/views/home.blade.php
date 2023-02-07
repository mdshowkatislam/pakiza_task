@extends('layouts.app')

@section('content')
git init
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="btn btn-info navbar-brand" href="{{ url('/') }}">
            Home
        </a>
        <a class="btn btn-info navbar-brand" href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">
            Showkat_youtube_channel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @if (session('status'))
                <h1 class="alert alert-success" role="alert">
                    {{ session('status') }}
                </h1>
                @endif

                {{ __('You are logged in!!') }}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->

                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>



    </div>
</nav><br />
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card" style="margin:0px; padding:0px;">
            <div class="card-header">
                <p class="p1">একনজরে</p>
            </div>
            <div class="card-body col-md-10 distrow " style="float:right;">
                <div class="col-md-3 unitdist">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>জেলা</option>
                        <option value="1">ঢাকা </option>
                        <option value="2">খুলনা </option>
                        <option value="3">সিলেট</option>
                        <option value="3">বরিশাল </option>
                    </select>
                </div>

                <div class="col-md-3 unitdist">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>উপজেলা</option>
                        <option value="1">নারায়ণগঞ্জ </option>
                        <option value="2">গাজীপুর </option>
                        <option value="3">সাভার </option>
                        <option value="3">গাবতলী </option>
                    </select>
                </div>
                <div class="col-md-3 unitdist">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>ইউনিয়ন</option>
                        <option value="1">উত্তরা</option>
                        <option value="2">বাড্ডা </option>
                        <option value="3">মিরপুর </option>
                        <option value="3">আজমপুর </option>
                    </select>
                </div>
                <div class="col-md-3 unitdist">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>ব্লক</option>
                        <option value="1">১ ব্লক </option>
                        <option value="2">২ ব্লক</option>
                        <option value="3">৩ ব্লক</option>
                        <option value="3">৪ ব্লক</option>
                    </select>
                </div>
            </div>
            <div>
                <h5 class="p1">আপনি সমগ্র বাংলাদেশের প্রতিবেদন দেখছেন</h4>
            </div>
            <div class="col-md-12 distrow" style="height:130px;">
                <div class="col-md-4 unitdist" style="background: #F9F9F9">
                    <div class="col-md-12 distrow">
                        <div class="col-md-3 unitdist">৩২২৪২১ টি
                            ব্লক
                        </div>
                        <div class="col-md-3 unitdist">৩২২৪টি প্রতিবেদন প্রদান করেছে ৯৯৮৩৭ টি প্রতিবেদন প্রদান করে নাই
                        </div>
                        <div class="col-md-3 unitdist"><img src="{{ asset('img/f-2.png') }}"
                                alt="forword icon not is public img file"></div>
                    </div>
                </div>
                <div class="col-md-2 unitdist">

                    <canvas id="myChart" style="width:100%;height:130px; padding:10px"></canvas>

                    <script>
                        var xValues = ["abc", "xyz"];
                var yValues = [70,20];
                var barColors = [
                  "#b91d47",
                  "#00aba9",

                ];

                new Chart("myChart", {
                  type: "pie",
                  data: {

                    datasets: [{
                      backgroundColor: barColors,
                      data: yValues


                    }]
                  },
                  options: {
                    title: {
                        text: "দৈনিক তথ্য গ্রহণের হার",
                      display: true


                    }
                  }
                });
                    </script>
                </div>
                <div class="col-md-2 unitdist"><canvas id="myChart1"
                        style="width:100%;height:130px; padding:10px"></canvas>

                    <script>
                        var xValues = ["abc", "xyz"];
                                var yValues = [30,70];
                                var barColors = [
                                  "#b91d47",
                                  "#00aba9",

                                ];

                                new Chart("myChart1", {
                                  type: "pie",
                                  data: {

                                    datasets: [{
                                      backgroundColor: barColors,
                                      data: yValues


                                    }]
                                  },
                                  options: {
                                    title: {
                                        text: "হাওর এলাকার প্রতিবেদন",
                                      display: true


                                    }
                                  }
                                });
                    </script>
                </div>
                <div class="col-md-2 unitdist">
                    <canvas id="myChart2" style="width:100%;height:130px; padding:10px"></canvas>

                    <script>
                        var xValues = ["abc", "xyz"];
                                var yValues = [50,50];
                                var barColors = [
                                  "#b91d47",
                                  "#00aba9",

                                ];

                                new Chart("myChart2", {
                                  type: "pie",
                                  data: {

                                    datasets: [{
                                      backgroundColor: barColors,
                                      data: yValues


                                    }]
                                  },
                                  options: {
                                    title: {
                                        text: "প্রাকৃতিক দুর্যোগের ক্ষতির প্রতিবেদন",
                                      display: true


                                    }
                                  }
                                });
                    </script>
                </div>
            </div><br>

            <div class="p1">
                < 2022-23 অর্থ বছর </div>
                    <div class="card-body col-md-10 distrow " style="float:right;">

                        <canvas id="barChart" style="width:100%;height:290px;"></canvas>

                        <script>
                            var xValues = ["ধান", "গম", "ভুট্টা", "সরিষা", "তিল","তিসি","মুসুর","আখ","পাট","আলু","পেঁয়াজ","মরিচ","টমেটো"];
                            var yValues4 = [55, 49, 44, 24, 15,22,39,20,48,25,11,28,35];
                            var barColors4 = "darkgreen";

                            new Chart("barChart", {
                              type: "bar",
                              data: {
                                labels: xValues,
                                datasets: [{
                                  backgroundColor: barColors4,
                                  data: yValues4
                                }]
                              },
                              options: {
                                legend: {display: false},
                                title: {
                                  display: true,

                                }
                              }
                            });
                        </script>



                    </div>
                    <div class="card-body col-md-10 distrow ">


                        <div class="col-md-8">
                            <div class="flex-parent-element">
                                <div class="flex-child-element p2">প্রতিবেদন</div>
                                <div class="flex-child-element p2" style="text-align:right;">
                                    < ২০২৩>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">জানুয়ারী</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">ফেব্রুয়ারী</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">মার্চ</p>
                                    </div>

                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">এপ্রিল</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">মে</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">জুন</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">জুলাই</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">আগস্ট</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">সেপ্টেম্বর</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">সেপ্টেম্বর</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">নভেম্বর</p>
                                    </div>
                                    <div class="col-sm mnc">
                                        <a href="{{ asset('img/f-1.png') }}" download>
                                            <img src="{{ asset('img/f-1.png') }}" width="70" height="60">

                                        </a>
                                        <p class="monthName">ডিসেম্বর</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-parent-element">
                                <div class="flex-child-element p2">কুইক মেনু</div>

                            </div>
                            <div class="container">
                                <div class="row quickManu">
                                    <p>নতুন ফসল/জাত যোগ করন ও সম্পাদন</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row quickManu">
                                    <p>নতুন ফসল/জাত যোগ করন ও সম্পাদন</p>
                                </div>
                            </div>





                        </div>
                        <div class=" vl"></div>

                        <div class="col-md-4">
                            <div class="flex-parent-element">
                                <div class="flex-child-element p2">সাম্প্রতিক</div>
                                <div class="flex-child-element " style="text-align:right;">
                                    <a href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">সব
                                        দেখুন</a>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row quickManu">
                                    <p>রংপুর জেলা থেকে তথ্য সংগ্রহ করা হয়েছে</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row quickManu">
                                    <p>নোটিশ: ত্রৈমাসিক সভা ২৩ এপ্রিল</p>
                                </div>
                            </div><br><br>




                            <div class="flex-parent-element">
                                <div class="flex-child-element p2">ড্রোন লগ</div>
                                <div class="flex-child-element " style="text-align:right;">
                                    <a href="https://www.youtube.com/channel/UCqV0FDV2K9ynsytLzCEU4Yg/videos">সব
                                        দেখুন</a>

                                </div>
                            </div>
                            <div class="container">
                                <div class="row quickManu">
                                    <p>রংপুর জেলা থেকে ড্রোন ব্যবহার করা হয়েছে </p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row quickManu">
                                    <p>নারায়ণগঞ্জ জেলা থেকে ড্রোন ব্যবহার করা হয়েছে</p>
                                </div>
                            </div>
                        </div>


                    </div>

            </div>

        </div>
    </div>

    @endsection
