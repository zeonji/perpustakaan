<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
        // truncate record
        DB::table('transactions')->truncate();

        $transactions = [
            ['id' => 1, 'kode' => 'ANF-1', 'book_id' => 1, 'user_id' => 1, 'petugas' => 'Alfira', 'status' => 'Belum', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'kode' => 'ANF-2', 'book_id' => 2, 'user_id' => 1, 'petugas' => 'Alfira', 'status' => 'Belum', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'kode' => 'ANF-3', 'book_id' => 3, 'user_id' => 1, 'petugas' => 'Alfira', 'status' => 'Sudah', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'kode' => 'ANF-4', 'book_id' => 4, 'user_id' => 1, 'petugas' => 'Alfira', 'status' => 'Sudah', 'expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'kode' => 'ANF-5', 'book_id' => 5, 'user_id' => 1, 'petugas' => 'Alfira', 'status' => 'Hilang','expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'kode' => 'ANF-6', 'book_id' => 6, 'user_id' => 1, 'petugas' => 'Alfira', 'status' => 'Hilang','expired_at' => \Carbon\Carbon::now(), 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('transactions')->insert($transactions);
    }
}
