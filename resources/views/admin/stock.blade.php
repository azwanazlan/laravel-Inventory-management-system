@extends('admin.admin_master')
@section('admin')
<main>
<div class="container-fluid px-4">
    <h4 class="mt-4">Stock</h4>

    <!--- Search box Item --->
  <div class="card">
    <div class="card-header">Stocks Item</div>
        <div class="card-body">
            <form action="#" id="searchForm" name="frmSearchStocks" method="post">
            <div class="row">
                <div class="col px-4">
                    <label for="searchStocksItemName">Item</label>
                    <input class="form-control" type="text" name="searchItem_Name" id="searchItemName">
                </div>
                <div class="col px-4">
                        <label for="searchStocksItemCategory">Category</label>
                        <select class="form-control" name="searchItem_Category" id="searchItemCategory">
                            <option value="0">All</option>
                            <option value="1">RAM</option>
                            <option value="2">HDD</option>
                        </select>
                </div>
                <div class="col px-4">
                    <label for="searchStocksBrand">Category</label>
                    <input class="form-control" type="text" name="searchItem_Brand" id="searchItemBrand">
                </div>
                <div class="col px-4">
                    <label for="searchStocksItemSupplier">Supplier</label>
                    <select class="form-control" name="searchItem_Supplier" id="searchItemSupplier">
                        <option value="0">All</option>
                        <option value="1">ITTech</option>
                        <option value="2">Czone</option>
                    </select>
                </div>
            </div>
                <button class="btn btn-primary mt-4">Search</button>
                <button class="btn btn-secondary mt-4">Reset</button>
            </form>
        </div>
    </div>
</div>
</main>
@endsection

