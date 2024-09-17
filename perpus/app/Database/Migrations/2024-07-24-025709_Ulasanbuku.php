<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UlasanID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
                // 'unsigned' => true,
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11,
                // 'unsigned' => true,
            ],
            'Ulasan' => [
                'type' => 'text',
            ],
            'Rating' => [
                'type' => 'INT',
                'constraint' => '11',
            ],

        ]);

        $this->forge->addPrimaryKey('UlasanID');
        $this->forge->createTable('ulasanbuku');
    }

    public function down()
    {
        //
    }
}
