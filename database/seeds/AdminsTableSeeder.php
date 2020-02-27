<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Entities\Admin;

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
        Admin::create([
            'name' => 'システム管理者',
            'name_kana' => 'しすてむかんりしゃ',
            'admin_code' => 'SystemMaster',
            'password' => bcrypt('SystemMaster'),
            'role_id' => '1',
            'api_token' => Str::random(60),
        ]);

        //
        Admin::create([
            'name' => '管理者',
            'name_kana' => 'かんりしゃ',
            'admin_code' => 'AdminMaster',
            'password' => bcrypt('AdminMaster'),
            'role_id' => '2',
            'api_token' => Str::random(60),
        ]);

        //
        Admin::create([
            'name' => '編集者1',
            'name_kana' => 'へんしゅうしゃ１',
            'admin_code' => 'Editor_01',
            'password' => bcrypt('Editor_01'),
            'role_id' => '3',
            'api_token' => Str::random(60),
        ]);

    }
}
