<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\PasswordReset;

class CreatePasswordResetsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up (): void {
    Schema::create(PasswordReset::TABLE_NAME, function (Blueprint $table) {
      $table->string(PasswordReset::EMAIL)->index();
      $table->string(PasswordReset::TOKEN);
      $table->timestamp(PasswordReset::CREATED_AT)->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down (): void {
    Schema::dropIfExists(PasswordReset::TABLE_NAME);
  }
}
