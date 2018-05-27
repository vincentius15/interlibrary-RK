@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('additional-style')
    <style type="text/css">
        /* DEMO ONLY */
        .container .demo{text-align:left;}
        .container .demo div{padding:3px 3px 3px 3px;}
        .container .demo div{color:#474747; background:#FFFFFF;}
        @media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
        /* DEMO ONLY */
    </style>
@endsection

@section('content')
    <div class="wrapper row2">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <div class="content">
                <!-- ################################################################################################ -->
                <div class="auto first">
                    <h2 class="btmspace--15 topspace-8 bold">Permohonan Anggota Baru</h2>
                </div>
                <div class="add-new btmspace-15">
                    <form action="/admin/cari-permohonan-anggota" method="get">

                        <input type="text" required id="search" name="search" placeholder="Cari calon anggota" value="{{ session('name') }}" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;">
                        <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>

                    </form>
                </div>
                <!-- ################################################################################################ -->
                <div class="group btmspace-20 demo">
                    <div class="full first">
                        <div class="book-thumbnail auto first">
                            <img class="imglist inspace-5" src="{{asset('img/demo/profile.jpg')}}" alt="">
                        </div>
                        <div class="leftspace-30 member-request-description">
                            <p class="font-x1 topspace-5 btmspace-10"><strong>Aditya Pratama</strong></p>
                            <p class="font-x1 topspace-10 btmspace-10">5115100101</p>
                            <p class="font-x1 topspace-10 btmspace-10">Teknik Informatika</p>
                            <p class="font-x1 topspace-10 btmspace-10">User</p>
                        </div>
                        <div class="control-button rightspace-10">
                            <a data-toggle="modal" data-target="#terima" class="btn btn-green btmspace-10" href="#">Terima</a>
                            <a data-toggle="modal" data-target="#tolak" class="btn btn-red" href="#">Tolak</a>
                        </div>
                        <div class="control-button rightspace-10">
                            <a class="btn btn-yellow" href="/admin/verify-member-detail">Detil</a>
                        </div>
                    </div>
                </div>

                <div class="group btmspace-20 demo">
                    <div class="full first">
                        <div class="book-thumbnail auto first">
                            <img class="imglist inspace-5" src="{{asset('img/demo/profile.jpg')}}" alt="">
                        </div>
                        <div class="leftspace-30 member-request-description">
                            <p class="font-x1 topspace-5 btmspace-10"><strong>Joko Susanto</strong></p>
                            <p class="font-x1 topspace-10 btmspace-10">559900001124</p>
                            <p class="font-x1 topspace-10 btmspace-10">Teknik Industri</p>
                            <p class="font-x1 topspace-10 btmspace-10">Pustakawan</p>
                        </div>
                        <div class="control-button rightspace-10">
                            <a data-toggle="modal" data-target="#terima" class="btn btn-green btmspace-10" href="#">Terima</a>
                            <a data-toggle="modal" data-target="#tolak" class="btn btn-red" href="#">Tolak</a>
                        </div>
                        <div class="control-button rightspace-10">
                            <a class="btn btn-yellow" href="/admin/verify-member-detail">Detil</a>
                        </div>
                    </div>
                </div>

                {{--<div class="group btmspace-20 demo">--}}
                    {{--<div class="full first">--}}
                        {{--<div class="book-thumbnail auto first">--}}
                            {{--<img class="imglist inspace-5" src="{{asset('img/demo/profile.jpg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="leftspace-30 member-request-description">--}}
                            {{--<p class="font-x1 topspace-5 btmspace-10"><strong>Nafia Nafia</strong></p>--}}
                            {{--<p class="font-x1 topspace-10 btmspace-10">5114100890</p>--}}
                            {{--<p class="font-x1 topspace-10 btmspace-10">Teknik Informatika</p>--}}
                        {{--</div>--}}
                        {{--<div class="control-button rightspace-10">--}}
                            {{--<a data-toggle="modal" data-target="#terima" class="btn btn-green btmspace-10" href="#">Terima</a>--}}
                            {{--<a data-toggle="modal" data-target="#tolak" class="btn btn-red" href="#">Tolak</a>--}}
                        {{--</div>--}}
                        {{--<div class="control-button rightspace-10">--}}
                            {{--<a class="btn btn-yellow" href="/admin/verify-member-detail">Detil</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
        <div id="terima" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center">Apakah anda yakin ingin menerima anggota baru:</p><br>
                        <strong><p style="text-align: center">Aditya Pratama</p></strong>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-green" href="/verify-member-blank">Ya</a>
                        <button type="button" class="btn btn-red" data-dismiss="modal">Batal</button>
                    </div>
                </div>

            </div>
        </div>
        <div id="tolak" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center">Apakah anda yakin ingin menolak anggota</p><br>
                        <strong><p style="text-align: center">Aditya Pratama</p></strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-green" data-dismiss="modal">Ya</button>
                        <button type="button" class="btn btn-red" data-dismiss="modal">Batal</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
