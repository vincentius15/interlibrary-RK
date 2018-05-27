@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('content')
    <div class="wrapper row2">
        <section class="hoc container clear" style="padding-top: 50px;">
            <ul class="nospace group services">
                <li class="one_third first">
                  <a href="/admin/books" class="infobox">
                    <article >
                        <h6 class="heading" style="text-align: center; margin-bottom: 0px">Kelola Buku</h6>
                    </article>
                  </a>
                </li>
                <li class="one_third">
                  <a href="/pustakawan/loans-request">
                    <article class="infobox" style="height: 110px;padding-top: 43px;">
                        <h6 class="heading" style="text-align: center;">Kelola Permohonan Peminjaman</h6>
                    </article>
                  </a>
                </li>
                <li class="one_third">
                  <a href="/pustakawan/manage-loans">
                    <article class="infobox" style="height: 110px;padding-top: 43px;">
                        <h6 class="heading" style="text-align: center;">Kelola Peminjaman</h6>
                    </article>
                  </a>
                </li>
            </ul>
            <div class="clear"></div>
        </section>
    </div>

@endsection
