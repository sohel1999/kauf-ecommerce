<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique()->comment('slug must be hyphen');
            $table->text('description')->nullable();
            $table->boolean('is_menu')->default(0);
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);
            $table->unsignedBigInteger('parent_id')->default(0)->nullable();
            $table->text('image')->nullable();
            $table->text('icon')->nullable();
            $table->string('menu_color')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
