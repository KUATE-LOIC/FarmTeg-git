<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_personnel'        => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nom_personnel'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'telephone_personnel'  => [
                'type'       => 'double',
                'null'       => false,
            ],
            'sexe_personnel'  => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'cni_personnel'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email_personnel'  => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'    => true,
            ],
            'mot_de_passe'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'role_personnel'  => [
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
        $this->forge->addKey('id_personnel', true);
        $this->forge->createTable('personnels', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('personnels');
    }
}
