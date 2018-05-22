@extends('layouts.master')

@section('title', 'InterLibrary | Login')

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
                    <a href="/login" style="color: black"><div class="col-sm-6 login-logout-menu">Masuk</div></a>
                    <a href="/register" style="color: white"><div class="col-sm-6 login-logout-menu" style="background-color: gray;">Daftar</div></a>
                </div>

                <form action="/login" method="post" style="margin-left: 60px;">
                    {{csrf_field()}}
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="email" name="email" id="email" required placeholder="Email"><br>
                    <input class="form-control" style="width: 380px; height: 2.5em;" type="password" name="password" id="password" required placeholder="Password"><br>
                    @include('layouts.error')
                    <a href="/restore-pwd" style="margin-top: 0"><p>Lupa password anda?</p></a>
                    <input class="btn" type="submit" value="Masuk" style="width: 380px">
                </form>
            </div>
            <!-- ################################################################################################ -->
            <div class="clear"></div>
        </section>
    </div>
@endsection

@section('additional-script')
    <script>

    document.addEventListener("DOMContentLoaded", function() {
      var elements = document.getElementsByTagName("input");
      var password = [];

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
