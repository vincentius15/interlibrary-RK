@extends('layouts.master')

@section('title', 'InterLibrary | Admin')

@section('content')
    <div class="wrapper row2">
        <section class="hoc container clear" style="padding-top: 50px;">
            <ul class="nospace group services">
                <li class="one_third first">
                  <a href="/admin/verify-member" class="infobox">
                    <article >
                        <h6 class="heading" style="text-align: center; margin-bottom: 0px">Kelola Calon Anggota Baru</h6>
                    </article>
                  </a>
                </li>
                <li class="one_third">
                  <a href="/admin/list-member">
                    <article class="infobox" style="height: 110px;padding-top: 43px;">
                        <h6 class="heading" style="text-align: center;">Kelola Anggota</h6>
                    </article>
                  </a>
                </li>
                <li class="one_third">
                  <a href="/admin/books">
                    <article class="infobox" style="height: 110px;padding-top: 43px;">
                        <h6 class="heading" style="text-align: center;">Kelola Buku</h6>
                    </article>
                  </a>
                </li>
                <div style="padding-left: 11em;">
                    <li class="one_third first" style="margin-right: 5em;">
                      <a href="/admin/loans-request">
                        <article class="infobox" style="width: 306px;">
                            <h6 class="heading" style="text-align: center; margin-bottom: 0px;">Kelola Permohonan Peminjaman</h6>
                        </article>
                      </a>
                    </li>
                    <li class="one_third">
                      <a href="/admin/manage-loans">
                        <article class="infobox" style="height: 110px;padding-top: 43px;">
                            <h6 class="heading" style="text-align: center;">Kelola Peminjaman</h6>
                        </article>
                      </a>
                    </li>
                </div>
            </ul>
            <div class="clear"></div>
        </section>
    </div>

@endsection
