<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name' => '籔田行成',
            'name_kana' => 'やぶたゆきなり',
            'admin_code' => 'SystemMaster',
            'password' => bcrypt('SystemMaster'),
            'role_id' => '2'
        ]);
    }
}
