<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/personels/index.blade.php -->

<ul id="personels-list">
    {{-- Personel listesi AJAX ile buraya eklenecek --}}
</ul>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Sayfa yüklendiğinde personel listesini AJAX ile al
        $.ajax({
            url: '/personelss',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                var personels = response.personels;
                var personelsList = $('#personels-list');

                // Personel listesini ekrana ekle
                $.each(personels, function (index, personel) {
                    personelsList.append('<li>' + personel.ad + ' ' + personel.soyad + '</li>');
                });
            }
        });
    });
</script>

</body>
</html>