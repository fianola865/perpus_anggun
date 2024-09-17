<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            // Tambahkan kolom lain sesuai kebutuhan
            'NamaLengkap' => [
               'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Alamat' => [
                'type' => 'text',
            ],
        ]);

        $this->forge->addKey('UserID', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        //
    }
}
