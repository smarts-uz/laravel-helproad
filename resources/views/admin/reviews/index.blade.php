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
            <h3 class="box-title">Листинг Отзывы</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
            <a href="{{route('reviews.create')}}" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Текст</th>
                <th>Аватар</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($reviews as $review)
            <tr>
                <td>{{$review->id}}</td>
                <td>{{$review->name}}
                </td>
                <td>{{$review->text}}</td>
                <td>    
                <img src="{{$review->getAvatar()}}" alt="" width="100">
                </td>
                <td><a href="{{route('reviews.edit', $review->id)}}" class="fa fa-pencil"></a> 
                    {{Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete'])}}
                        <button type="submit" onclick="return confirm('Are you sure?')" class="delete">
                            <a class="fa fa-remove"></a>
                        </button>
                    {{Form::close()}}
                    @if ($review->status == 1)
                        <a href="{{route('reviews.show', $review->id)}}" class="fa fa-thumbs-o-up"></a>
                    @else
                        <a href="{{route('reviews.show', $review->id)}}" class="fa fa-lock"></a>    
                    @endif
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