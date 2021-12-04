<div>
    <form wire:submit.prevent="edit">
        <div class="card">
            <div class="card-header">
                Editar Juego
            </div>
            <div class="card-body">
                @include('livewire.games.formulario');
            </div>
            <div class="card-footer text-center">
                <button wire:click="edit" type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
                    Guardar</button>
                <a href="{{ route('indexgames') }}" class="btn btn-danger">Cancelar</a>
            </div>
        </div>




    </form>

</div>

