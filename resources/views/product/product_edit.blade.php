@extends("layout")
@section("main")
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{url("admin/products/update",["id"=>$item->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="Tên..">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" value="{{$item->getImage()}}" placeholder="Image..">
                        <img style="width: 70px;height: 70px" src="{{$item->getImage()}}"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{$item->description}}" class="form-control" placeholder="description..">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$item->price}}" class="form-control" placeholder="price..">
                    </div>
                    <div class="form-group">
                        <label>Qty</label>
                        <input type="number" name="qty" value="{{$item->qty}}" class="form-control" placeholder="qty..">
                    </div>
                    <div class="form-group">
                        <label>Category_id</label>
                        <select name="category_id" class="form-control" >
                            @foreach($category as $cat)
                                <option value="{{$cat->id}}">
                                    {{$cat->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
