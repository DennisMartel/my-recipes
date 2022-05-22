<?php

use App\Models\Recipe;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->longText('preparation');
            $table->enum('status', [Recipe::BORRADOR, Recipe::PUBLICADO])->default(Recipe::BORRADOR);

            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('user_id');
            
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('recipes');
    }
};
