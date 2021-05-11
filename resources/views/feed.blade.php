@extends('layouts.app')
@section('content')
@include('includes.sidebar')
<div class="wrapper ">

    <div class="main-panel">
        <div class="container">
            <h3>Feeds</h3>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('/upload-feed')}}" method="POST">
                            @csrf
                            <div>
                                <input type="file" class="form-control" name="prd_feed">
                                <button class="btn btn-primary" type="submit">Upload Feed</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('bottom-scripts')
<script>
    $('#feeds').addClass('active');
</script>
@endsection