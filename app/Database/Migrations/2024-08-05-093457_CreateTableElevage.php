<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableAnimal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_elevage'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom_elevage'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_obtention'  => [
                'type'       => 'DATE',
            ],
            'quantite'  => [
                'type'       => 'double',
                'null'       => false,
            ],
            'qte_initial'  => [
                'type'       => 'double',
                'null'       => false,
            ],
            'description_elevage'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'type'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null' => true,
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
        
        $this->forge->addKey('id_elevage', true);
        $this->forge->addForeignKey('type', 'types', 'id_type', 'CASCADE', 'SET NULL');
        $this->forge->createTable('elevages', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('elevages');
    }
}
