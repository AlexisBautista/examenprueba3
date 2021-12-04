<?php

namespace App\Http\Livewire\Games;

use App\Models\Game;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditGames extends Component
{
    use WithFileUploads;
    public Game $game;
    public $foto;

    public function render()
    {
        return view('livewire.games.edit-games');
    }

    public function edit(){
        $this->validate();
        if($this->foto != null){
            if($this->game->foto !=null){
                Storage::disk('public')->delete($this->game->foto);
            }
            $this->game->foto = Storage::disk('public')->put('images/games',$this->foto);
        }
        $this->game->save();
        return redirect(route('indexgames'));
    }
    protected function rules(){
        return rules::rulesgame();
    }
}
