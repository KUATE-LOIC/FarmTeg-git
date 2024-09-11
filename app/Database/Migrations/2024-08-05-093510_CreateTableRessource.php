<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAliment extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ressource'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'libelle_ressource'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type_ressource'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'cout_ressource'  => [
                'type'       => 'DOUBLE',
            ],
            'description_ressource'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'quantite_ressources'  => [
                'type'       => 'DOUBLE'
            ],
            'unite_ressource'  => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'date_obtention'  => [
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
        
        $this->forge->addKey('id_ressource', true);
        $this->forge->createTable('ressources', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('ressources');
    }
}
