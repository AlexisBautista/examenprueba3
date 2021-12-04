<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion del juego</h2>
                </div>
                <div class="card-header">
                    <img style="width:100px; height:125px" src="{{ Storage::disk('public')->url($game->foto) }}"
                        alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $game->nombre }}</h1>
                    {{ $game->categoria }} , {{ $game->año }}
                    <h2 class="mt-5">${{ $game->precio }}</h2>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editgames', $game) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexgames') }}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
