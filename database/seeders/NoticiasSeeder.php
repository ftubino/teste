<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        DB::table('noticias')->insert([
            'datahora' => now(),
            'titulo' => 'Título da notícia numero 1',
            'resumo' => 'Este é o resumo da notícia número 1',
            'imagem' => 'img/0001.jpg',
            'texto' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod imperdiet leo. Aliquam id erat a est molestie ultrices quis sit amet dui. Suspendisse sollicitudin, turpis ac finibus mollis, leo dui aliquet diam, vel porttitor odio eros interdum sem. Nulla sit amet ante feugiat, viverra lectus at, consectetur magna. Ut elementum elit dui, sit amet eleifend ex feugiat gravida. Aenean vitae massa malesuada, molestie nisl vel, lacinia elit. Phasellus luctus molestie purus in feugiat. Vivamus blandit suscipit sodales.
            Etiam ultrices leo nec eros faucibus, sed malesuada risus convallis. Donec auctor dictum urna eget rutrum. Cras id risus ac enim eleifend ultricies. Cras a porttitor justo. Sed suscipit suscipit convallis. Fusce et justo nec turpis elementum vestibulum. Maecenas rutrum mi eget arcu sollicitudin blandit. Donec ut lectus porttitor nunc ullamcorper bibendum. Praesent et efficitur quam. Suspendisse eget ligula nec ante luctus cursus. Maecenas ac ante bibendum, condimentum sem quis, eleifend elit. Nunc molestie faucibus felis id cursus.'
        ]);
    }
}
