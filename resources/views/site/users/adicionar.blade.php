@extends('site.layouts.main')

@section('title', 'Users - adicionar')

@section('content')
    @include('site.layouts._partials.main-top-page')
    <div class="form-container">
        <h2 class="p-2 text-white rounded-2 shadow color-8">Adicionar user</h2>
        <form class="row g-3">
            <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control shadow" id="nome">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary color-10">Gravar</button>
            </div>

        </form>
    </div>
@endsection
