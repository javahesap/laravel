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
        <h1>Personel Listesi</h1>
    
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Email</th>
                    {{-- Diğer sütunlar eklenebilir --}}
                </tr>
            </thead>
            <tbody>
                @foreach($personels as $personel)
                    <tr>
                        <td>{{ $personel->id }}</td>
                        <td>{{ $personel->ad }}</td>
                        <td>{{ $personel->soyad }}</td>
                        <td>{{ $personel->email }}</td>
                        {{-- Diğer sütunlara göre aynı yapıyı kullanabilirsiniz --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>