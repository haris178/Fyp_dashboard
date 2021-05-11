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
                                <h4 class="card-title ">Products</h4>
                                <p class="card-category"> All the products are displayed here</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                sku
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                InStock
                                            </th>
                                            <th>
                                                Price
                                            </th>
                                            <th>
                                                Category
                                            </th>
                                            <th>
                                                Sub Category
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                            <tr>
                                               <td>{{$item->sku}}</td>    
                                               <td>{{$item->name}}</td>   
                                               <td>
                                                @if ($item->in_stock==1)
                                                 Yes  
                                                 @else
                                                 No 
                                                @endif   
                                                </td>   
                                               <td>{{$item->price}}</td>  
                                               <?php $arr=explode("|",$item->categories) ?>
                                               <td>{{$arr[0]}}</td>  
                                               <td>
                                                   @if (count($arr)>1)
                                                       {{$arr[1]}}
                                                    @else
                                                    NA
                                                   @endif
                                                   </td>   
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
    $('#products').addClass('active');
</script>
@endsection