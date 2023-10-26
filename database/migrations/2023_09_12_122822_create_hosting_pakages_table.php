<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hosting_pakages', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('title');;
            $table->string('storage');
            $table->integer('bandwidth');
            $table->string('addon_domain');
            $table->string('sub_domain');
            $table->string('ftp_account');
            $table->string('transfer');
            $table->string('database');
            $table->string('email');
            $table->string('cpu_limit');
            $table->string('ram');
            $table->string('email_limit');
            $table->integer('cpanel');
            $table->integer('ssl');
            $table->integer('litespeed');
            $table->integer('cloudlinux');
            $table->integer('firewall');
            $table->integer('softaclus');
            $table->integer('instant');
            $table->integer('upgradation');
            $table->integer('backup');
            $table->integer('grantee');
            $table->integer('support');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hosting_pakages');
    }
};
