<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (DB::getDriverName() === 'pgsql') {

            DB::statement('ALTER TABLE jobs ALTER COLUMN salary TYPE numeric(10,2) USING salary::numeric');

        } else {

            Schema::table('jobs', function (Blueprint $table) {
                $table->decimal('salary', 10, 2)->change();
            });
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('jobs', function (Blueprint $table) {
        //     $table->string('salary')->change();
        // });

        DB::statement('ALTER TABLE jobs ALTER COLUMN salary TYPE varchar');
    }
};
