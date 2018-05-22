@extends('layouts.master')

@section('title', 'InterLibrary')

@section('additional-style')
    <style type="text/css">
        /* DEMO ONLY */
        .container .demo{text-align:left;}
        .container .demo div{padding:3px 3px 3px 3px;}
        .container .demo div{color:#474747; background:#ffffff;}
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
                    <h2 class="btmspace--15 topspace-8 bold">Daftar Buku</h2>
                </div>
                <div class="add-new">
                    <a class="btn btn-primary btmspace-15" href="/admin/add-book">Tambah buku baru</a>
                </div>

                    <form action="" method="get" onsubmit="return cekData();">
                      <div class="add-new btmspace-15">
                      <select name="status" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;" placeholder="Cari berdasar">
                          <option value="1">Berdasar Judul</option>
                          <option value="2">Berdasar Pengarang</option>
                          <option value="3">Berdasar Penerbit</option>
                      </select>
                      <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="add-new btmspace-15 rightspace--20">
                      <input type="text" id="nama" required name="search" placeholder="Cari buku" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;">
                    </div>
                    </form>
                <!-- ################################################################################################ -->
                <div class="group btmspace-20 demo">
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
                        <div class="control-button rightspace-10">
                            <a class="btn btn-yellow" href="/admin/edit-book/1">Edit</a>
                        </div>
                    </div>
                </div>
                <div class="group btmspace-20 demo" id="nontarget">
                    <div class="full first">
                        <div class="book-thumbnail auto first">
                            <img class="imglist inspace-5" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                        </div>
                        <div class="book-description">
                            <h6 class="topspace-5 btmspace-15">Mengungkap Rahasia Mandi Pagi</h6>
                            <p class="topspace-5 btmspace-5">Bobby</p>
                            <p class="topspace-5 btmspace-5">Stangstung Books</p>
                            <p class="topspace-5 btmspace-5">978-0984782877</p>
                        </div>
                        <div class="control-button rightspace-10">
                            <a class="btn btn-yellow" href="/admin/edit-book/2">Edit</a>
                        </div>
                    </div>
                </div>
                {{--<nav class="pagination">--}}
                    {{--<ul>--}}
                        {{--<li class="current"><a href="#">1</a></li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            </div>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
@endsection

@section('additional-script')
    <script>
        function cekData() {
            var name = document.getElementById('nama').value;

            if (name !== 'programming')
            {
                var table = document.getElementById('content');
                var notif = document.createElement("h3");
                var backMenu = document.createElement("a");

                notif.innerHTML = "Buku <strong>" + name + "</strong> tidak ditemukan";
                notif.style.paddingTop = "150px";
                notif.style.textAlign = "center";

                backMenu.href = "/admin/books"
                backMenu.innerHTML = "Kembali ke daftar buku";
                backMenu.style.textAlign = "center";
                backMenu.style.marginLeft = "395px";

                table.parentElement.replaceChild(notif, table);
                notif.parentElement.appendChild(backMenu);

                return false;
            }

            return true;
        }
    </script>
@endsection
