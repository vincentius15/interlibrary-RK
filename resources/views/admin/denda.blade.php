@extends('layouts.master')

@section('title', 'Interlibrary | Admin')

@section('content')
    <div class="wrapper row2">
        <main class="hoc container clear">

            <div class="content">
                <div class="auto first">
                    <h2 class="bold">Daftar Denda</h2>
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
                        <th style="text-align: center">Nama Peminjam</th>
                        <th style="text-align: center">Jurusan Peminjam</th>
                        <th style="text-align: center">No. Telepon</th>
                        <th style="text-align: center">Email</th>
                        <th style="text-align: center">Judul Buku</th>
                        <th style="text-align: center">Lokasi Asli Buku</th>
                        <th style="text-align: center">Denda</th>
                        <th style="text-align: center"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($peminjamans as $user)
                        <tr>
                            <td style="text-align: center;padding-top: 18px;">{{$user->nrp}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->username}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->userjurusan}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->userno_telp}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->useremail}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->name}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->jurusan}}</td>
                            <td style="text-align: center;padding-top: 18px;">{{$user->denda}}</td>
                            <td style="text-align: center"><a  class="btn btn-red" data-toggle="modal" data-target="#lunasconfirm">Bayar Denda</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </main>
    </div>

    <div id="lunasconfirm" class="modal fade" role="dialog" style="color: black;">
        <div class="modal-dialog">
            <div class="modal-content">
                
            <div class="modal-header">
                <label>Bayar Denda</label>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('admin/denda')}}">
                    {{csrf_field()}}
                    <div class="input-group" style="margin:1em;">
                        <label>Bayar Sebanyak: (minimal 1000)</label>
                        <input type="hidden" name="id" value="">
                        <input type="number" name="bayar" min="1000">
                    </div>
                    <div>
                        <button class="btn" data-dismiss="modal"> Kembali</button>
                        <button class="btn btn-red" type="submit">Bayar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
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

                backMenu.href = "/admin/denda"
                backMenu.innerHTML = "Kembali ke Denda";
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
