<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableType extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_type'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom_type'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description_type'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],


            
            'created_at'=> [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'=> [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at'=> [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'created_by' => [
                'type' => 'INT',
                'null' => true,
                'after' => 'deleted_at',
            ],
            'updated_by' => [
                'type' => 'INT',
                'null' => true,
                'after' => 'created_by',
            ],
            'deleted_by' => [
                'type' => 'INT',
                'null' => true,
                'after' => 'created_by',
            ],
        ]);
        
        $this->forge->addKey('id_type', true);
        $this->forge->createTable('types', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('types');
    }
}
