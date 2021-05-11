@extends('layouts.app')
@section('content')
@include('includes.sidebar')
    <div class="wrapper ">
        
        <div class="main-panel">
          <div class="container">
            <h3>Dashboard</h3>
          </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">bolt</i>
                                    </div>
                                    <p class="card-category">Total Clicks</p>
                                    <h3 class="card-title">{{$clicks}}
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">Purchase</p>
                                    <h3 class="card-title">{{$purchase}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">shopping_cart</i>
                                    </div>
                                    <p class="card-category">Add to Cart</p>
                                    <h3 class="card-title">{{$cart}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">timeline</i>
                                    </div>
                                    <p class="card-category">Sales</p>
                                    <h4 class="card-title">${{$sales}}</h4>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">category</i>
                                    </div>
                                    <p class="card-category">Categories</p>
                                    <h3 class="card-title">Top 3</h3>
                                </div>
                                @foreach (array_keys($cat) as $item)
                                <div class="card-footer">
                                    <div class="stats">
                                            <h5>{{$item}}</h5>
                                    </div>
                                </div>
                                <hr class="w-100 m-0">
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-chart">
                                <div class="card-header card-header-success">
                                    <div class="ct-chart" id="dailySalesChart"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title">Daily Sales</h4>
                                    <p class="card-category">
                                        <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span>
                                        increase in today sales.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">access_time</i> updated 4 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>


@endsection

@section('bottom-scripts')
<script>
    $('#dashboard').addClass('active');
</script>
@endsection