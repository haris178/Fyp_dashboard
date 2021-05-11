<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('img/sidebar-3.jpg')}}">

    <div class="logo"><a href="{{url('/dashboard')}}" class="simple-text logo-normal">
            Personalization Engine
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item" id="dashboard">
                <a class="nav-link" href="{{url('/dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item " id="events">
                <a class="nav-link" href="{{url('/events')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Events</p>
                </a>
            </li>
            <li class="nav-item " id="products">
                <a class="nav-link" href="{{url('/products')}}">
                    <i class="material-icons">library_books</i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item " id="feeds">
                <a class="nav-link" href="{{url('/product_feed')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Feeds</p>
                </a>
            </li>
           
        </ul>
    </div>
</div>
