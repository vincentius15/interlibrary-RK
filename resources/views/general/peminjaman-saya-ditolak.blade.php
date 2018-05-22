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
                <div class="group btmspace-20 demo"><br><br>
                    <h3 style="text-align: center">Tidak ada peminjaman anda yang ditolak</h3>
                </div>
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
