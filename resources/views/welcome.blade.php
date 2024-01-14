<!-- resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Hoşgeldiniz!</h1>
        <p>Laravel uygulamanızın ana sayfasına hoş geldiniz.</p>
    </div>
@endsection
<!-- resources/views/welcome.blade.php -->

<hr>
@component('components.component-name', ['title' => 'Merhaba', 'content' => 'Laravel Bileşenleri', 'type' => 'password'])
    <!-- İsteğe Bağlı İçerik -->
@endcomponent
