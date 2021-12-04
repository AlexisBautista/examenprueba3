<?php

namespace App\Http\Livewire\Games;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithPagination;

class IndexGames extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $games = ($this->cargado == true ) ? Game::where('nombre', 'LIKE','%' . $this->search . '%')
        ->orwhere('categoria', 'LIKE','%' . $this->search . '%')
        ->orwhere('año', 'LIKE','%' . $this->search . '%')
        ->orwhere('precio', 'LIKE','%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.games.index-games',compact('games'));
    }

    public function cargando(){
        $this->cargado = true;
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
