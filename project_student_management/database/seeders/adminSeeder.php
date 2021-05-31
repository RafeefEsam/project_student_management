<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Qs;
use Illuminate\Support\Str;
class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->delete();
        $this->createNewUsers();

    }
     protected function createNewUsers()
    {
        // $password = Hash::make('admin'); // Default user password

        $d = [

            [
                'username' => 'admin',
                'password' => 'admin',
            ],
        ];
        DB::table('admins')->insert($d);

}
}
