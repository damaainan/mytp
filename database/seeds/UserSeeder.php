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
        $faker = Faker\Factory::create('zh_CN');
        $data = [];
        for ($i = 0; $i < 10; $i++) { // faker 的使用
            $ip = $faker->ipv4;
            $ipnum = sprintf('%u',ip2long($ip));
            $data[] = [
                'username'      => $faker->name,
                'password'      => md5($faker->password),
                'login_status' => array_rand([0,1]),
                'login_code'         => md5($faker->email),
                'last_login_ip'    => $ipnum,
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