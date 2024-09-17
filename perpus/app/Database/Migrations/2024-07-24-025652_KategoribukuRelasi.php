<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoribukuRelasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriBukuID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'KatgeoriID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],

        ]);

        $this->forge->addKey('KategoriBukuID', true);
        $this->forge->createTable('Kategoribuku_relasi');
    }

    public function down()
    {
        //
    }
}
