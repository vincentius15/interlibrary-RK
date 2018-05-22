@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('additional-style')
    <style type="text/css">
        .member-content { background-color: white; border-radius: 5px;}

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
                    <h2 class="btmspace--15 topspace-8 bold">Detail Anggota</h2>
                </div>

                {{--Member identity--}}
                <div class="group btmspace-20 member-content">
                    {{--Photo Column--}}
                    <div class="col-lg-3 picture" style="margin: 30px; padding: 0px;">
                        <div class="col-lg-4">
                          <img class="imglist" style="max-height: 200px; max-width: 175px;" src="{{asset('img/demo/profile.jpg')}}" alt="">
                        </div>
                    </div>

                    {{--Text Column--}}
                    <div class="col-lg-5" style="margin: 30px auto; padding: 0px;">
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> NRP </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> 5115100101 </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Nama </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> Aditya Pratama  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Jurusan </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> Teknik Informatika  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Tanggal Lahir </strong> </div>
                            <div class="value" style="background-color: #ecf0f1">  29 Desember 1998  </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Alamat </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> Jl. Kejawan Gebang No.33 </div>
                        </div>
                        <div class="group" style="margin: 0px; margin-bottom: 20px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> No. Telp </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> +6285363547381 </div>
                        </div>
                        <div class="group" style="margin: 0px; padding: 0px; width: 380px;">
                            <div class="atribut"> <strong> Email </strong> </div>
                            <div class="value" style="background-color: #ecf0f1"> aditya.vritalia@gmail.com </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
