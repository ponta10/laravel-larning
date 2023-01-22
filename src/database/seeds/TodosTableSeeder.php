<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $params = [
            [
                'id' => 1,
                'title' => '期末テスト',
                'detail' => '山梨先生の期末テストです。1/23に行います'
            ],
            [
                'id' => 2,
                'title' => '期末レポート',
                'detail' => '綾井先生の期末レポートです。1/17までです'
            ],
            [
                'id' => 3,
                'title' => '期末発表',
                'detail' => '安藤先生の期末発表です。1/12までに資料提出です'
            ],
        ];
        foreach ($params as $param) {
            DB::table('todos')->insert($param);
        }
    }
}
