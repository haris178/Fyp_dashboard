@extends('layouts.app')
@section('content')
@include('includes.sidebar')
<div class="wrapper ">

    <div class="main-panel">
        <div class="container">
            <h3>Products</h3>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title ">Events</h4>
                                <p class="card-category"> All the events are displayed here</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Event Name
                                            </th>
                                            <th>
                                                Product Name
                                            </th>
                                            <th>
                                                Time
                                            </th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach ($events as $item)
                                            <tr>
                                               <td>{{$item['name']}}</td>
                                               <td>
                                                   <?php $i=0; ?>
                                                @foreach ($item['product_name'] as $products)
                                                    @if ($i>0)
                                                        ||
                                                    @endif
                                                    {{$products}}
                                                    
                                                    <?php $i++; ?>
                                                @endforeach   
                                                </td>    
                                               <td>{{$item['time']}}</td>   
                                               
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
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
    $('#events').addClass('active');
</script>
@endsection