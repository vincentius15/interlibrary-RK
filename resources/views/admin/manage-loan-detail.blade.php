@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('additional-style')
    <style type="text/css">
        .loan-content { background-color: white; border-radius: 0px;}
    </style>
@endsection

@section('content')
    <div class="wrapper row2">
        <main class="hoc container clear">
            <div class="content">
                {{--Page Title--}}
                <div class="auto first btmspace-15">
                    <h2 class="btmspace--15 topspace-8 bold">Peminjam : Aditya Pratama</h2>
                </div>

                {{--Member identity--}}
                <div class="group btmspace-20 loan-content">
                    {{--Book Column--}}
                    <div class="col-lg-7" style="padding: 30px; padding-right: 0px;">
                        <div class="row">
                            <div class="col-lg-4">
                              <img class="imglist" style="max-height: 200px; max-width: 175px;" src="{{asset('img/cover/c-programming.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-8">
                                <strong><p>Cracking The Coding Interview </p></strong>
                                <p>Rogo Jagad Alit</p>
                                <p>2015</p>
                            </div>
                        </div>
                    </div>

                    {{--Attribut Column--}}
                    <form action="" class="col-lg-5 row" style="margin: 0px auto; padding: 30px;">
                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                            <div class="col-lg-10">Status
                            <select style="border-radius: 0px;" class="form-control" name="status" required>
                                <option value="1">Menunggu Persetujuan</option>
                                <option value="2">Kadarluasa</option>
                                <option value="3">Menunggu Pengambilan</option>
                                <option value="4">Ditolak</option>
                                <option value="5" selected>Dalam Peminjaman</option>
                                <option value="6">Sudah Dikembalikan</option>
                            </select>
                            </div>
                        </div>

                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                            <div class="col-lg-10">Tanggal Berakhir peminjaman
                              <input style="border-radius: 0px;" type="date" name="date" class="form-control form" value="2018-06-18" required>
                            </div>

                        </div>

                        <div class="atribut col-lg-12 row" style="margin-bottom: 20px; float: right;">
                            <input class="btn btn-green" type="submit" value="Simpan">
                            <a data-toggle="modal" data-target="#kirim-sms" class="btn btn-yellow leftspace-10" href="#">Kirim SMS Notifikasi</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <div id="kirim-sms" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center">Apakah anda yakin ingin mengirim SMS notifikasi ke :</p><br>
                        <strong><p style="text-align: center">Nama</p></strong>
                    </div>
                    <div class="modal-footer">
                        <button data-toggle="modal" data-target="#kirim-sms-success" type="button" class="btn btn-green" data-dismiss="modal">Ya</button>
                        <button type="button" class="btn btn-red" data-dismiss="modal">Batal</button>
                    </div>
                </div>

            </div>
        </div>
        <div id="kirim-sms-success" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p style="text-align: center">SMS notifikasi berhasil dikirim</p><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-dismiss="modal">Tutup</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('additional-script')
    <script>
  var today = new Date().toISOString().split('T')[0];
   document.getElementsByName("date")[0].setAttribute('min', today);
    </script>
@endsection
