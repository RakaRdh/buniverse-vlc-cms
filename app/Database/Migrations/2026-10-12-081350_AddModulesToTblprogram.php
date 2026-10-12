<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddModulesToTblprogram extends Migration
{
    public function up()
    {
        $fields = [
            'modules' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'default'    => 0,
                'null'       => true,
                'after'      => 'duration',
            ],
        ];
        $this->forge->addColumn('tblprogram', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('tblprogram', 'modules');
    }
}
