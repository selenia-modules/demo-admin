<?php

use Electro\Plugins\IlluminateDatabase\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{

  public function down ()
  {
    $schema = $this->db->schema ();
    $this->db->connection ()->transaction (function () use ($schema) {

      if ($schema->hasTable ('users'))
        $schema->drop ('articles');

    });
  }

  public function up ()
  {
    $schema = $this->db->schema ();
    $this->db->connection ()->transaction (function () use ($schema) {

      if (!$schema->hasTable ('users')) {
        $schema->create ('articles', function (Blueprint $table) {
          $table->increments ('id');
          $table->string ('title', 100);
          $table->date ('date');
          $table->dateTime ('creation_date');
          $table->text ('lead')->nullable ();
          $table->text ('text')->nullable ();
          $table->string ('source', 100)->nullable ();
          $table->string ('image', 100)->nullable ();
          $table->boolean ('published')->nullable ();
        });
      }

    });
  }

}
