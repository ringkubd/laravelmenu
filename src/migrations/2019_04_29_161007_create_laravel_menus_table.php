<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaravelMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("menu");
            $table->string("method");
            $table->string("controller");
            $table->string("name")->nullable();
            $table->integer("parent")->nullable();
            $table->boolean("is_grand_child")->nullable();
            $table->string("permission_name");
            $table->boolean("active")->comment("1=>active, 0=>in-active");
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
        Schema::dropIfExists('laravel_menus');
    }
}
