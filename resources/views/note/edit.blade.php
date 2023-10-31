<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать заметку</title>
</head>
<body>
    <div style="margin:300px 0 0 700px">
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
            <label for="name_title">Название:</label>
            <input type="text" name="name_title" value="{{ $review->name_info }}">
            <br>
            <label for="description_note">Содержимое:</label>
            <textarea name="description_note">{{ $review->info }}</textarea>
            <button type="submit">Сохранить</button>
        </form>
    </div>
</body>
</html>
