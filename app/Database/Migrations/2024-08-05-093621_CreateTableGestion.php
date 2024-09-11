<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePoste extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gestion'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'elevage'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'personnel'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'ressource'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'produit'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'mouvement'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
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
        $this->forge->addKey('id_gestion', true);
        $this->forge->addForeignKey('elevage', 'elevages', 'id_elevage', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('personnel', 'personnels', 'id_personnel', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('ressource', 'ressources', 'id_ressource', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('produit', 'produits', 'id_produit', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('mouvement', 'mouvements', 'id_mouvement', 'CASCADE', 'SET NULL');
        $this->forge->createTable('gestions', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('gestions');
    }
}
