@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listagem de Estudos 
            <a class="btn btn-primary" href="{{ route('studies.create') }}" style="float: right">Cadastrar</a>
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Área</th>
                    <th>Data Inicial</th>
                    <th>Data Final</th>
                    <th>Situação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
             @foreach($studies as $study)
                <tr>
                    <td>{{ $study->id }}</td>
                    <td>{{ $study->description }}</td>
                    <td>{{ $study->area->description }}</td>
                    <td>{{ $study->date_init }}</td>
                    <td>{{ $study->date_finish }}</td>
                    <td>{{ $study->status }}</td>
                    <td>
                        <a  href="{{ route('studies.edit', ['study' => $study->id])}}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('studies.destroy', ['study' => $study->id]) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
             @endforeach
            
            </tbody>
        </table>
        {{ $studies->links() }}
    </div>
@endsection
