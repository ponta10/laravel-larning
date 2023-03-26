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
                'title' => '縦もく',
                'detail' => '毎週水曜日にやっています',
                'status' => 2,
                'deadline' => '2023-01-25',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 2,
                'title' => '期末レポート',
                'detail' => '綾井先生の期末レポートです。1/17までです',
                'status' => 2,
                'deadline' => '2023-02-01',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 3,
                'title' => '期末発表',
                'detail' => '安藤先生の期末発表です。1/12までに資料提出です',
                'status' => 1,
                'deadline' => '2023-01-31',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 4,
                'title' => '定例mtg',
                'detail' => '毎週金曜12時からです',
                'status' => 1,
                'deadline' => '2023-01-27',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 5,
                'title' => 'Lwizのmtg',
                'detail' => '毎週木曜14時からです',
                'status' => 1,
                'deadline' => '2023-02-02',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'id' => 6,
                'title' => '横もく',
                'detail' => '1/29(日)14:00~です。',
                'status' => 1,
                'deadline' => '2023-01-29',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ];
        foreach ($params as $param) {
            DB::table('todos')->insert($param);
        }
    }
}
