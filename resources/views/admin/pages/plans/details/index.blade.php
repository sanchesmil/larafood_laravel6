@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"> <a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"> <a href="{{route('plans.index')}}">Planos</a></li>
        <li class="breadcrumb-item"> <a href="{{route('plans.show', $plan->url)}}">{{$plan->name}}</a></li>
        <li class="breadcrumb-item active"> <a href="{{route('plan.details.index',$plan->url)}}" class="active">Detalhes</a></li>
    </ol>

    <h1>Detalhes do Plano {{$plan->name}} <a href="{{route('plan.details.create', $plan->url)}}" class="btn btn-dark"><i class="fas fa-plus-square"></i> ADD</a></h1>

@stop

@section('content')
    <div class="card">

        <div class="card-body">

            @include('admin.includes.alerts')

            <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th width="150px" >Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $detail)
                            <tr>
                                <td>{{$detail->name}}</td>
                                <td >
                                    <a href="{{route('plan.details.edit', [$plan->url, $detail->id])}}" class="btn btn-info">Editar</a>
                                    <a href="{{ route('plan.details.show',[$plan->url, $detail->id]) }}" class="btn btn-warning">Ver</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

        </div>
        <div class="card-footer">
            {!! $details->links() !!}
        </div>
    </div>
@stop

