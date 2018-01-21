<?php

use think\migration\Seeder;
use Phinx\Seed\AbstractSeed;


class UserSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 10; $i++) { // faker 的使用
            $data[] = [
                'username'      => $faker->userName,
                'password'      => sha1($faker->password),
                'login_status' => sha1('foo'),
                'login_code'         => $faker->email,
                'last_login_ip'    => $faker->firstName,
                'last_login_time'     => date('Y-m-d H:i:s'),
                'is_delete'       => array_rand([0,1])
            ];
        }

        $this->insert('users', $data);

        /*
        $users = $this->table('users');
        // empty the table
        $users->truncate();
        */
    }
}