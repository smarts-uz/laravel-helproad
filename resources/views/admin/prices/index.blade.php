@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Blank page
    <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Цены Сервиса</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
            <a href="{{route('prices.create')}}" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                {{-- <th>Сервис</th> --}}
                <th>Цена</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($prices as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}
                    </td>
                    {{-- <td>{{ dd($item->service->title) }}</td> --}}
                    <td>{{$item->price}}</td>
                    <td><a href="{{route('prices.edit', $item->id)}}" class="fa fa-pencil"></a> 
                    {{Form::open(['route' => ['prices.destroy', $item->id], 'method' => 'delete'])}}
                        <button type="submit" onclick="return confirm('Are you sure?')" class="delete">
                            <a class="fa fa-remove"></a>
                        </button>
                    {{Form::close()}}
                    </td>
                </tr>
            @endforeach
            </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
        </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection