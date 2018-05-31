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
                    <h2 class="btmspace--15 topspace-8 bold">Aturan Administrasi</h2>
                </div>

                {{--Member identity--}}
                <div class="group btmspace-20 loan-content">
                    {{--Book Column--}}


                    {{--Attribut Column--}}
                    <form action="" class="col-lg-12" style="margin: 0px auto; padding: 30px;">
                      <div class="atribut col-lg-6 row" style="margin-bottom: 20px;">


                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                          <p><strong>Aturan mahasiswa</strong></p><br>
                            Jangka waktu peminjaman buku/majalah (hari)
                            <input style="border-radius: 0px" type="text" name="date" placeholder="Jumlah hari"class="form-control form" value="5" required>

                        </div>

                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                            Jangka waktu peminjaman Tugas Akhir/tesis (hari)
                            <input style="border-radius: 0px" type="text" name="date" placeholder="Jumlah hari"class="form-control form" value="0" required>

                        </div>

                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                          Denda keterlambatan per hari (Rupiah)
                              <input style="border-radius: 0px;" type="text" name="date" placeholder="Dalam rupiah"class="form-control form" value="5000" required>
                        </div>


                      </div>
                      <div class="atribut col-lg-6 row" style="margin-bottom: 20px;">

                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                          <p><strong>Aturan dosen/karyawan</strong></p><br>
                            Jangka waktu peminjaman buku/majalah (hari)
                            <input style="border-radius: 0px" type="text" name="date" placeholder="Jumlah hari"class="form-control form" value="30" required>

                        </div>

                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                            Jangka waktu peminjaman Tugas Akhir/tesis (hari)
                            <input style="border-radius: 0px" type="text" name="date" placeholder="Jumlah hari"class="form-control form" value="5" required>

                        </div>

                        <div class="atribut col-lg-12" style="margin-bottom: 20px;">
                            Denda keterlambatan per hari (Rupiah)
                              <input style="border-radius: 0px;" type="text" name="date" placeholder="Dalam rupiah"class="form-control form" value="0" required>


                        </div>
                      </div>
                      <div class="atribut col-lg-12 row" style="margin-right: 60px; float: right;">
                          <input class="btn btn-green pull-right" type="submit" value="Simpan">

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
