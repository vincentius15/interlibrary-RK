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

            <div class="content">
                <div class="auto first">
                    <h2 class="bold">Daftar Anggota</h2>
                </div>
                <div class="add-new btmspace-15">
                    <form action="" method="get" onsubmit="return cekData();">

                        <input type="text" required id="nama" name="search" placeholder="Cari anggota" style="padding: 10px; border:none; width: 200px; height: 3em; float:left; border-radius:5px;">
                        <button class="btn" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>

                    </form>
                </div>
                <div class="add-new btmspace-15">
                  <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Urutkan berdasar
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Nama</a>
                      <a class="dropdown-item" href="#">Jurusan</a>
                      <a class="dropdown-item" href="#">NRP</a>
                    </div>
                  </div>
                </div>

                <table id="data-user" class="table table-hover">
                    <thead>
                    <tr>
                        <th style="text-align: center">NRP</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Jurusan</th>
                        <th style="text-align: center">Alamat</th>
                        <th style="text-align: center">No. Telepon</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td style="text-align: center;padding-top: 18px;">{{$user->nrp}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->name}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->jurusan}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->alamat}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->no_telp}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->email}}</td>
                            <td style="text-align: center"><a href="/admin/edit-member" class="btn btn-yellow">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </main>
    </div>
@endsection

@section('additional-script')
    <script>
        function cekData() {
            var name = document.getElementById('nama').value;

            if (name !== 'user')
            {
                var table = document.getElementById('data-user');
                var notif = document.createElement("h3");
                var backMenu = document.createElement("a");

                notif.innerHTML = "Anggota <strong>" + name + "</strong> tidak ditemukan";
                notif.style.paddingTop = "150px";
                notif.style.textAlign = "center";

                backMenu.href = "/admin/list-member"
                backMenu.innerHTML = "Kembali ke daftar anggota";
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
