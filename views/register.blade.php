@extends("Layout.app")

@section('Title', 'ایجاد حساب')

@section('content')

<form action="/userregister" method="post">
    <input type="hidden" name="action" value="register">
    
    نام: <input type="text" name="name" >
    <br>
    <br>
    نام کاربری: <input type="text" name="username" >
    <br>
    <br>
    رمز عبور: <input type="password" name="password">
    <br>
    <br>
    تگرار رمز عبور: <input type="password" name="password_repeat">
    <br>
    <br>
    <button>ایجاد حساب</button>
</form>

@endsection