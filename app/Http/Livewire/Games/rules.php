<?php

namespace App\Http\Livewire\Games;

class rules
{
    public static function rulesgame(){
        return [
            'game.nombre'=> 'required',
            'game.categoria'=> 'required',
            'game.año'=>'required|numeric',
            'game.precio'=>'required|numeric',
            'foto'=>'nullable|image'
            ];
    }

}
