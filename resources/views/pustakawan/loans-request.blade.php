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
                    <h2 class="btmspace--15 topspace-8 bold">Permintaan Peminjaman</h2>
                </div>
                <div class="add-new btmspace-15">
                    <form action="/admin/cari-permohonan-peminjaman" method="get">

                        <input type="text" required name="search" placeholder="Cari anggota" value="{{ session('name') }}" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius: 5px;">
                        <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>

                    </form>
                </div>
                <!-- ################################################################################################ -->
                <div class="group btmspace-20 demo">
                    <div class="full first">

                      <div class="book-thumbnail auto first">
                          <img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                      </div>
                        <div class="book-request-description">
                            <a href="/admin/show-book"><h6 class="topspace-5 btmspace-15">Cracking The Coding Interview</h6></a>
                            <p class="topspace-5 btmspace-5">Rogo Jagad Alit</p><br>
                        </div>
                        <div class="request-thumbnail auto">
                            <img class="imglist inspace-5" src="{{asset('img/demo/profile.jpg')}}" alt="">
                        </div>
                        <div class="member-request-description">
                            <a href="/admin/member-details" class="topspace-5 btmspace-5"><strong>Aditya Pratama</strong></a>
                              <p class="topspace-5 btmspace-5">5115100101</p>
                              <p class="topspace-5 btmspace-5">Teknik Informatika</p>
                        </div>
                        <div class="control-button rightspace-10">
                            <a data-toggle="modal" data-target="#terima" class="btn btn-green btmspace-10" href="#">Terima</a>
                            <a data-toggle="modal" data-target="#tolak" class="btn btn-red" href="#">Tolak</a>
                        </div>
                    </div>
                </div>
                <div class="group btmspace-20 demo">
                    <div class="full first">

                      <div class="book-thumbnail auto first">
                          <img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                      </div>
                        <div class="book-request-description">
                            <a href="/admin/show-book"><h6 class="topspace-5 btmspace-15">Ternak Paus di Padang Pasir</h6></a>
                            <p class="topspace-5 btmspace-5">William Wembo Dumbo</p><br>
                        </div>
                        <div class="request-thumbnail auto">
                            <img class="imglist inspace-5" src="{{asset('img/demo/profile.jpg')}}" alt="">
                        </div>
                        <div class="member-request-description">
                            <a href="/admin/member-details" class="topspace-5 btmspace-5"><strong>Azka Yasin</strong></a>
                              <p class="topspace-5 btmspace-5">5115100031</p>
                              <p class="topspace-5 btmspace-5">Teknik Informatika</p>
                        </div>
                        <div class="control-button rightspace-10">
                            <a data-toggle="modal" data-target="#terima" class="btn btn-green btmspace-10" href="#">Terima</a>
                            <a data-toggle="modal" data-target="#tolak" class="btn btn-red" href="#">Tolak</a>
                        </div>
                    </div>
                </div>


                <nav class="pagination">
                    <ul>
                        <li class="current"><strong>1</strong></li>
                        <li><a href="/admin/loans-request/2">2</a></li>
                        <li><a href="/admin/loans-request/2">Next &raquo;</a></li>
                    </ul>
                </nav>
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
                        <p style="text-align: center">Apakah anda yakin ingin menerima permohonan peminjaman buku</p>
                        <strong><p style="text-align: center">Cracking the Coding Interview</p></strong><br>
                        <p style="text-align: center">Oleh</p>
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
                      <p style="text-align: center">Apakah anda yakin ingin menolak permohonan peminjaman buku</p>
                      <strong><p style="text-align: center">Ternak Paus di Padang Pasir</p></strong><br>
                      <p style="text-align: center">Oleh</p>
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
