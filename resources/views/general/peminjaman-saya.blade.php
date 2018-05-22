@extends('layouts.master')

@section('title', 'InterLibrary | User')

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
                    <h2 class="btmspace--15 topspace-8 bold">Peminjaman saya</h2>
                </div>
                <div class="add-new btmspace-15">
                  <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Filter status
                    </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="/peminjaman-saya-tunggu-setuju">Menunggu persetujuan</a>
                          <a class="dropdown-item" href="/peminjaman-saya-tunggu-ambil">Menunggu pengambilan</a>
                          <a class="dropdown-item" href="/peminjaman-saya-ditolak">Ditolak</a>
                          <a class="dropdown-item" href="/peminjaman-saya-sedang-dipinjam">Dalam peminjaman</a>
                          <a class="dropdown-item" href="/peminjaman-saya-sudah-kembali">Sudah dikembalikan</a>
                      </div>
                  </div>
                </div>
                <!-- ################################################################################################ -->
                @foreach($peminjamans as $peminjaman)
                    <div class="group btmspace-20 demo">
                        <div class="full first">
                            <div class="book-thumbnail auto first">
                                <img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                            </div>
                            <div class="book-description-medium">
                                <h6 class="topspace-5 btmspace-15">{{$peminjaman['judul']}}</h6>
                                <p class="topspace-5 btmspace-5">{{$peminjaman['pengarang']}}</p>
                                <p class="topspace-5 btmspace-5">{{$peminjaman['penerbit']}}</p>
                                <p class="topspace-5 btmspace-5">{{$peminjaman['isbn']}}</p>
                            </div>
                            <div class="control-button rightspace-10 float-left">
                                <p class="topspace--10 btmspace-5">Status :</p>

                                @if($peminjaman['status'] === 'Menunggu persetujuan')
                                <p class="btmspace-15"><strong>Menunggu persetujuan</strong></p>
                                <a data-toggle="modal" data-target="#batalkan" class="btn btn-red" href="#">Batalkan peminjaman</a>
                                @endif

                                @if($peminjaman['status'] === 'Sudah dikembalikan')
                                    <p class="btmspace-15"><strong>Sudah dikembalikan</strong></p>
                                    <p class="topspace--10 btmspace-5">Dikembalikan tanggal :</p>
                                    <p class="btmspace-15"><strong>5-5-2018</strong></p>
                                @endif

                                @if($peminjaman['status'] === 'Dalam peminjaman')
                                    <p class="btmspace-15"><strong>Dalam peminjaman</strong></p>
                                    <p class="topspace--10 btmspace-5">Batas peminjaman :</p>
                                    <p class="btmspace-15"><strong>30-5-2018</strong></p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<div class="group btmspace-20 demo">--}}
                    {{--<div class="full first">--}}
                        {{--<div class="book-thumbnail auto first">--}}
                            {{--<img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="book-description-medium">--}}
                            {{--<h6 class="topspace-5 btmspace-15">Cracking The Coding Interview</h6>--}}
                            {{--<p class="topspace-5 btmspace-5">Rogo Jagad Alit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">Penerbit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">ISBN</p>--}}
                        {{--</div>--}}
                        {{--<div class="control-button rightspace-10 float-left">--}}
                          {{--<p class="topspace--10 btmspace-5">Status :</p>--}}
                          {{--<p class="btmspace-15"><strong>Menunggu pengambilan</strong></p>--}}
                          {{--<a data-toggle="modal" data-target="#batalkan" class="btn btn-red" href="#">Batalkan peminjaman</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="group btmspace-20 demo">--}}
                    {{--<div class="full first">--}}
                        {{--<div class="book-thumbnail auto first">--}}
                            {{--<img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="book-description-medium">--}}
                            {{--<h6 class="topspace-5 btmspace-15">Cracking The Coding Interview</h6>--}}
                            {{--<p class="topspace-5 btmspace-5">Rogo Jagad Alit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">Penerbit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">ISBN</p>--}}
                        {{--</div>--}}
                        {{--<div class="control-button rightspace-10 float-left">--}}
                          {{--<p class="topspace--10 btmspace-5">Status :</p>--}}
                          {{--<p class="btmspace-15"><strong>Menunggu persetujuan</strong></p>--}}
                          {{--<a data-toggle="modal" data-target="#batalkan" class="btn btn-red" href="#">Batalkan peminjaman</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="group btmspace-20 demo">--}}
                    {{--<div class="full first">--}}
                        {{--<div class="book-thumbnail auto first">--}}
                            {{--<img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="book-description-medium">--}}
                            {{--<h6 class="topspace-5 btmspace-15">Cracking The Coding Interview</h6>--}}
                            {{--<p class="topspace-5 btmspace-5">Rogo Jagad Alit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">Penerbit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">ISBN</p>--}}
                        {{--</div>--}}
                        {{--<div class="control-button rightspace-10 float-left">--}}
                          {{--<p class="topspace--10 btmspace-5">Status :</p>--}}
                          {{--<p class="btmspace-15"><strong>Sudah dikembalikan</strong></p>--}}
                          {{--<p class="topspace--10 btmspace-5">Dikembalikan tanggal :</p>--}}
                          {{--<p class="btmspace-15"><strong>5-5-2018</strong></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="group btmspace-20 demo">--}}
                    {{--<div class="full first">--}}
                        {{--<div class="book-thumbnail auto first">--}}
                            {{--<img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="book-description-medium">--}}
                            {{--<h6 class="topspace-5 btmspace-15">Cracking The Coding Interview</h6>--}}
                            {{--<p class="topspace-5 btmspace-5">Rogo Jagad Alit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">Penerbit</p>--}}
                            {{--<p class="topspace-5 btmspace-5">ISBN</p>--}}
                        {{--</div>--}}
                        {{--<div class="control-button rightspace-10 float-left">--}}
                          {{--<p class="topspace--10 btmspace-5">Status :</p>--}}
                          {{--<p class="btmspace-15"><strong>Dalam peminjaman</strong></p>--}}
                          {{--<p class="topspace--10 btmspace-5">Batas peminjaman :</p>--}}
                          {{--<p class="btmspace-15"><strong>30-5-2018</strong></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
        <div id="batalkan" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center">Apakah anda ingin membatalkan peminjaman buku</p><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-green" data-dismiss="modal">Ya</button>
                        <button type="button" class="btn btn-red" data-dismiss="modal">Tidak</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
