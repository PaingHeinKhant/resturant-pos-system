<div class="bg-white p-3 sticky-top min-vh-100">


    <div class="p-6 my-4 text-center ">
        <div class="">

            <h3 class="fw-bolder ">Grill & Chill.</h3>
        </div>
        <span class="small">Restaurant Admin Dashboard</span>
    </div>

    <div class="list-group my-3">
        <a class="list-group-item list-group-item-action py-3  side-hover border-0" href="{{route('home')}}">
            <i class="bi bi-house fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>
            <span class="font-hover text-hover">Dashboard</span>
        </a>
    </div>


    <p class="text-black-50 fw-bolder  ">Management</p>
    <div class="list-group mb-4 border-0">

        <a class="list-group-item list-group-item-action py-3  side-hover border-0  " href="{{route('category.index')}}">
            <i class="bi bi-egg-fried fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>
            <span class="font-hover text-hover ">Category</span>
        </a>
        <a class="list-group-item list-group-item-action  py-3  side-hover border-0 " href="{{route('menu.index')}}">
            <i class="bi bi-egg-fried fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>
            <span class="font-hover text-hover">Menu</span>
        </a>
        <a class="list-group-item list-group-item-action py-3  side-hover border-0 " href="{{route('table.index')}}">
            <i class="bi bi-diagram-2-fill fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>
            <span class="font-hover text-hover">Table</span>
        </a>
{{--        <a class="list-group-item list-group-item-action py-3  side-hover border-0 " href="#">--}}
{{--            <i class="bi bi-person-fill fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>--}}
{{--            <span class="font-hover text-hover">Chief</span>--}}
{{--        </a>--}}

    </div>


    <p class="text-black  ">Order and Accountant</p>
    <div class="list-group mb-1">
        <a class="list-group-item list-group-item-action py-3  side-hover border-0" href="{{route('order.index')}}">
            <i class="bi bi-menu-up fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>
            <span class="font-hover text-hover">Order</span>
        </a>
    </div>

{{--    <div class="list-group mb-1">--}}
{{--        <a class="list-group-item list-group-item-action py-3  side-hover border-0" href="{{route('cashier.index')}}">--}}
{{--            <i class="bi bi-cash-coin fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>--}}
{{--            <span class="font-hover text-hover"> Accountant</span>--}}
{{--        </a>--}}
{{--    </div>--}}


{{--    <div class="list-group mb-1">--}}
{{--        <a class="list-group-item list-group-item-action py-3  side-hover border-0" href="#">--}}
{{--            <i class="bi bi-person-fill fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>--}}
{{--            <span class="font-hover text-hover">User Mange Center</span>--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <div class="list-group mb-1">--}}
{{--        <a class="list-group-item list-group-item-action py-3  side-hover border-0" href="#">--}}
{{--            <i class="bi bi-flag-fill fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>--}}
{{--            <span class="font-hover text-hover">Report</span>--}}
{{--        </a>--}}
{{--    </div>--}}

{{--    <div class="list-group mb-1">--}}
{{--        <a class="list-group-item list-group-item-action py-3  side-hover border-0" href="#">--}}
{{--            <i class="bi bi-lightbulb-off fs-5 py-2 px-2 me-3 bg-light shadow icon-hover rounded-3"></i>--}}
{{--            <span class="font-hover text-hover">Logout</span>--}}
{{--        </a>--}}
{{--    </div>--}}




    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
    </form>

</div>
