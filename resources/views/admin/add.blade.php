@extends('admin.admin_master')
@section('admin')

<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4 mb-4">Stock</h4>

        <!--- Add Item Card --->
        <div class="card">
            <div class="card-header">Add Item</div>
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

</main>


@endsection
