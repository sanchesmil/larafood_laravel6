@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active"> <a href="{{route('plans.index')}}">Planos</a></li>
    </ol>

    <h1>Planos <a href="{{route('plans.create')}}" class="btn btn-dark"><i class="fas fa-plus-square"></i> ADD</a></h1>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{route('plans.search')}}" class="form form-inline" method="POST">
                @csrf
                <input type="text" name="filter" class="form-control" placeholder="Filtro" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
            @if (isset($filters))
                <a href="{{ route('plans.index') }}"> <button class="btn btn-danger"> Limpar Filtro </button> </a>
            @endif
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th width="250px" >Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plans as $plan)
                            <tr>
                                <td>{{$plan->name}}</td>
                                <td>R$ {{number_format($plan->price,2,',','.')}}</td>
                                <td >
                                    <a href="{{route('plan.details.index', $plan->url)}}" class="btn btn-primary">Detalhes</a>
                                    <a href="{{route('plans.edit', $plan->url)}}" class="btn btn-info">Editar</a>
                                    <a href="{{ route('plans.show',$plan->url) }}" class="btn btn-warning">Ver</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

        </div>
        <div class="card-footer">

            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@stop

