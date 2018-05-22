@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('additional-style')
    <style type="text/css">
        .book-content { background-color: white; border-radius: 0px;}
    </style>
@endsection

@section('content')
    <div class="wrapper row2">
        <main class="hoc container clear">
            <div class="content">
                {{--Page Title--}}
                <div class="auto first btmspace-15">
                    <h2 class="btmspace--15 topspace-8 bold">Tambah buku baru</h2>
                </div>

                {{--Member identity--}}
                <div class="group btmspace-20 book-content">
                  <div class="col-lg-3 picture" style="margin: 30px 0 0 20px; padding: 0px;">
                      <div class="col-lg-4">
                        <img class="imglist" style="max-height: 200px; max-width: 175px;" src="{{asset('img/cover/book-default.png')}}" alt="">
                        <button type="button" class="btn btn-yellow btn-sm">
                            <span class="glyphicon glyphicon-edit"></span>
                        </button>
                      </div>
                  </div>

                    {{--Text Column--}}
                    <form class="col-lg-8" action="" method="post">
                        <div class="col-lg-8" style="margin: 30px auto; padding: 0px;">
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>Judul Buku</strong>
                                </div>
                                <input class="form-control" style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="judul-buku" id="judul-buku" required placeholder="Judul Buku">
                            </div> <br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>Pengarang</strong>
                                </div>
                                <input class="form-control"style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="pengarang" id="pengarang" required placeholder="Pengarang">
                            </div><br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>Kode Buku</strong>
                                </div>
                                <input class="form-control" style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="kode-buku" id="kode-buku" required placeholder="Kode Buku">
                            </div> <br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>ISBN</strong>
                                </div>
                                <input class="form-control" style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="isbn" id="isbn" required placeholder="ISBN">
                            </div> <br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>Tahun Terbit</strong>
                                </div>
                                <input class="form-control" style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="tahun-terbit" id="tahun-terbit" required placeholder="Tahun Terbit">
                            </div> <br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>Penerbit</strong>
                                </div>
                                <input class="form-control" style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="penerbit" id="penerbit" required placeholder="Penerbit">
                            </div> <br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                                <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                                    <strong>Edisi</strong>
                                </div>
                                <input class="form-control" style="width: 275px; height: 2.5em; float: left; margin:0px; border-radius:0px;" type="text" name="edisi" id="edisi" required placeholder="Edisi-ke">
                            </div> <br>
                            <br>
                            <div class="group" style="padding: 0px; margin: 0px;">
                            <div style="float: left; background-color: #7f8c8d; color: white; margin: 0px; padding: 5px; padding-left: 10px; height: 35px; width: 105px;">
                              <strong>Sinopsis</strong>
                            </div>
                            <textarea class="form-control" style="width:380px; border-radius:0px;"rows="7" cols="50" name="sinopsis" id="sinopsis" placeholder="Sinopsis">
                            </textarea>
                            </div>
                        </div>

                        <div class="col-lg-4 row" style="margin: 30px auto;">
                            <input class="btn btn-green" type="submit" value="Simpan">
                            <button type="button" class="btn btn-red leftspace-10" data-toggle="modal" data-target="#resetConfirm">Reset</button>
                            <br> <br>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <div id="resetConfirm" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center">Anda akan mengulang pengisian form data buku:</p><br>
                        <strong><p style="text-align: center">Cracking the Coding Interview</p></strong>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-red" data-dismiss="modal" onclick="resetForm()">Iya, kosongkan</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('additional-script')
    <script>
        function resetForm() {
            document.getElementById('judul-buku').value = "";
            document.getElementById('pengarang').value = "";
            document.getElementById('kode-buku').value = "";
            document.getElementById('isbn').value = "";
            document.getElementById('tahun-terbit').value = "";
            document.getElementById('penerbit').value = "";
            document.getElementById('edisi').value = "";
            document.getElementById('sinopsis').value = "";
        }
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
    </script>
@endsection
