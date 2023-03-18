@extends('site.layouts.main')

@section('title', 'Clientes - adicionar')

@section('content')
    @include('site.layouts._partials.main-top-page')
    <div class="form-container">
        <h2 class="p-2 text-white rounded-2 shadow color-8">Adicionar cliente</h2>
        <form class="row g-3">
            <div class="col-md-12">
                <label for="nome" class="form-label">Nome</label>
                <input name="nome" type="text" class="form-control shadow" id="nome">
            </div>

            <div class="col-md-3">
                <label for="nif" class="form-label">Nº contribuinte</label>
                <input name="nif" value="{{ $nif }}" type="text" class="form-control shadow" id="nif"
                    disabled readonly>
            </div>
            <div class="col-md-3">
                <label for="genero" class="form-label">Género</label>
                <select name="genero" id="sexo" class="form-select shadow">
                    <option selected>Escolher...</option>
                    @foreach($genero as $key => $genero)
                        <option value="{{$genero->id}}">{{$genero->genero}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label for="data_nascimento" class="form-label">Data nascimento</label>
                <input name="data_nascimento" type="date" class="form-control shadow" id="data_nascimento">
            </div>
            <div class="col-md-3">
                <label for="estado_civil" class="form-label">Estado civil</label>
                <select name="estado_civil" id="estado_civil" class="form-select shadow">
                    <option selected>Escolher...</option>
                    @foreach($estado_civil as $key => $estado_civil)
                    <option value="{{$estado_civil->id}}">{{$estado_civil->estado_civil}}</option>
                    @endforeach
                </select>
            </div>

            <h6 class="p-2 text-white rounded-2 shadow color-7">Residência</h6>
            <div class="col-md-9">
                <label for="residencia" class="form-label">Residência</label>
                <input name="residencia" type="text" class="form-control shadow" id="residencia">
            </div>
            <div class="col-md-3">
                <label for="numero_porta" class="form-label">Nº porta</label>
                <input name="numero_porta" type="text" class="form-control shadow" id="numero_porta">
            </div>
            <div class="col-md-3">
                <label for="codigo_postal" class="form-label">Código postal</label>
                <input name="codigo_postal" type="text" class="form-control shadow" id="codigo_postal">
            </div>
            <div class="col-md-9">
                <label for="localidade_residencia" class="form-label">Localidade</label>
                <div class="form-icons__container">
                    <input name="localidade_residencia" type="text" class="form-control shadow"
                        id="localidade_residencia">
                    <span class="codigo-postal__icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <a href="https://www.ctt.pt/feapl_2/app/open/postalCodeSearch/postalCodeSearch.jspx"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-globe" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>

            <div class="col-md-3">
                <label for="distrito_residencia" class="form-label">Distrito</label>
                <select name="distrito_residencia" id="distrito_residencia" class="form-select shadow">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="concelho_residencia" class="form-label">Concelho</label>
                <select name="concelho_residencia" id="concelho_residencia" class="form-select shadow">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="freguesi_residenciaa" class="form-label">Freguesia</label>
                <select name="freguesi_residenciaa" id="freguesi_residenciaa" class="form-select shadow">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-md-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2" for="flexCheckDefault">
                    Escrever freguesias
                </label>
            </div>
            <div class="col-md-9">
                <input name="residencia_freguesia_manual" type="text" class="form-control shadow"
                    id="residencia_freguesia_manual" disabled readonly>
            </div>

            <h6 class="p-2 text-white rounded-2 shadow color-7">Naturalidade</h6>
            <div class="col-md-5">
                <label for="nacionalidade_id" class="form-label">Nacionalidade</label>
                <select name="nacionalidade_id" id="nacionalidade_id" class="form-select shadow">
                    <option selected>Escolher...</option>
                    @foreach($nacionalidade as $key => $nacionalidade)
                    <option value="{{ $nacionalidade->id}}">{{ $nacionalidade->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-7"></div>

            <div class="col-md-3">
                <label for="naturalidade_distrito" class="form-label">Distrito</label>
                <select name="naturalidade_distrito" id="naturalidade_distrito" class="form-select shadow">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="naturalidade_concelho" class="form-label">Concelho</label>
                <select name="naturalidade_concelho" id="naturalidade_concelho" class="form-select shadow">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="naturalidade_freguesia" class="form-label">Freguesia</label>
                <select name="naturalidade_freguesia" id="naturalidade_freguesia" class="form-select shadow">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>

            <div class="col-md-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label ms-2" for="flexCheckDefault">
                    Escrever freguesias
                </label>
            </div>
            <div class="col-md-9">
                <input name="naturalidade_freguesia_manual" type="text" class="form-control shadow"
                    id="naturalidade_freguesia_manual" disabled readonly>
            </div>

            <h6 class="p-2 text-white rounded-2 shadow color-7">Documento de identificação</h6>
            <div class="col-md-5">
                <label for="cc_numero" class="form-label">Número d. identificação</label>
                <div class="form-icons__container">
                    <input name="cc_numero" type="text" class="form-control shadow" id="cc_numero">
                    <span class="verefica-icon__warning" id="fail">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z" />
                        </svg>
                    </span>
                    <span class="verefica-icon__success" id="success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path
                                d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <label for="cc_data_emissao" class="form-label">Data emissão</label>
                <input name="cc_data_emissao" type="date" class="form-control shadow" id="cc_data_emissao">
            </div>
            <div class="col-md-5">
                <label for="cc_emissor" class="form-label">Emissor</label>
                <input name="cc_emissor" type="text" class="form-control shadow" id="cc_emissor">
            </div>

            <div class="col-md-5 hide">
                <label for="d_i_numero_estrangeiro" class="form-label">Número d. identificação</label>
                <input name="d_i_numero_estrangeiro" type="text" class="form-control shadow"
                    id="d_i_numero_estrangeiro">
            </div>
            <div class="col-md-2 hide">
                <label for="d_i_data_emissao_estrangeiro" class="form-label">Data emissão</label>
                <input name="d_i_data_emissao_estrangeiro" type="date" class="form-control shadow" id="d_i_data_emissao_estrangeiro">
            </div>
            <div class="col-md-5 hide">
                <label for="d_i_emissor_estrangeiro" class="form-label">Emissor</label>
                <input name="d_i_emissor_estrangeiro" type="text" class="form-control shadow" id="d_i_emissor_estrangeiro">
            </div>

            <div class="col-md-5">
                <label for="passaporte_numero" class="form-label">Número passaporte</label>
                <input name="passaporte_numero" type="text" class="form-control shadow"
                    id="passaporte_numero">
            </div>
            <div class="col-md-2">
                <label for="passaporte_data_emissao" class="form-label">Data emissão</label>
                <input name="passaporte_data_emissao" type="date" class="form-control shadow" id="passaporte_data_emissao">
            </div>
            <div class="col-md-5">
                <label for="passaporte_observacoes" class="form-label">Observações</label>
                <input name="passaporte_observacoes" type="text" class="form-control shadow" id="passaporte_observacoes">
            </div>

            <div class="col-md-8">
                <label for="localidade_eleitor" class="form-label">Localidade cartão eleitor</label>
                <div class="form-icons__container">
                    <input name="localidade_eleitor" type="text" class="form-control shadow"
                        id="localidade_eleitor">
                    <span class="codigo-postal__icons">
                        <a href="https://www.recenseamento.mai.gov.pt/"
                            target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-globe" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <label for="numero_s_social" class="form-label">Número segurança social</label>
                <input name="numero_s_social" type="text" class="form-control shadow"
                    id="numero_s_social">
            </div>
            <div class="col-md-4">
                <label for="numero_c_g_aposentacoes" class="form-label">Número caixa geral de aposentações</label>
                <input name="numero_c_g_aposentacoes" type="text" class="form-control shadow" id="numero_c_g_aposentacoes">
            </div>
            <div class="col-md-4">
                <label for="numero_utente" class="form-label">Número utente</label>
                <input name="numero_utente" type="text" class="form-control shadow" id="numero_utente">
            </div>

            <h6 class="p-2 text-white rounded-2 shadow color-7">Filiação</h6>
            <div class="col-md-12">
                <label for="nome_pai" class="form-label">Nome pai</label>
                <input name="nome_pai" type="text" class="form-control shadow" id="nome_pai">
            </div>
            <div class="col-md-12">
                <label for="nome_mae" class="form-label">Nome mãe</label>
                <input name="nome_mae" type="text" class="form-control shadow" id="nome_mae">
            </div>

            <h6 class="p-2 text-white rounded-2 shadow color-7">Contactos</h6>
            <div class="col-md-4">
                <label for="telefone_1" class="form-label">Telefone</label>
                <input name="telefone_1" type="text" class="form-control shadow"
                    id="telefone_1">
            </div>
            <div class="col-md-4">
                <label for="telefone_2" class="form-label">Telefone</label>
                <input name="telefone_2" type="text" class="form-control shadow" id="telefone_2">
            </div>
            <div class="col-md-4">
                <label for="telefone_3" class="form-label">Telefone</label>
                <input name="telefone_3" type="text" class="form-control shadow" id="telefone_3">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="text" class="form-control shadow" id="email">
            </div>
            <div class="col-md-6">
                <label for="profissao" class="form-label">Profissão</label>
                <input name="profissao" type="text" class="form-control shadow" id="profissao">
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-primary color-10">Gravar</button>
            </div>

        </form>
    </div>
@endsection
