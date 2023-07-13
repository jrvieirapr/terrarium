@extends('index')
@section('content')
<div>
    <h1>Novo Tipo Bicho</h1>
    <form action="{{ route('tiposbichos.store') }} " method="post">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control  @error('descricao') is-invalid @enderror" 
            id="descricao" 
            placeholder="Digite o tipo do bicho" name="descricao">
            @error('descricao')
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