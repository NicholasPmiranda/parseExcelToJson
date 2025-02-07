<?php

namespace Nicholaspmiranda\LaravelGoExcel;

use Illuminate\Support\Facades\Process;

class ParseExcel
{
    public static function json($file_path, $start_line = 1, $end_line = -1)
    {

        $file_path = storage_path('app/public/' . $file_path);

        $comando = 'cd /home/nick/Projetos/laravel-go-excel/Packages/nicholaspmiranda/laravel-go-excel/src && ./parseExcel ' . "-start_line=$start_line -end_line=$end_line $file_path";

        $result = Process::run($comando);

        $json = json_decode($result->output(), true);


        return $json['arquivo'];
    }
}
