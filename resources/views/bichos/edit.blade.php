@extends('index')
@section('content')
<div>
    <h1>Bicho</h1>
    <form action="{{ route('bichos.update', ['bicho' => $bicho]) }} " method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control  @error('nome') is-invalid @enderror" id="nome" placeholder="Digite o nome" name="nome" value="{{ $bicho->nome ?? old('nome') }}">
            @error('nome')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">Idade:</label>
            <input type="number" class="form-control  @error('idade') is-invalid @enderror" id="idade" placeholder="Digite a idade" name="idade" value="{{$bicho->idade ?? old('idade') }}">
            @error('idade')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cor" class="form-label">Cor:</label>
            <input type="text" class="form-control  @error('cor') is-invalid @enderror" id="cor" placeholder="Digiten a cor" name="cor" value="{{$bicho->cor ?? old('cor') }}">
            @error('cor')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Tipo</label>
            <select name="tipo_bicho_id" id="tipo_bicho_id" class="form-control @error('tipo_bicho_id') is-invalid @enderror">
                <option disabled selected value> Selecione o tipo </option>
                @foreach ($tipos_bichos as $t)
                <option value="{{ $t->id }}" @if ($bicho->tipobicho->id == $t->id)
                    selected
                    @endif>{{ $t->descricao }}</option>
                @endforeach
            </select>
            <br />
            @error('tipo_bicho_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success me-md-2" type="submit">Salvar</button>
            <button class="btn btn-danger" type="reset">Limpar</button>
        </div>
    </form>
</div>
@endsection