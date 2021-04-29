<?php

use App\Models\Vehicle;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();

            // Required
            $table->string('title');
            $table->float('bill_total');

            // Details
            $table->string('description')->nullable();
            $table->string('location')->nullable();
            $table->string('vendor')->nullable();

            // Payments
            $table->text('invoice_image_path')->nullable();
            $table->boolean('is_paid')->default(false);

            $table->timestamp('date')->useCurrent();
            $table->foreignIdFor(Vehicle::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
}
