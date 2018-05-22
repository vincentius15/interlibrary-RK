@extends('layouts.master')

@section('title', 'InterLibrary')

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


                @if(session('status'))
                    <h1 style="text-align: center; padding-top: 200px; padding-bottom: 200px;">Ups, buku <strong>{{session('status')}}</strong> tidak ditemukan <br>
                    <a href="/">Kembali ke halaman utama</a></h1>
                    @else
                    <div class="auto first">
                        <h2 class="bold">Hasil pencarian : c programming language</h2>
                    </div>
                    <div class="add-new btmspace-15">
                        <form action="" method="post">

                            <input type="text" required name="search" placeholder="Tahun" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;">
                            <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>

                        </form>
                    </div>
                    <div class="add-new btmspace-15">
                        <div class="dropdown show">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter Pencarian
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Semua</a>
                                <a class="dropdown-item" href="#">Fiksi</a>
                                <a class="dropdown-item" href="#">Sains</a>
                                <a class="dropdown-item" href="#">Sosial</a>
                            </div>
                        </div>
                    </div>
                    <div class="group btmspace-20 demo">
                      <a href="/books/show">
                        <div class="full first">
                            <div class="book-thumbnail auto first">
                                <img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                            </div>
                            <div class="book-description">
                                <h6 class="topspace-5 btmspace-15">Cracking The Coding Interview</h6>
                                <p class="topspace-5 btmspace-5">Rogo Jagad Alit</p>
                                <p class="topspace-5 btmspace-5">Amazon Books</p>
                                <p class="topspace-5 btmspace-5">978-0984782857</p>
                            </div>
                        </div>
                      </a>
                    </div>


                @endif
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
@endsection
