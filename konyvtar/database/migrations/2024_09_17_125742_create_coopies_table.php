<?php
use App\Models\Coopies;
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
        Schema::create('coopies', function (Blueprint $table) {
                $table->id('coopy_id');
                $table->timestamps();
                $table->integer('book_id'); 
                $table->integer('user_id'); 

                $table->primary(['book_id']);
            });
    
            Coopies::create(['book_id' => 1, 
            'author' => 'George Orwell',
             'title' => '1ö984
            ]);  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coopies');
    }
};
