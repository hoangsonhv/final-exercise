@extends("layout")
@section("main")
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category List
                    </h1>
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cat)
                    <tr align="center">
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td>{{$cat->updated_at}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url("admin/categories/edit",["id"=>$cat->id])}}">Edit</a></td>
                        <td class="center">
                            <a href="{{url("admin/categories/delete",["id"=>$cat->id])}}" style="text-decoration: none">
                               
                                    <i class="fa fa-trash-o  fa-fw"></i>
                                    Delete
                               
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
