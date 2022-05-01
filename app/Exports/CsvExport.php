<?php

namespace App\Exports;

use App\Models\Bemorlar;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;


class CsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function collection()
    {

        return Bemorlar::where('bemorlars.id', $this->id)->
        join('users','bemorlars.user_id', '=', 'users.id')->
        select(['bemorlars.id','users.name',
            'bemorlars.harorat', 'bemorlars.shikoyat','bemorlars.kurik',
            'bemorlars.tashxis','bemorlars.tavsiya'])
            ->get();

    }
}
