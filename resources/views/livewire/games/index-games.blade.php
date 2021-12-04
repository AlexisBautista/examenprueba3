<div wire:init="cargando">

    <div class="row mb-3">
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-labaria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-9 ">
            <a href="{{ route('creategames') }}" class="btn btn-success float-right">Nuevo <iclass="fas fa-plus-square">
                    </iclass=></a>
        </div>
    </div>
    @if (count($games) > 0)

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)


                    <tr>
                        <th scope="row">{{ $game->id }}</th>
                        <td><img style=" border-radius: 20px; width: 60px; height:110px"
                                src="{{ Storage::disk('public')->url($game->foto != null ? $game->foto : 'images/games/default.png') }}"
                                alt=""></td>
                        <td>{{ $game->nombre }}</td>
                        <td>{{ $game->categoria }}</td>
                        <td>{{ $game->año }}</td>
                        <td>${{ $game->precio }}</td>
                        <td>
                            <a title="Ver game" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{ route('showgames', $game) }}"><i class="fas fa-eye"></i></a>
                            <a title="Editar game" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{ route('editgames', $game) }}"><i class="fas fa-edit"></i></a>
                            <a wire:click="delete title=" Eliminar game" style="font-size: 1.3rem"
                                class="text-danger mr-1" href="{{ route('deletegames', $game) }}"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="d-block mx-auto" src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">

        <h2 class="text-center">Cargando...</h2>
    @endif
</div>
