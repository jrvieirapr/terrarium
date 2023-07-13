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
                    <th scope="row">{{ $t->id}}</th>
                    <td>{{$t->descricao}}</td>
                    <td>Editar</td>
                    <td>Remover</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection