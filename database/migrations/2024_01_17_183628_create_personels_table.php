<?php

// database/migrations/xxxx_xx_xx_create_personels_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonelsTable extends Migration
{
    public function up()
    {
        Schema::create('personels', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->string('email')->unique();
            // Diğer sütunları ekleyebilirsiniz
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personels');
    }
}
