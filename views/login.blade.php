@extends("Layout.app")

@section('Title', 'ورود')

@section('content')

<form action="/login" method="post">
    <input type="hidden" name="action" value="login">
    
    نام کاربری: <input type="text" name="username" >
    <br>
    <br>
    رمز عبور: <input type="password" name="password">
    <br>
    <br>
    <button>ورود</button>
</form>

@endsection