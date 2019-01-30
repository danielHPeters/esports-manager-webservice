<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Country;

class CreateCountriesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up (): void {
    Schema::create(Country::TABLE_NAME, function (Blueprint $table) {
      $table->increments(Country::ID);
      $table->string(Country::ISO_CODE);
      $table->string(Country::NAME);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down (): void {
    Schema::dropIfExists(Country::TABLE_NAME);
  }
}
