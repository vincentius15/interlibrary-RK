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
                    <!-- <form action="/admin/cari-permohonan-anggota" method="get">

                        <input type="text" required name="search" placeholder="Cari calon anggota" value="{{session('name')}}" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;">
                        <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>

                    </form> -->
                </div>
                <!-- ################################################################################################ -->
                <div class="group btmspace-20 demo">

                </div>

                {{--<div class="group btmspace-20 demo">--}}
                    <br>
                    <br>
                    <br>
                    <h3 style="text-align: center"><strong>Tidak ada permohonan anggota</strong></h3>
                    <p style="text-align: center"><a href="/admin">Kembali ke beranda</a></p>
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
                        <p style="text-align: center">Apakah anda yakin ingin menerima anggota</p><br>
                        <strong><p style="text-align: center">Aditya Pratama</p></strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-green" data-dismiss="modal">Ya</button>
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
