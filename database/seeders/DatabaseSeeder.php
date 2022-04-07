<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userMichal = DB::table('users')->where('email', 'mruszkiewicz@gmail.com')->first();
        if ($userMichal === null) {
            DB::table('users')->insert([
                'id'=>1,
                'first_name' => 'Michal',
                'last_name' => 'Ruszkiewicz',
                'email' => 'mruszkiewicz@gmail.com',
                'password' => Hash::make('frse12345'),
            ]);
        }else{
            DB::table('users')
                ->where('email', 'mruszkiewicz@gmail.com')
                    ->update(['password' => Hash::make('frse12345')]);
        }
    }
}
