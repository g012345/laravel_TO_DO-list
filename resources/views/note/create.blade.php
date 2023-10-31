<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin:300px 0 0 700px">
        <nav><H1>Создать заметку</H1></nav>
        <div style="display:block;">  
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="/notes/create/check">
            @csrf
            <input type="name_title" name="name_title" id="name_title" placeholder="Название заметки">
            <input type="description_note" name="description_note" id="description_note" placeholder="Описание заметки">
            <div style="display:flex;">
                <div><button type="submit">сохранить</button></div>
            </div>
        </form> 
        </div>   
    </div>
</body>
</html>