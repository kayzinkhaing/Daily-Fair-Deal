<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('product_orders', function (Blueprint $table) {
        $table->text('remark')->nullable()->after('status_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('product_orders', function (Blueprint $table) {
            $table->dropColumn('remark');
        });
    }
};
