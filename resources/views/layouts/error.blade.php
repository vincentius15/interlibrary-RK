@if( count($errors) )
    <ul style="padding-left: 0;">
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    </ul>
@endif
