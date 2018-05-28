@if(Request::is('login') OR Request::is('register'))
    <div class="wrapper row1">
        <header id="header" class="hoc clear" style="height: 60px;">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
                <h1><a href="/">InterLibrary</a></h1>
            </div>
            <!-- ################################################################################################ -->
        </header>
    </div>
@else
    <div class="wrapper row1">
        <header id="header" class="hoc clear" style="height: 60px;">
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
              @if(Auth::check())
                @if(Auth::user()->name == 'admin')
                  <h1><a href="/admin">InterLibrary</a></h1>
                @elseif(Auth::user()->email == 'pustakawan@mail.com')
                    <h1><a href="/pustakawan">InterLibrary</a></h1>
                @else
                  <h1><a href="/">InterLibrary</a></h1>
                @endif
              @else
                <h1><a href="/">InterLibrary</a></h1>
              @endif
            </div>
            <nav id="mainav" class="fl_right">
                @if(!Auth::check())
                    <ul class="clear">
                        <li class="link"><a href="/register">Daftar</a></li>
                        <li class="link"><a href="/login">Masuk</a></li>
                    </ul>
                @else
                    <ul class="clear">
                        @if(Auth::user()->name == 'admin' or Auth::user()->email == 'pustakawan@mail.com')
                            <li><p>Halo, {{ Auth::user()->name }}</p></li>
                        @else
                            <li><p>Halo, {{ Auth::user()->name }}</p></li>
                            <li class="link"><a href="/peminjaman-saya">Peminjaman saya</a></li>
                        @endif
                        <li class="link"><a href="/logout">Logout</a></li>
                    </ul>
                @endif
            </nav>
            <!-- ################################################################################################ -->
        </header>
    </div>

@endif
