<?php
use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->timestamps();
            $table->string('author', 32); 
            $table->string('title', 150); 
            $table->integer('pieces'); // Az integer nem vesz fel hosszúságot
            $table->primary(['book_id']);
        });

        Book::create(['book_id' => 1, 
        'author' => 'George Orwell',
         'title' => '1ö984',
          'pieces'=> 3390,
        ]);  

        Book::create(['book_id' => 2, 
        'author' => 'Gárdonyi Géza',
         'title' => 'Isten rabjai',
          'pieces'=> 2990,
        ]);  
        
        Book::create(['book_id' => 3, 
        'author' => 'Fekete István',
         'title' => 'Vuk',
          'pieces'=> 3390,
        ]);  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
   
    }
};
