@extends('admin.admin_master')
@section('admin')
<main>
    <div class="container-fluid px-4">
        <h4 class="mt-4">Stock</h4>

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
                                        <th data-sortable="" style="width: 19.6145%;"><a href="#" class="dataTable-sorter">ID</a>
                                        </th>
                                        <th data-sortable="" style="width: 28.9116%;"><a href="#" class="dataTable-sorter">Product Label</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.6463%;"><a href="#" class="dataTable-sorter">Brand</a>
                                        </th>
                                        <th data-sortable="" style="width: 9.18367%;"><a href="#" class="dataTable-sorter">Category</a>
                                        </th>
                                        <th data-sortable="" style="width: 15.1927%;"><a href="#" class="dataTable-sorter">Price</a>
                                        </th>
                                        <th data-sortable="" style="width: 11.4512%;"><a href="#" class="dataTable-sorter">Stock</a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td><td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
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

