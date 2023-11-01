<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main_area">
        <nav><H1>Список заметок</H1></nav>
        <div>   
            @foreach($reviews as $el)
            <div class="selict_note" style="display:flex;">
                <div><a class="name_note" href="{{ route('edit', ['id' => $el->id]) }}">{{$el->name_info}}</a></div>
                <button class="dell_button">
                    <a style="color:white" href="{{ route('delete', ['id' => $el->id]) }}">Удалить</a>
                </button>
            </div>        
            @endforeach
        </div>
        <button class="create_button"><a class="create_txt" href="/notes/create">Добавить</a></button>
    </div>
</body>
</html>
<!--я не смог найти способ грамотного подключения css-->
<style>
    H1{
        margin:0 0 0 150px;
    }
    .main_area{
        margin-top:300px;
        width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
    .dell_button{
        margin:0px 0 0 auto;
        background-color:#cf2526;
        border-radius: 10px;
    }
    a{
	    text-decoration:none; 
        outline:none;
    }
    button,
    button:active,
    button:focus  {
        border:none;
    }
    a:hover{
        text-decoration: none;
    }
    .selict_note{
        margin:15px;
        background-color:#d9d9d9;
        padding: 10px;
        border-radius: 10px;
    }
    .name_note{
        color:black;
    }
    .create_button{
        margin-left: 15px;
        background-color:#4f82e9;
        padding:10px 50px 10px 50px;
        border-radius: 10px;
    }
    .create_txt{
        color:white;
    }
</style>