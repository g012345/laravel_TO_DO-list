<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main_area">
        <nav><H1>Создать заметку</H1></nav>
        <div>  
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
            <input class="selict_note" type="name_title" name="name_title" id="name_title" placeholder="Название заметки">
            <br>
            <input class="selict_note size_description" type="description_note" name="description_note" id="description_note" placeholder="Описание заметки">
            <p><button class="save_button" type="submit"><nav class="save_txt">Сохранить</nav></button></p>
        </form> 
        </div>   
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
        width:400px;
        background-color:#d9d9d9;
        padding: 10px;
        border-radius: 10px;
    }
    .name_note{
        color:black;
    }
    .save_button{
        margin-left: 15px;
        background-color:#4f82e9;
        padding:10px 50px 10px 50px;
        border-radius: 10px;
    }
    .save_txt{
        color:white;
    }
    .size_description{
        height:150px;
    }
</style>