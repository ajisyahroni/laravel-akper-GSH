<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            // POSTGREE TIMESTAMP
            // $table->timestamps();

            // if (env('DB_CONNECTION', 'mysql')) {
            //     // MY SQL TIMESTAMP
            //     $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            //     $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            // } else {
            //     // POSTGREE TIMESTAMP
            //     $table->timestamps();
            // }
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
