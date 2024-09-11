<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableMouvement extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_mouvement'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'type_mouvement'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nom_mouvement'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type_produit'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'qte_mouvement'  => [
                'type'       => 'double',
                'null'       => false,
            ],
            'description_mouvement'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'unite_mouvement'  => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'date_mouvement'  => [
                'type'       => 'DATE',
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
        $this->forge->addKey('id_mouvement', true);
        $this->forge->createTable('mouvements', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('mouvements');
    }
}
