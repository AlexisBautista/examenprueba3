<?php

namespace App\Http\Livewire\Games;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteGames extends Component
{
    use WithFileUploads;

    public Game $game;
    public function render()
    {
        return view('livewire.games.delete-games');
    }

    public function delete(){
        $this->game->delete();
        return redirect(route('indexgames'));
    }
}
