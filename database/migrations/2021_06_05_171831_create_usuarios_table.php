<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nome_user");
            $table->string("email_user");
            $table->string("cpf_user");
            $table->string("telefone_user");
            $table->string("rg_user");
            $table->string("login_user");
            $table->string("senha_user");
            $table->integer("cargo")->default(0);
            $table->string("token");
            $table->boolean("activated");
            $table->timestamp("deleted_at");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
