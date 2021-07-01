@extends("layout")
@section("main")
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category Add
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{url("admin/categorySave")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" value="{{old("name")}}" class="form-control" name="name" >
                            @error("name")<div class="alert alert-danger" style="width: 100%;" >{{$message}}</div>@enderror
                        </div>
                        <button type="submit" name="dangky">Thêm</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
