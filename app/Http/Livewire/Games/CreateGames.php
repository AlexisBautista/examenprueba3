<?php

namespace App\Http\Livewire\Games;

use App\Models\Game;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateGames extends Component
{
    public Game $game;
    use WithFileUploads;
    public $foto;

    public function mount(){
        $this->game = new Game();
    }

    public function render()
    {
        return view('livewire.games.create-games');
    }

    public function create()
    {
        $this->validate();
        if($this->foto != null){
        $this->game->foto = Storage::disk('public')->put('images/games',$this->foto);
        }
        $this->game->save();
        return redirect(route('indexgames'));

    }
    protected function rules(){

        return rules::rulesgame();
    }

}
