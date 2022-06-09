@php
use Services\Auth\Auth;
@endphp

<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
</head> 
<body>
    

<div class="container">
    <ul class="nav">
    <li class="nav-item">
        <a class="nav-link" href="/">صفحه اصلی</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/about.php">درباره ما</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact.php">تماس با ما</a>
    </li>
    @php
    
        if ($userData = Auth::user()) {
            @endphp
    <li class="nav-item">
      {{$userData["username"]}}
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/logout.php">خروج</a>
    </li>
    @php
        } else {
            @endphp
            
    <li class="nav-item">
        <a class="nav-link" href="/login.php">ورود</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/register.php">ایجاد حساب</a>
    </li>
    @php
        }
        @endphp
    </ul>


<h1 class='h3'>پروژه تودولیست</h1>
<h2 class='h4'>عنوان صفحه:</h2>



<hr>


</div>

@yield('content')


<hr>



<h4>فوتر صفحه</h4>


</body>
</html>