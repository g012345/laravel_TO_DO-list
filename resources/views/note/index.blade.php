<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin:300px 0 0 700px">
        <nav><H1>Список заметок</H1></nav>
        <div>   
            @foreach($reviews as $el)
            <div style="display:flex;">
                <div><a href="{{ route('edit', ['id' => $el->id]) }}">{{$el->name_info}}</a></div>
                <button style="margin:0px 0 0 100px">
                    <a href="{{ route('delete', ['id' => $el->id]) }}">Удалить</a>
                </button>
            </div>
                
            @endforeach


        </div>
        <a href="/notes/create" style="margin:00px 0 0 00px"><button>Добавить</button></a>
    </div>
</body>
</html>