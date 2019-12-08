<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->integer('level')->after('fee')->default(1);
            $table->integer('require_entry_test')->after('level')->default(0);
            $table->integer('require_basic_html')->after('require_entry_test')->default(0);
            $table->integer('require_css_html')->after('require_basic_html')->default(0);
            $table->integer('require_javascript_html')->after('require_css_html')->default(0);
            $table->string('image')->after('require_javascript_html')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->dropColumn('level');
            $table->dropColumn('require_entry_test');
            $table->dropColumn('require_basic_html');
            $table->dropColumn('require_css_html');
            $table->dropColumn('require_javascript_html');
        });
    }
}
