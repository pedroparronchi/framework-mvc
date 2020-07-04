@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listagem de Estudos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Área</th>
                <th>Data Inicial</th>
                <th>Data Final</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($studies as $study)
                <td>{{ $study->id }}</td>
                <td>{{ $study->description }}</td>
                <td>{{ $study->area_id }}</td>
                <td>{{ $study->date_init }}</td>
                <td>{{ $study->date_finish }}</td>
                <td>{{ $study->status }}</td>
                <td>
                    <button class="btn btn-info">Editar</button>
                    <button class="btn btn-danger">Excluir</button>
                </td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>

@endsection