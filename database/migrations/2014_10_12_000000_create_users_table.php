<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsersTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up (): void {
    Schema::create(User::TABLE_NAME, function (Blueprint $table) {
      $table->increments(User::ID);
      $table->string(User::NAME);
      $table->string(User::EMAIL)->unique();
      $table->string(User::PASSWORD);
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down (): void {
    Schema::dropIfExists(User::TABLE_NAME);
  }
}
