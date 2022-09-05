@extends('admin.admin_master')
@section('admin')

<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4 mb-4">Stock</h4>
        @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success')}}
        </div>

        @endif

        @if (Session::has('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail')}}
        </div>

        @endif


        <!--- Add Item Card --->
        <div class="card">
            <div class="card-header">Add Item</div>
                <div class="card-body">
                    <form action="{{route('product.form')}}" autocomplete="off" id="searchForm" name="frmSearchStocks" method="post">
                    @csrf
                        <div class="row">
                        <div class="col px-3">

                            <label for="">Model Number</label>
                            <input class="form-control" type="text" name="modelNumber" id="modelNumber">
                            <span style="color:red">@error('modelNumber'){{$message}} @enderror</span>

                            <label class="mt-3" for="">Products Label</label>
                            <input class="form-control" type="text" name="productLabel" id="productLabel">
                            <span style="color:red">@error('productLabel'){{$message}} @enderror</span>


                        </div>
                        <div class="col px-3">

                                <label for="">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="0">Select Category</option>
                                    @foreach ($dataCategory as $row )
                                    <option value="{{$row->id}}">{{$row->categoryname}}</option>
                                    @endforeach
                                </select>
                                <span style="color:red">@error('category_id'){{$message}} @enderror</span>

                                <label class="mt-3" for="">Price</label>
                                <input class="form-control" type="number" name="price" id="productPrice">
                                <span style="color:red">@error('price'){{$message}} @enderror</span>
                        </div>

                        <div class="col px-3">
                            <label for="">Brand</label>
                            <select class="form-control" name="brand_id" id="Brand">
                                <option value="0">Select Brand</option>
                                @foreach ($dataBrand as $row )
                                <option value="{{$row->id}}">{{$row->brandname}}</option>
                                @endforeach
                            </select>
                            <span style="color:red">@error('brand_id'){{$message}} @enderror</span>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-4">+ Add</button>
                    </form>
                </div>
            </div>

</main>


@endsection
