@extends('admin.admin_master')
@section('admin')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4 mb-4">Stock</h4>

        <!--- First Card --->
        <div class="card">
            <div class="card-header">Search Item</div>
                <div class="card-body">
                    <form action="#" autocomplete="off" id="searchForm" name="frmSearchStocks" method="post">
                    <div class="row">
                        <div class="col px-3">
                            <label for="searchStocksItemName">Products ID</label>
                            <input class="form-control" type="text" name="searchItem_Name" id="searchItemName">
                            <label class="mt-3" for="searchStocksItemName">Products Label</label>
                            <input class="form-control" type="text" name="searchItem_Name" id="searchItemName">
                            <button class="btn btn-primary btn-sm mt-4">Search</button>
                            <button class="btn btn-secondary btn-sm mt-4">Reset</button>
                        </div>
                        <div class="col px-3">
                                <label for="searchStocksItemCategory">Category</label>
                                <select class="form-control" name="searchItem_Category" id="searchItemCategory">
                                    <option value="0">All</option>
                                    <option value="1">RAM</option>
                                    <option value="2">HDD</option>
                                </select>
                        </div>
                        <div class="col px-3">
                            <label for="searchStocksBrand">Brand</label>
                            <input class="form-control" type="text" name="searchItem_Brand" id="searchItemBrand">
                        </div>
                        <div class="col px-3">
                            <label for="searchStocksItemSupplier">Supplier</label>
                            <select class="form-control" name="searchItem_Supplier" id="searchItemSupplier">
                                <option value="0">All</option>
                                <option value="1">ITTech</option>
                                <option value="2">Czone</option>
                            </select>
                        </div>

                    </div>

                    </form>
                </div>
            </div>

        <!---Second card --->
        <div class="card mt-4">
            <div class="card-header">Stocks List</div>
                <div class="card-body">
                    <a href="{{ route('product.add') }}" class="btn btn-primary mb-3">+ Add</a>

                    <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                        <div class="dataTable-top">
                            <div class="dataTable-dropdown">
                                <label>
                                    <select class="dataTable-selector">
                                        <option value="5">5</option>
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> entries per page
                                </label>
                            </div>
                            <div class="dataTable-search">
                                <input class="dataTable-input" placeholder="Search..." type="text">
                            </div>
                        </div>
                        <div class="dataTable-container">
                            <table id="datatablesSimple" class="dataTable-table">
                                <thead>
                                    <tr>
                                        <th data-sortable="" style="width: 19.6145%;"><a href="#" class="dataTable-sorter">Model Number</a>
                                        </th>
                                        <th data-sortable="" style="width: 28.9116%;"><a href="#" class="dataTable-sorter">Product Label</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.6463%;"><a href="#" class="dataTable-sorter">Brand</a>
                                        </th>
                                        <th data-sortable="" style="width: 9.18367%;"><a href="#" class="dataTable-sorter">Category</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.1927%;"><a href="#" class="dataTable-sorter">Price (RM)</a>
                                        </th>
                                        <th data-sortable="" style="width: 11.4512%;"><a href="#" class="dataTable-sorter">Stock</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                      <td>{{$product->serialNumber}}</td>
                                      <td>{{$product->productlabel}}</td>
                                      <td>{{$product->brand->brandname}}</td>
                                      <td>{{$product->category->categoryname}}</td>
                                      <td>{{$product->price}}</td>
                                    </tr>
                                     @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
                            <nav class="dataTable-pagination">
                                <ul class="dataTable-pagination-list">
                                    <li class="active">
                                        <a href="#" data-page="1">1</a>
                                    </li>
                                    <li class="">
                                        <a href="#" data-page="2">2</a>
                                    </li>
                                    <li class="">
                                        <a href="#" data-page="3">3</a>
                                    </li>
                                    <li class="">
                                        <a href="#" data-page="4">4</a>
                                    </li>
                                    <li class="">
                                        <a href="#" data-page="5">5</a>
                                    </li><li class="">
                                        <a href="#" data-page="6">6</a>
                                    </li>
                                    <li class="pager">
                                        <a href="#" data-page="2">›</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</main>
@endsection

