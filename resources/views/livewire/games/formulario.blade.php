<div class="row">
    <div class="col-4 text-center">
        <div class="container">


            @if ($foto != null)
                <img style="border-radius: 120px; width: 235px; height:335px " src="{{ $foto->temporaryUrl() }}" alt="">
            @else
                <img style="width: 235px; height:335px "
                    src="{{ Storage::disk('public')->url($game->foto != null ? $game->foto : 'images/games/default.png') }}"
                    alt="">


            @endif
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Subir Imagen</label>
                    <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                    @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </form>
        </div>
    </div>
    <div class="col-8 mx-auto">
        <div class="container">
            <div class="form-group">
                <label>Nombre</label>
                <input wire:model="game.nombre" type="text" class="form-control">
                @error('game.nombre') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <input wire:model="game.categoria" type="text" class="form-control">
                @error('game.categoria') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Año</label>
                <input wire:model="game.año" type="number" class="form-control" maxlength="4">
                @error('game.año') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Precio</label>
                <input wire:model="game.precio" type="text" class="form-control">
                @error('game.precio') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
</div>
