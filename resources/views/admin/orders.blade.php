@if (Auth::user()->user_type == 'admin')
@include('admin/includes/header')
@include('admin/includes/sidebar')

<div class="be-content">
    <div class="page-head">
        <h2 class="page-head-title">Data Tables</h2>
        <ol class="breadcrumb page-head-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data Tables</li>
        </ol>
      </div>
      <div class="main-content container-fluid">
        <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">Default
                  <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                    <ul role="menu" class="dropdown-menu pull-right">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <div id="table1_wrapper" class="dataTables_wrapper no-footer"><div class="row be-datatable-header"><div class="col-sm-6"><div class="dataTables_length" id="table1_length"><label>Show <select name="table1_length" aria-controls="table1" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="table1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="table1"></label></div></div></div><div class="row be-datatable-body"><div class="col-sm-12"><table id="table1" class="table table-striped table-hover table-fw-widget dataTable no-footer" role="grid" aria-describedby="table1_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 163px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 205px;">Browser</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 187px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 139px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="table1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 103px;">CSS grade</th></tr>
                    </thead>
                    <tbody>
                    <tr class="gradeA odd" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA even" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA odd" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA even" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="center">1.9</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA odd" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA even" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA odd" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA even" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td class="center">1.7</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA odd" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="center">1.8</td>
                        <td class="center">A</td>
                      </tr><tr class="gradeA even" role="row">
                        <td class="sorting_1">Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="center">1</td>
                        <td class="center">A</td>
                      </tr></tbody>
                  </table></div></div><div class="row be-datatable-footer"><div class="col-sm-5"><div class="dataTables_info" id="table1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="table1_paginate"><a class="paginate_button previous disabled" aria-controls="table1" data-dt-idx="0" tabindex="0" id="table1_previous">Previous</a><span><a class="paginate_button current" aria-controls="table1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="table1" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="table1" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="table1" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="table1" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="table1" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="table1" data-dt-idx="7" tabindex="0" id="table1_next">Next</a></div></div></div></div>
                </div>
              </div>
            </div>
          </div>
      </div>
</div>
@include('admin/includes/footer')

@include('admin/includes/footer')
@else
<script>window.location="/admin/login"</script>
@endif