<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterWaSalesProducts extends Migration
{
    public function up()
    {
        $this->forge->addColumn('wa_sales_products', [
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);
    }

    public function down()
    {
        $this->forge->dropColumn('wa_sales_products', 'created_at');
    }
}
