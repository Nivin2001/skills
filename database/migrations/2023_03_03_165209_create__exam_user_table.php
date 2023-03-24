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
        Schema::create('_exam_user', function (Blueprint $table) {
            $table->id();
            $table->float('score');
            $table->smallinteger('time_mins');
            $table->enum('status',['open','closed']);
            
            $table->foreignId('user_id')->constrained()
            ->onDelete('cascade')->onupdate('cascade');

            
            $table->foreignId('exam_id')->constrained()
            ->onDelete('cascade')->onupdate('cascade');
            $table->timestamps();
            // اليوزر ممكن يقدم اكتر من امتحان والامتحان يقدمه اكتر من يوزر ميشان هيك عملت كلاس وسيط بينهم
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_exam_user');
    }
};
