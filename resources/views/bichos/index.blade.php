@extends('index')
@section('content')
<div>
    <h1>Bichos</h1>
    <a class="btn btn-primary" href="{{ route('bichos.create') }}" role="button">Novo</a>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Tipo</th>
                    <th scope="col" colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bichos as $b)      
                <tr>
                    <td scope="row">{{ $b->id}}</td>
                    <td>{{$b->nome}}</td>
                    <td>{{$b->idade}}</td>
                    <td>{{$b->cor}}</td>
                    <td>{{$b->tipobicho->descricao}}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-warning me-md-2 btn-formulario" 
                            href="{{ route('bichos.edit', ['bicho' => $b]) }}" role="button">Editar</a>
                            
                            <form action="{{ route('bichos.destroy', ['bicho' => $b]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger me-md-2 btn-formulario" type="submit">Remover</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection