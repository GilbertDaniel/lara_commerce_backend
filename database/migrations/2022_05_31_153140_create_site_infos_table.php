<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->text('about', 50000);
            $table->text('refund', 50000);
            $table->text('purchase_guide', 50000);
            $table->text('privacy', 50000);
            $table->text('address', 50000);
            $table->string('playstore_link');
            $table->string('appstore_link');
            $table->string('fb_link');
            $table->string('twitter_link');
            $table->string('instra_link');
            $table->string('copyright_text');
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
        Schema::dropIfExists('site_infos');
    }
}
