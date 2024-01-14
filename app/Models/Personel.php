<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;


// Örnek kullanım
$personel = new Personel;
$personel->name = 'John';
$personel->surname = 'Doe';
$personel->email = 'john.doe@example.com';
$personel->phone = '555-1234';
$personel->save();



}
