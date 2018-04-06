<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos(descricao,quantidade,valor,data_vencimento)values(?,?,?,?)',array('Arroz',10,10.50,'2018-12-01'));
        DB::insert('insert into produtos(descricao,quantidade,valor,data_vencimento)values(?,?,?,?)',array('Feijão',8,8.00,'2018-08-24'));
        DB::insert('insert into produtos(descricao,quantidade,valor,data_vencimento)values(?,?,?,?)',array('Óleo',25,7.00,'2018-09-21'));
        DB::insert('insert into produtos(descricao,quantidade,valor,data_vencimento)values(?,?,?,?)',array('Farinha',20,9.62,'2018-06-14'));


    }
}
