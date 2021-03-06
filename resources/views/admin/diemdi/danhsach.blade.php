 
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">Điểm đi
	                    <small>Danh sách</small>
	                </h1>
	            </div>
	            <!-- /.col-lg-12 -->

				<div class="col-lg-7">
					@if(session('thongbao'))
					<div class="alert alert-success">
						{{session('thongbao')}}
					</div>
					@endif
				</div>

	            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                <thead>
	                    <tr align="center">
	                        <th>ID</th>
	                        <th>Tên điểm đi</th>
	                        <th>Xóa</th>
	                        <th>Sửa</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    
	                    @foreach($diemdi as $dd)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$dd->id}}</td>
	                        <td>{{$dd->tendiemdi}}</td>

	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/diemdi/xoa/{{$dd->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/diemdi/sua/{{$dd->id}}">Sửa</a></td>
	                    </tr>
	                    @endforeach
	                </tbody>
	            </table>
	        </div>
	        <!-- /.row -->
	    </div>
	    <!-- /.container-fluid -->
	</div>
@endsection
