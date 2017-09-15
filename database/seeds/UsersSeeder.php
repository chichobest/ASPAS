<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        factory(User::class)->create([
            'name'      => 'Isidro',
            'email'     => 'chichobest@gmail.com',
            'password'  => bcrypt("mandela82")
        ]);

        factory(User::class, 4)->create();
    }
}
