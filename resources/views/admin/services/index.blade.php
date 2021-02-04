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
              <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{ route('services.create') }}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Название</th>
                  <th>Цена</th>
                  <th>Иконка</th>
                  <th>Облохка</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($services as $service)
                <tr>
                  <td>{{ $service->id }}</td>
                  <td>{{ $service->title }}
                  </td>
                  <td>{{ $service->price }}
                  </td>
                  <td><img src="{{$service->getIcon()}}" alt="" srcset="">
                  </td>
                  <td><img src="{{$service->getImage()}}" width="100" alt="" srcset="">
                  </td>
                  <td><a href="{{ route('services.edit', $service->id) }}" class="fa fa-pencil"></a> 
                    {{Form::open(['route' => ['services.destroy', $service->id], 'method' => 'delete'])}}
                    <button type="submit" onclick="return confirm('Are you sure?')" class="delete">
                        <a class="fa fa-remove"></a></td>
                    </button>
                    {{Form::close()}}
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