<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MerchantUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('com_name', 50);
            $table->string('business_num', 50);
            $table->string('com_rep_name', 50);
            $table->string('open_reg_num', 50);
            $table->string('postal_code', 20);
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('email', 30);
            $table->string('auth_num', 50);
            $table->string('password', 50);
            $table->string('bank_code', 20);
            $table->string('account_num', 10);
            $table->string('business_license_image', 1024)->nullable();
            $table->string('privacy_agree', 1);
            $table->rememberToken();
            $table->timestamps();

            $table->unique(['business_num', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
