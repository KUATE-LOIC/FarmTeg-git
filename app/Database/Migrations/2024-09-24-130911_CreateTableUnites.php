<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUnites extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_unite'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'libelle_unite'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            'prix_unitaire'  => [
                'type'       => 'DOUBLE'
            ],

            'produit'   => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ]
        ]);

        $this->forge->addKey('id_unite', true);
        $this->forge->addForeignKey('produit', 'produits', 'id_produit', 'CASCADE', 'SET NULL');
    }

    public function down()
    {
        //
    }
}
