<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WaSalesProducts extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'country'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'order_method_type'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'retailer_type'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'product_line'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'item_type'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'product'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'year'  => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
            'quarter'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
            'total_revenue'  => [
				'type'           => 'INT',
				'constraint'     => 20,
			],
            'unit_sold'  => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('wa_sales_products', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('wa_sales_products');

    }
}
