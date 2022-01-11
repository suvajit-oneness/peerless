<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFieldParentRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_parent_relations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id');
            $table->bigInteger('child_id');
            $table->softDeletes();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });

        $totalFieldsCount = DB::table('fields')->count();

        $data = [];
        array_push($data, ['parent_id' => 6, 'child_id' => 1]);
        // id of borrower, co-borrower 1, co-borrower 2, guarantor, witness1, witness2
        for ($i = 1; $i <= 7; $i++) {
            // borrower details
            for ($j = 2; $j <= 14 ; $j++) {
                if ($i == 1) array_push($data, ['parent_id' => $i, 'child_id' => $j]);
            }
            // co-borrower 1 details
            for ($j = 15; $j <= 29 ; $j++) {
                if ($i == 2) array_push($data, ['parent_id' => $i, 'child_id' => $j]);
            }
            // guarantor details
            for ($j = 30; $j <= 44 ; $j++) {
                if ($i == 3) array_push($data, ['parent_id' => $i, 'child_id' => $j]);
            }
            // witness 1 details
            for ($j = 45; $j <= 49 ; $j++) {
                if ($i == 4) array_push($data, ['parent_id' => $i, 'child_id' => $j]);
            }
            // witness 2 details
            for ($j = 50; $j <= 54 ; $j++) {
                if ($i == 5) array_push($data, ['parent_id' => $i, 'child_id' => $j]);
            }
            // Other details
            for ($j = 55; $j <= 127 ; $j++) {
                if ($i == 6) {
                    array_push($data, ['parent_id' => $i, 'child_id' => $j]);
                }
            }
            // co-borrower 2 details
            for ($j = 128; $j <= $totalFieldsCount ; $j++) {
                if ($i == 7) array_push($data, ['parent_id' => $i, 'child_id' => $j]);
            }
        }

        DB::table('field_parent_relations')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_parent_relations');
    }
}
