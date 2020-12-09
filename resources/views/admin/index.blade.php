<!DOCTYPE html>
<html lang="en">
  @if (Auth::user()->user_type == 'admin')
  @include('admin/includes/header')

  @include('admin/includes/sidebar')
   
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            @if (session()->has('mssag'))
            <div id="cngPass" class="gritter-main-wrapper success-alert alert">
                <div id="gritter-item-1" class="gritter-item-wrapper color success" style="" role="alert">
                <div class="gritter-item"><div class="gritter-content gritter-without-image">
                    <a class="gritter-close"  id="cngPass" tabindex="1">Close Notification</a>
                    <span class="gritter-title">Success</span>
                    <p>Category Added Successfully</p>
                    </div>
                </div>
                </div>
            </div>
            @endif
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark1" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Users</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span>
                              <span class="number">{{ count($users) }}</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Orders</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span>
                              <span class="number">10</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark3" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Completed Orders</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span>
                              <span class="number">5</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark4" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Uncompleted Orders</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span>
                              <span class="number">5</span>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </nav>
    </div>

  @include('admin/includes/footer')
  @else
  <script>window.location="/admin/login"</script>
  @endif
  </body>
</html>