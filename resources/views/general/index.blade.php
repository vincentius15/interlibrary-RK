@extends('layouts.master')

@section('title', 'InterLibrary')

@section('content')
    <div class="wrapper row2">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <h6 class="heading">Mulai membaca hari ini</h6>
                <form action="/books/search" method="post" style="margin-top: 2em">
                    {{csrf_field()}}
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-12">
                        <input type="text" required name="search" placeholder="Cari buku" style="padding: 10px; border:none; width: 90%; height: 3em; float:left; border-radius:5px;">
                        <button class="btn pull-left" type="submit" style="height: 3em; width: 4em;"><i class="fa fa-search"></i></button>
                    </div>
                    <div class="col-md-2">
                    </div>
                </form>
            </div>
            <h5>Buku Terbaru</h5>
            <div class="group latest" style="margin-top: 3em">
                <article class="one_third first">
                    <!-- ################################################################################################ -->
                    <img src="{{asset('img/demo/390x260.png')}}" alt="">
                    <div class="txtwrap">
                        <h6 class="heading">C++ For Dummies</h6>
                        <br>
                        <strong>Aditya Pratama</strong>
                        <p>232 halaman</p>
                        <footer><a href="#">Lihat selengkapnya</a></footer>
                    </div>
                    <!-- ################################################################################################ -->
                </article>
                <article class="one_third">
                    <!-- ################################################################################################ -->
                    <img src="{{asset('img/demo/390x260.png')}}" alt="">
                    <div class="txtwrap">
                        <h6 class="heading">RESTful Web APIs</h6>
                        <br>
                        <strong>Vincentius</strong>
                        <p>244 halaman</p>
                        <footer><a href="#">Lihat selengkapnya</a></footer>
                    </div>
                    <!-- ################################################################################################ -->
                </article>
                <article class="one_third">
                    <!-- ################################################################################################ -->
                    <img src="{{asset('img/demo/390x260.png')}}" alt="">
                    <div class="txtwrap">
                        <h6 class="heading">Cracking Coding Interview</h6>
                        <br>
                        <strong>Rogo Jagad Alit</strong>
                        <p>332 halaman</p>
                        <footer><a href="#">Lihat selengkapnya</a></footer>
                    </div>
                    <!-- ################################################################################################ -->
                </article>
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
          for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function(e) {
              e.target.setCustomValidity("");
              if (!e.target.validity.valid) {
                e.target.setCustomValidity("Isi kata kunci pencarian anda");
              }
            };
            elements[i].oninput = function(e) {
              e.target.setCustomValidity("");
            };
          }
        })
    </script>
@endsection
