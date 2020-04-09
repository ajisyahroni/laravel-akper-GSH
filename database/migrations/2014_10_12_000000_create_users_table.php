<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            // ANOTHER DATA FIELD
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('telepon');
            $table->string('nama_ibu_kandung');
            $table->string('nama_ayah_kandung');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('foto_url');
            $table->string('ijazah_url');

            // ALAMAT FIELD
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->integer('kodepos');


            // STUDY FASE
            $table->string('pendidikan_terakhir');
            $table->float('rata_nem');

            // PRODY
            $table->integer('id_prodi_pilihan_1');
            $table->integer('id_prodi_pilihan_2')->nullable();
            $table->integer('id_prodi_pilihan_3')->nullable();
            $table->integer('id_prodi_pilihan_4')->nullable();

            // FOR STATUS
            $table->boolean('isCBT')->nullable();
            $table->date('hasActivated')->nullable();
            $table->date('hasTested')->nullable();
            $table->float('score')->nullable();
            $table->boolean('isPass')->nullable();


            // POSTGREE TIMESTAMP
            // $table->timestamps();

            // MY SQL TIMESTAMP
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

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
        Schema::dropIfExists('users');
    }
}
