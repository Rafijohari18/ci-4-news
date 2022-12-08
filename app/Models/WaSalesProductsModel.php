<?php

namespace App\Models;

use CodeIgniter\Model;

class WaSalesProductsModel extends Model
{
    protected $table      = 'wa_sales_products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['country', 'order_method_type', 'retailer_type', 'product_line', 'item_type','product', 'year', 'quarter', 'total_revenue', 'unit_sold'];
}