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
                    <h2 class="btmspace--15 topspace-8 bold">Daftar Peminjaman</h2>
                </div>

                <div class="add-new btmspace-15">
                    <form action="" method="post">
                        <input type="text" required name="search" placeholder="Cari anggota" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;">
                        <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="add-new btmspace-15">
                  <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Filter status
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="/admin/manage-loans">Tampilkan semua</a>
                      <a class="dropdown-item" href="/admin/manage-loans-ditolak">Ditolak</a>
                      <a class="dropdown-item" href="/admin/manage-loans-dalam-peminjaman">Dalam peminjaman</a>
                      <a class="dropdown-item" href="/admin/manage-loans-sudah-kembali">Sudah dikembalikan</a>
                    </div>
                  </div>
                </div>
                <!-- ################################################################################################ -->
                <div class="group btmspace-20 demo">
                    <br>
                    <br>
                    <br>
                    <h3 style="text-align: center">Tidak ada peminjaman yang ditolak</h3>
                </div>
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
@endsection
