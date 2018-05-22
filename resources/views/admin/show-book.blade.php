@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('additional-style')
    <style type="text/css">
        .show-content { background-color: white; border-radius: 0px;}

        .atribut {
            background-color: #7f8c8d;
            color: white;
            margin: 0px;
            padding: 5px;
            padding-left: 10px;
            width: 110px;
            float: left;
        }

        .value {
            margin: 0px;
            padding: 5px;
            padding-left: 10px;
            width: 270px;
            float: left;
            border-width: 2px;
        }
    </style>
@endsection

@section('content')
    <div class="wrapper row2">
        <main class="hoc container clear">
            <div class="content">
                {{--Page Title--}}
                <div class="auto first btmspace-15">
                    <h2 class="btmspace--15 topspace-8 bold">Detail Buku</h2>
                </div>

                {{--Member identity--}}
                <div class="group btmspace-20 show-content">
                    {{--Photo Column--}}
                    <div class="col-lg-3 picture" style="margin: 30px; padding: 0px;">
                        <div class="col-lg-4">
                            <img class="imglist" style="max-height: 200px; max-width: 175px;" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                        </div>
                    </div>

                    {{--Text Column--}}
                    <div class="col-lg-5" style="margin: 30px auto; padding: 0px;">
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Judul Buku </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> Cracking the Coding Interview  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Pengarang </strong> </div>
                            <div class="value" style="background-color: #ecf0f1">  Rogo Jagad Alit  </div>
                        </div>
                        <br>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Kode Buku </strong> </div>
                            <div class="value" style="background-color: #ecf0f1">  TC-001  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> ISBN </strong> </div>
                            <div class="value" style="background-color: #ecf0f1">  978-0984782857  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Tahun Terbit </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> 2015  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Penerbit </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> Amazon Books  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Edisi </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> 1 </div>
                        </div>
                        <br>
                        <div class="group" style="margin: 0px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Sinopsis </strong> </div>
                            <div class="value" style="background-color: #ecf0f1; width: 380px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in auctor odio, non eleifend magna. Morbi efficitur risus sagittis, facilisis nisi in, sodales quam. Vivamus mauris nunc, varius non luctus a, imperdiet viverra orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ut augue dui. Proin tempor semper ipsum quis euismod. Duis sit amet lacus non lacus bibendum dictum sit amet quis justo. Cras venenatis massa quis massa tempor tempus. Suspendisse convallis turpis dolor. Ut lobortis, neque et tempor facilisis, turpis lacus accumsan sem, non convallis ante metus et ipsum. Mauris nec ultricies ipsum. Proin accumsan libero in consequat lobortis. </div>
                        </div>
                    </div>

                    {{--Button Column--}}
                </div>
            </div>
        </main>
    </div>
@endsection
