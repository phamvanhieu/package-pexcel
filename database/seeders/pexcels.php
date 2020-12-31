<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class pexcels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6 ; $i++) { 
            DB::table('pexcels')->insert([
                'user_id' => $i,
                'user_email' => 'admin'.$i.'@admin.com',
                'user_full_name' => 'Lê Super Admin '.$i,
                'category_id' => 1 + $i,
                'pexcel_name' => 'Bài '.$i.': Giới thiệu Laravel '.($i - 1),
                'pexcel_overview' => $i.'sdfg sdfg ssdfg sdfg ssdfg sdfg s',
                'pexcel_description' => $i.'<p>sdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg ssdfg sdfg s</p>',
                'pexcel_slug' => 'Bai-'.$i.'-Gioi-thieu-Laravel',
                'pexcel_image' => '/photos/9999'.$i.'/test/5ab1cee1a4aa4.jpeg',
                'pexcel_files' => '["\/files\/'.$i.'\/asdf\/5ab3285de870c.pdf"]',
                'pexcel_status' => 99,
            ]);
        }
    }
}
