<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_image', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
        });

        Schema::table('realisations', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images')->onDelete('set null');
        });

        Schema::table('prestations', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_image', function (Blueprint $table) {
            $table->dropForeign('category_image_image_id_foreign');
            $table->dropForeign('category_image_category_id_foreign');
        });

        Schema::table('realisations', function (Blueprint $table) {
            $table->dropForeign('realisations_image_id_foreign');
        });

        Schema::table('prestations', function (Blueprint $table) {
            $table->dropForeign('prestations_image_id_foreign');
        });
    }
}
