<?php

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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customerNumber');
            $table->foreignId('category_id');
            $table->string('customerName')->unique();
            $table->string('contactLastName');
            $table->string('contactFirstName');
            $table->string('phone');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('city');
            $table->string('state');
            $table->string('postalCode');
            $table->string('country');
            $table->string('country');
            $table->foreignId('salesRepEmployeeNumber')->constrained()->onDelete('cascade');
            $table->decimal('creditLimit', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
