<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать заметку</title>
</head>
<body >
    <div class="main_area">
        <nav><H1>Редактировать заметку</H1></nav>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('update', ['id' => $review->id]) }}">
            @csrf
            @method('POST')
            <label for="name_title"></label>
            <input class="selict_note" type="text" name="name_title" value="{{ $review->name_info }}">
            <br>
            <label for="description_note"></label>
            <textarea class="selict_note" name="description_note">{{ $review->info }}</textarea>
            <p><button class="save_button" type="submit"><nav class="save_txt">Сохранить</nav></button></p>
            
        </form>
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
</style>