@extends('index')
@section('content')
<div>
    <h1>Tipos Bichos</h1>
    <a class="btn btn-primary" href="{{ route('tiposbichos.create') }}" role="button">Novo</a>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col" colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipos_bichos as $t)
                <tr>
                    <td scope="row">{{ $t->id}}</td>
                    <td>{{$t->descricao}}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-warning me-md-2 btn-formulario" 
                            href="{{ route('tiposbichos.edit', ['tiposbicho' => $t]) }}" role="button">Editar</a>
                            
                            <form action="{{ route('tiposbichos.destroy', ['tiposbicho' => $t]) }}" method="POST">
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