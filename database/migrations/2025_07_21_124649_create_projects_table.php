<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')
                  ->constrained('services')
                  ->onDelete('cascade'); // لو اتحذفت الخدمة، المشاريع المرتبطة تتحذف تلقائيًا
            /* $table->foreignId('service_id')
            ->nullable()
            ->constrained('services')
            ->onDelete('set null'); */
            $table->string('title');
            $table->string('decription');
            $table->string('image');
            $table->text('timeline');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
