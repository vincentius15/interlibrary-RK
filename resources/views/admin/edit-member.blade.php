@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('additional-style')
    <style type="text/css">
        .member-content { background-color: white; border-radius: 0px;}
    </style>
@endsection

@section('content')
    <div class="wrapper row2">
        <main class="hoc container clear">
            <div class="content">
                {{--Page Title--}}
                <div class="auto first btmspace-15">
                    <h2 class="btmspace--15 topspace-8 bold">Edit Anggota</h2>
                </div>

                {{--Member identity--}}
                <div class="group btmspace-20 member-content">
                    {{--Photo Column--}}
                    <div class="col-lg-3 picture" style="margin: 30px 0 0 20px; padding: 0px;">
                        <div class="col-lg-4">
                          <img class="imglist" style="max-height: 200px; max-width: 175px;" src="{{asset('img/demo/profile.jpg')}}" alt="">
                          <button type="button" class="btn btn-yellow btn-sm">
                              <span class="glyphicon glyphicon-edit"></span>
                          </button>
                        </div>
                    </div>

                    {{--Text Column--}}
                    <form style="margin-top: 30px; padding: 0px;" action="">
                        <div class="col-lg-5">
                            <p><strong>NRP</strong></p>
                            <input class="form-control" type="text" name="nrp" id="nrp" required placeholder="NRP" value="5115100001"><br>
                            <p><strong>Nama</strong></p>
                            <input class="form-control" type="text" name="nama" id="nama" required placeholder="Nama" value="user"><br>
                            <p><strong>Jurusan</strong></p>
                            <select class="form-control" name="status" required>
                                <option value="1">Informatika</option>
                                <option value="2">Sistem Informasi</option>
                                <option value="3">Dsb</option>
                            </select><br>
                            <p><strong>Tanggal lahir</strong></p>
                            <input type="date" name="date" class="form-control form" value="1997-10-10" required><br>
                            <p><strong>Alamat</strong></p>
                            <input class="form-control" type="text" name="alamat" id="alamat" required placeholder="Alamat" value="Keputih Perintis I"><br>
                            <p><strong>Nomor telepon</strong></p>
                            <input class="form-control" type="text" name="no-telepon" id="no-telepon" required placeholder="No. Telepon" value="1231"><br>
                            <p><strong>Email</strong></p>
                            <input class="form-control" type="email" name="email" id="email" required placeholder="Email" value="user@mail.com"><br>
                          </div>
                            <div class="col-lg-3 row" style="margin: 30px 0 0 30px;">
                                <a class="btn btn-green" type="submit" value="Simpan" href="/admin/list-member">Simpan</a>
                                <a class="btn btn-red leftspace-10" data-toggle="modal" data-target="#batal">Batal</a>
                            </div>

                            </form>

                        </div>


            </div>
        </main>
        <div id="batal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center"><strong>Apakah anda yakin ingin membatalkan perubahan?</strong></p><br>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-red" href="/admin/list-member">Batalkan</a>
                        <button type="button" class="btn btn-green" data-dismiss="modal">Kembali</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('additional-script')
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      var elements = document.getElementsByTagName("input");
        for (var i = 0; i < elements.length; i++) {
          elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
              e.target.setCustomValidity("Anda belum mengisi kolom ini");
            }
          };
          elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
          };
        }
    })

  var today = new Date().toISOString().split('T')[0];
   document.getElementsByName("date")[0].setAttribute('max', today);
    </script>
@endsection
