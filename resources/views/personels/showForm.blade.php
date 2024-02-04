<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/file-upload.blade.php -->

<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Dosya Yükle</button>
</form>

</body>
</html>