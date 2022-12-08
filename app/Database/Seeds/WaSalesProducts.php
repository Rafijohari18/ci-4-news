<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WaSalesProducts extends Seeder
{
    public function run()
    {
        $wa_sales_data = [
			[
				'country' => 'United States',
				'order_method_type'  => 'Fax',
				'retailer_type' => 'Outdoors Shop',
                'product_line'  => 'Camping',
                'item_type'  => 'Cooking',
                'product'  => 'Trailchef',
                'year'  => '2022',
                'quarter'  => 'Q1 2022',
                'total_revenue'  => '59628.66',
                'unit_sold'  => '489',
			],
            [
				'country' => 'United States',
				'order_method_type'  => 'Fax',
				'retailer_type' => 'Outdoors Shop',
                'product_line'  => 'Camping',
                'item_type'  => 'Cooking',
                'product'  => 'Trailchef',
                'year'  => '2022',
                'quarter'  => 'Q1 2022',
                'total_revenue'  => '59628.66',
                'unit_sold'  => '489',
			],
		];

		foreach($wa_sales_data as $data){
			// insert semua data ke tabel
			$this->db->table('wa_sales_products')->insert($data);
		}
    }
}
