<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;



    function sqlfoction(){
    $personels = DB::select('SELECT * FROM personels ');
    return     $personels ;
   }

   
    


}
