<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableVente extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produit'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'statut_produit'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_produit'  => [
                'type'       => 'DATE',
            ],
            'montant'  => [
                'type'       => 'DOUBLE',
            ],
            'libelle_produit'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'animal'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type_produit'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description_produit'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nom_client'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'quantite_produit'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
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
        $this->forge->addKey('id_produit', true);
        $this->forge->createTable('produits', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('produits');
    }
}
