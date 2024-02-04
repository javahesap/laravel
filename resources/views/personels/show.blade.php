<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Personel Detayları</h1>
    
        <p><strong>ID:</strong> {{ $personel->id }}</p>
        <p><strong>Ad:</strong> {{ $personel->ad }}</p>
        <p><strong>Soyad:</strong> {{ $personel->soyad }}</p>
        <p><strong>Email:</strong> {{ $personel->email }}</p>
    
        {{-- Diğer personel detayları ekleyebilirsiniz --}}
    </div>
</body>
</html>