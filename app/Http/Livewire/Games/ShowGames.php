<?php

namespace App\Http\Livewire\Games;

use App\Models\Game;
use Livewire\Component;

class ShowGames extends Component
{
    public Game $game;
    public function render()
    {
        return view('livewire.games.show-games');
    }
}
