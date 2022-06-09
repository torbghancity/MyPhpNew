@extends("Layout.app")

@section('pageTitle', 'تماس با ما')

@section('content')

<form action="/contact.php" method="post">
        <input type="hidden" name="action" value="insert">
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <br>
        <input type="text" name="sender" >
        <br>
        <button type="submit">ارسال</button>
    </form>
    
<table border="1" width="100%">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @while($row = mysqli_fetch_assoc($messages))
            <tr>
                <td>{{$row["sender"]}}</td>
                <td>{{$row["text"]}}</td>
            </tr>
        @endwhile    
    </tbody>
</table>

@endsection