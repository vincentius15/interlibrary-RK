@extends('layouts.master')

@section('title', 'InterLibrary | Register')

@section('additional-style')
    <style>
        .form-container {
            position: relative;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            padding: 0;
            padding-bottom: 2em;
            background-color: #ffffff;
        }

        .login-logout-menu {
            margin: 0;
            height: 3em ;
            margin-bottom: 1em;
            float: left;
            padding-top: 0.7em;
            text-align: center;
            background-color: #ffffff;
        }

        /* hide up/down arrows ("spinners") on input fields marked type="number" */
        .no-spinners {
            -moz-appearance:textfield;
        }

        .no-spinners::-webkit-outer-spin-button,
        .no-spinners::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <div class="wrapper row2">
        <section class="hoc container clear" style="padding-top: 50px;">
            <!-- ################################################################################################ -->
            <div class="sectiontitle" style="margin-bottom: 20px;">
                <h1 style="font-size: 35px;">InterLibrary</h1>
            </div>
            <div class="group latest form-container" style="width: 500px; margin-left: 240px;">
                <div class="row" style="max-width: 500px; margin: 0;">
                    <a href="/login" style="color: white"><div class="col-sm-6 login-logout-menu" style="background-color: #7f8c8d;">Masuk</div></a>
                    <a href="/register" style="color: black"><div class="col-sm-6 login-logout-menu">Daftar</div></a>
                </div>

                <form action="" style="margin-left: 60px; margin-right: 60px;" id="form-register" onsubmit="return cekKonfirmasiPassword();">
                    <p><strong>NRP</strong></p>
                    <input class="form-control no-spinners" style="width: 380px; height: 2.5em;" type="number" min="10000000000000" max="10000000000000" name="nrp" id="nrp" required placeholder="NRP"><br>
                    <p><strong>Nama</strong></p>
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="text" name="nama" id="nama" required placeholder="Nama"><br>
                    <p><strong>Jurusan</strong></p>
                    <select class="form-control" class="form-control" name="status" style="width: 380px; height: 2.5em;" required>
                        <option value="1">Informatika</option>
                        <option value="2">Sistem Informasi</option>
                        <option value="3">Dsb</option>
                    </select><br>


                    <p><strong>Tanggal lahir</strong></p>
                    <input class="form-control" type="date" name="date" style="width: 380px; height: 2.5em;" class="form-control form" required><br>

                    <p><strong>Alamat</strong></p>
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="text" name="alamat" id="alamat" required placeholder="Alamat"><br>
                    <p><strong>Nomor telepon</strong></p>
                    <input class="form-control no-spinners" style="width: 380px; height: 2.5em;" type="number" name="no-telepon" id="no-telepon" required placeholder="No. Telepon"><br>
                    <p><strong>Email</strong></p>
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="email" name="email" id="email" required placeholder="Email"><br>
                    <p><strong>Password</strong></p>
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="password" name="password" id="password" required placeholder="Password"><br>
                    <p><strong>Konfirmasi password</strong></p>
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="password" name="password-confirmation" id="password-confirmation" required placeholder="Konfirmasi Password"><br>
                    <input class="btn" type="submit" value="Daftar" style="width: 380px;">
                </form>

            </div>
            <!-- ################################################################################################ -->
            <div class="clear"></div>
        </section>
    </div>
@endsection

@section('additional-script')
    <script>
    function showErrorPopUp() {
        var passConf = document.getElementById('password-confirmation');
        alert('Konfirmasi salah');

    }

    function cekKonfirmasiPassword(input) {
        var password = document.getElementById('password').value;
        var passwordConf = document.getElementById('password-confirmation').value;;

        if (password !== passwordConf)
        {
            showErrorPopUp();
            return false;
        }

        return true;
    }

    document.addEventListener("DOMContentLoaded", function() {
      var elements = document.getElementsByTagName("input");
      for (var i = 0; i < elements.length; i++) {

        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Anda belum mengisi kolom ini");
            }

            if (!e.target.validity.typeMismatch && e.target.id === 'no-telepon') {
                e.target.setCustomValidity("Nomor telepon harus dalam angka");
            }

            if (!e.target.validity.typeMismatch && e.target.id === 'nrp') {
                e.target.setCustomValidity("NRP harus dalam angka");
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
