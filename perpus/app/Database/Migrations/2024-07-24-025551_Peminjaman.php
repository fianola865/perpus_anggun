<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PeminjamanID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,

            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,

            ],
            'TanggalPeminjaman' => [
                'type' => 'date',

            ],
            // Tambahkan kolom lain sesuai kebutuhan
            'TanggalPengembalian' => [
                'type' => 'date',

            ],
            'StatusPeminjaman' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);

        $this->forge->addKey('PeminjamanID', true);
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        //
    }
}
