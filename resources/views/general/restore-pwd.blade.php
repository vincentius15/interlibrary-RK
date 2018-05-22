@extends('layouts.master')

@section('title', 'InterLibrary')

@section('additional-style')
    <style>
        .form-container {
            position: relative;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            padding: 0;
            padding-bottom: 2em;
        }

        .login-logout-menu {
            margin: 0;
            height: 3em ;
            margin-bottom: 1em;
            float: left;
            padding-top: 0.7em;
            text-align: center;

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
            <div class="group latest form-container" style="width: 500px; margin-left: 240px; padding-top: 28px;">
                <div id="container">
                    <p style="text-align: center"><strong>Atur Ulang Password Anda</strong></p>
                    <form action="" style="margin-left: 60px;" onsubmit="changeContent()">
                        <p>Masukkan email yang anda gunakan untuk pendaftaran</p><br>
                        <input class="form-control" style="width: 380px; height: 2.5em;" id="email" type="email" name="password-akun" id="password-akun" required placeholder="Email"><br>

                        <input value="Atur Ulang Password Saya" class="btn" type="submit" style="width: 380px"/>
                    </form>
                </div>

                <p style="font-weight: bold; text-align: center" id="emailRestore"></p>
                <p style="text-align: center"><a href="/" id="backToHome"></a></p>
            </div>
            <!-- ################################################################################################ -->
            <div class="clear"></div>
        </section>
    </div>
@endsection

@section('additional-script')
    <script>
        function changeContent() {
            var container = document.getElementById('container');
            var emailRestore = document.getElementById('emailRestore');
            var backToHome = document.getElementById('backToHome');

            var userEmail = document.getElementById('email').value;
            var newContent = "<p style='text-align: center; padding-left: 60px; padding-right: 60px;'>" +
                "Kami telah mengirimkan link untuk mengatur ulang password anda ke</p><br>"

            emailRestore.innerHTML = userEmail;
            backToHome.innerHTML = 'Kembali ke halaman utama';
            container.innerHTML = newContent;
        }
    </script>
@endsection
