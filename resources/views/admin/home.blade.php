@extends("layout")
@section("main")
    <div id="page-wrapper">
        <h1 style="text-align: center;padding-top: 20px">Home</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>description</th>
                        <th>price</th>
                        <th>qty</th>
                        <th>category_id</th>
                        <th>Updated At</th>
                        <th>Created At</th>

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($product as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td><img style="width: 70px;height: 70px" src="{{$item->getImage()}}"/></td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->category_id}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at}}</td>
                            <td class="center"><a href="{{url("admin/products/edit",["id"=>$item->id])}}"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
                            <td class="center">
                                <a href="{{url("admin/products/delete",["id"=>$item->id])}}" style="text-decoration: none">
                                   
                                        <i class="fa fa-trash-o  fa-fw"></i>
                                        Delete
                                  
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card-footer">
                    {!! $product->links("vendor.pagination.default") !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Updated At</th>
                        <th>Created At</th>

                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cat)
                        <tr class="odd gradeX" align="center">
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
                <div class="card-footer">
                    {!! $product->links("vendor.pagination.default") !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@endsection
