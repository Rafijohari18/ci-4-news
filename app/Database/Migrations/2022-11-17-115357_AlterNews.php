<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterNews extends Migration
{
    public function up()
    {
        $this->forge->addcolumn('news', [
            'slug varchar(100) UNIQUE'
        ]);
    }

    public function down()
    {
        $this->forge->dropcolumn('news', 'slug');
    }
}
