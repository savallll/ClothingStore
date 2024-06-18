@extends('layouts.master')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>User Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="tab" data-bs-toggle="tab"
                                data-bs-target="#dash" type="button"><i class="fas fa-angle-right"></i>Dashboard</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="1-tab" data-bs-toggle="tab" data-bs-target="#order"
                                type="button"><i class="fas fa-angle-right"></i>Orders</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="2-tab" data-bs-toggle="tab"
                                data-bs-target="#wishlist" type="button"><i
                                    class="fas fa-angle-right"></i>Wishlist</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="3-tab" data-bs-toggle="tab" data-bs-target="#save"
                                type="button"><i class="fas fa-angle-right"></i>Saved
                                Address</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="4-tab" data-bs-toggle="tab" data-bs-target="#pay"
                                type="button"><i class="fas fa-angle-right"></i>Payment</button>
                        </li>

                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="5-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button"><i class="fas fa-angle-right"></i>Profile</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link font-light" id="6-tab" data-bs-toggle="tab"
                                data-bs-target="#security" type="button"><i
                                    class="fas fa-angle-right"></i>Security</button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dash">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="page-title title title1 title-effect">
                                        <h2>My Dashboard</h2>
                                    </div>
                                    <div class="welcome-msg">
                                        <h6 class="font-light">Hello, <span>MARK JECNO !</span></h6>
                                        <p class="font-light">From your My Account Dashboard you have the ability to
                                            view a snapshot of your recent account activity and update your account
                                            information. Select a link below to view or edit information.</p>
                                    </div>

                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/box.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/box1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">total order</h5>
                                                            <h3>{{ $ordersCount }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/sent.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/sent1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">pending orders</h5>
                                                            <h3>{{ $pendingOrdersCount }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="/assets/images/svg/wishlist.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="/assets/images/svg/wishlist1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">wishlist</h5>
                                                            <h3>63874</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-account box-info">
                                        <div class="box-head">
                                            <h3>Account Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Contact Information</h4><a href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">MARK JECNO</h6>
                                                        <h6 class="font-light">MARk-JECNO@gmail.com</h6>
                                                        <a href="javascript:void(0)">Change Password</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="box">
                                                    <div class="box-title">
                                                        <h4>Newsletters</h4><a href="javascript:void(0)">Edit</a>
                                                    </div>
                                                    <div class="box-content">
                                                        <h6 class="font-light">You are currently not subscribed to any
                                                            newsletter.</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="box address-box">
                                                <div class="box-title">
                                                    <h4>Address Book</h4><a href="javascript:void(0)">Manage
                                                        Addresses</a>
                                                </div>
                                                <div class="box-content">
                                                    <div class="row g-4">
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Billing Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                billing address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h6 class="font-light">Default Shipping Address</h6>
                                                            <h6 class="font-light">You have not set a default
                                                                shipping address.</h6>
                                                            <a href="javascript:void(0)">Edit Address</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="order">
                            <div class="box-head mb-3">
                                <h3>My Order</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Ngày Đặt Đơn </th>
                                            <th scope="col"> Hình thức thanh toán</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Tổng Tiền</th>
                                            <th scope="col">View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>

                                                <td>
                                                    <p class="mt-0">{{ $order->id }}</p>
                                                </td>

                                                <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d-m-Y') }}</td>
                                                <td>{{ $order->payment_type == '0' ? 'Trực tiếp' : 'Online' }}</td>
                                                <td>
                                                    @if ($order->status == 1)
                                                        <p class="danger-button btn btn-sm">
                                                            {{ \App\Untilities\Constant::$order_status[$order->status] }}
                                                        </p>
                                                    @else
                                                        <p class="success-button btn btn-sm">
                                                            {{ \App\Untilities\Constant::$order_status[$order->status] }}
                                                        </p>
                                                    @endif

                                                </td>

                                                @if ($order->status == 1)
                                                    {{-- Giả sử trạng thái 1 là trạng thái cho phép hủy đơn hàng --}}
                                                    <td>
                                                        <form
                                                            action="/my_account/dashboard/cancel_order/{{ $order->id }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">Hủy đơn
                                                                hàng</button>
                                                        </form>
                                                    </td>
                                                @endif

                                                <td>
                                                    <p class="theme-color fs-6">
                                                        {{ number_format($order->total, 3) }}VND
                                                    </p>
                                                </td>
                                                <td>
                                                    <a href="/my_account/dashboard/{{ $order->id }}">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade table-dashboard dashboard wish-list-section" id="wishlist">
                            <div class="box-head mb-3">
                                <h3>My Wishlish</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table cart-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th scope="col">image</th>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product Details</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/1.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/2.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125367</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Outwear & Coats</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/3.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125948</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/4.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/5.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#127569</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Hoodie t-shirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="details.php">
                                                    <img src="assets/images/fashion/product/front/6.jpg"
                                                        class="blur-up lazyload" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <p class="m-0">#125021</p>
                                            </td>
                                            <td>
                                                <p class="fs-6 m-0">Men's Sweatshirt</p>
                                            </td>
                                            <td>
                                                <p class="theme-color fs-6">$49.54</p>
                                            </td>
                                            <td>
                                                <a href="cart.php" class="btn btn-solid-default btn-sm fw-bold">Move to
                                                    Cart</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard" id="save">
                            <div class="box-head">
                                <h3>Save Address</h3>
                                <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addAddress"><i class="fas fa-plus"></i>
                                    Add New Address</button>
                            </div>
                            <div class="save-details-box">
                                <div class="row g-3">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Mark Jugal</h5>
                                                <div class="save-position">
                                                    <h6>Home</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Method Zaki</h5>
                                                <div class="save-position">
                                                    <h6>Office</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="save-details">
                                            <div class="save-name">
                                                <h5>Mark Jugal</h5>
                                                <div class="save-position">
                                                    <h6>Home</h6>
                                                </div>
                                            </div>

                                            <div class="save-address">
                                                <p class="font-light">549 Sulphur Springs Road</p>
                                                <p class="font-light">Downers Grove, IL</p>
                                                <p class="font-light">60515</p>
                                            </div>

                                            <div class="mobile">
                                                <p class="font-light mobile">Mobile No. +1-123-456-7890</p>
                                            </div>

                                            <div class="button">
                                                <a href="javascript:void(0)" class="btn btn-sm">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-sm">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard" id="pay">
                            <div class="box-head">
                                <h3>Card & Payment</h3>
                                <button class="btn btn-solid-default btn-sm fw-bold ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addPayment"><i class="fas fa-plus"></i>
                                    Add New Card</button>
                            </div>

                            <div class="card-details-section">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>12/23</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>mark jecno</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="assets/images/payment-icon/1.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details card-visa">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>12/23</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>mark jecno</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="assets/images/payment-icon/2.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6">
                                        <div class="payment-card-detail">
                                            <div class="card-details dabit-card">
                                                <div class="card-number">
                                                    <h4>XXXX - XXXX - XXXX - 2548</h4>
                                                </div>

                                                <div class="valid-detail">
                                                    <div class="title">
                                                        <span>valid</span>
                                                        <span>thru</span>
                                                    </div>
                                                    <div class="date">
                                                        <h3>12/23</h3>
                                                    </div>
                                                    <div class="primary">
                                                        <span class="badge bg-pill badge-light">primary</span>
                                                    </div>
                                                </div>

                                                <div class="name-detail">
                                                    <div class="name">
                                                        <h5>mark jecno</h5>
                                                    </div>
                                                    <div class="card-img">
                                                        <img src="assets/images/payment-icon/3.jpg"
                                                            class="img-fluid blur-up lazyloaded" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="edit-card">
                                                <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                    href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                                <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                    delete</a>
                                            </div>
                                        </div>

                                        <div class="edit-card-mobile">
                                            <a data-bs-toggle="modal" data-bs-target="#addPayment"
                                                href="javascript:void(0)"><i class="far fa-edit"></i> edit</a>
                                            <a href="javascript:void(0)"><i class="far fa-minus-square"></i>
                                                delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade dashboard-profile dashboard" id="profile">
                            <div class="container">
                                <div class="row py-3">
                                    <div class="col-3">
                                        <h3>Thông tin cá nhân</h3>
                                    </div>
                                    <div class="col-9 border-end-0 rounded px-4 py-4 bg-body-tertiary shadow">
                                        <div class="text-center">
                                            <img id="clickableImage"
                                                src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : Auth::user()->defaultAvatar() }}"
                                                alt="profile" height="100px" width="100px"
                                                class="border rounded-circle" style="cursor: pointer">
                                        </div>
                                        <div class="py-4">
                                            <form action="{{ route('admin.profile.update') }}" method="post"
                                                class="pt-2" enctype="multipart/form-data">
                                                @csrf
                                                @method('PATCH')
                                                <input type="file" id="fileInput" class="d-none" name="avatar">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="Name"
                                                                placeholder="" name='name'
                                                                value="{{ Auth::user()->name }}">
                                                            <label for="Name">Name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="number" class="form-control" id="Phone"
                                                                placeholder="" name="phone"
                                                                value="{{ Auth::user()->phone }}">
                                                            <label for="Phone">Phone</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-floating mb-3">
                                                            <input type="text" class="form-control" id="Company"
                                                                placeholder="" name="company_name"
                                                                value="{{ Auth::user()->company_name }}">
                                                            <label for="Company">Company</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if (auth()->user()->province_id || auth()->user()->province_id || auth()->user()->province_id)
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-floating mb-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ auth()->user()->getAddressAttribute() }}"
                                                                    aria-label="Disabled input example" disabled readonly>
                                                                <label for="Name">Địa chỉ</label>
                                                                {{-- <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <a class="accordion-button collapsed text-primary ms-1"
                                                                            type="button" data-bs-toggle="collapse"
                                                                            data-bs-target="#collapseTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            thay đổi
                                                                        </a>
                                                                    </h2>
                                                                    <div id="collapseTwo"
                                                                        class="accordion-collapse collapse"
                                                                        data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <div class="row mt-3">
                                                                                <div class="col-4">
                                                                                    <div class="form-floating mb-3">
                                                                                        <select class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            id="province"
                                                                                            name="province_id"
                                                                                            onchange="loadDistricts()">
                                                                                            <option value="">--Chọn
                                                                                                tỉnh/thành--</option>
                                                                                            @foreach ($provinces as $province)
                                                                                                <option
                                                                                                    value="{{ $province->id }}">
                                                                                                    {{ $province->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <div class="form-floating mb-3">
                                                                                        <select class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            id="district"
                                                                                            name="district_id"
                                                                                            onchange="loadWards()">
                                                                                            <option value="">--Chọn
                                                                                                quận/huyện--</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-4">
                                                                                    <div class="form-floating mb-3">
                                                                                        <select class="form-select"
                                                                                            aria-label="Default select example"
                                                                                            id="ward" name="ward_id">
                                                                                            <option value="">--Chọn
                                                                                                xã/phường--</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                <a class="" data-bs-toggle="collapse"
                                                                    href="#changeEmail" role="button"
                                                                    aria-expanded="false" aria-controls="changeEmail">
                                                                    Thay đổi
                                                                </a>
                                                                <div class="collapse" id="changeEmail">
                                                                    <div class="card card-body text-center border-0">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select border"
                                                                                        aria-label="Default select example"
                                                                                        id="province" name="province_id"
                                                                                        onchange="loadDistricts()">
                                                                                        <option value="">--Chọn
                                                                                            tỉnh/thành--</option>
                                                                                        @foreach ($provinces as $province)
                                                                                            <option
                                                                                                value="{{ $province->id }}">
                                                                                                {{ $province->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select border"
                                                                                        aria-label="Default select example"
                                                                                        id="district" name="district_id"
                                                                                        onchange="loadWards()">
                                                                                        <option value="">--Chọn
                                                                                            quận/huyện--</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-4">
                                                                                <div class="form-floating mb-3">
                                                                                    <select class="form-select border"
                                                                                        aria-label="Default select example"
                                                                                        id="ward" name="ward_id">
                                                                                        <option value="">--Chọn
                                                                                            xã/phường--</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example" id="province"
                                                                    name="province_id" onchange="loadDistricts()">
                                                                    <option value="">--Chọn tỉnh/thành--</option>
                                                                    @foreach ($provinces as $province)
                                                                        <option value="{{ $province->id }}">
                                                                            {{ $province->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example" id="district"
                                                                    name="district_id" onchange="loadWards()">
                                                                    <option value="">--Chọn quận/huyện--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example" id="ward"
                                                                    name="ward_id">
                                                                    <option value="">--Chọn xã/phường--</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-outline-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-3">
                                        <h3>Thay đổi mật khẩu</h3>
                                    </div>
                                    <div class="col-9 border-end-0 rounded px-4 py-4 bg-body-tertiary shadow">
                                        <form action="{{ route('admin.profile.changePassword') }}" class="pt-2">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="oldPassWord"
                                                    name="oldPassWord" placeholder="">
                                                <label for="oldPassWord">Mật khẩu cũ</label>
                                                @error('oldPassWord')
                                                    <small class="text-danger">{{ $errors->first('oldPassWord') }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="newPassWord"
                                                    name="newPassWord" placeholder="">
                                                <label for="newPassWord">Mật khẩu mới</label>
                                                @error('newPassWord')
                                                    <small class="text-danger">{{ $errors->first('newPassWord') }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="password" class="form-control" id="confirmPassWord"
                                                    name="confirmPassWord" placeholder="">
                                                <label for="confirmPassWord">Xác nhận mật khẩu</label>
                                                @error('confirmPassWord')
                                                    <small class="text-danger">{{ $errors->first('confirmPassWord') }}</small>
                                                @enderror
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-outline-primary">Change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script>
                                var districts = @json($districts);
                                var wards = @json($wards);
                            </script>
                        </div>

                        <div class="tab-pane fade dashboard-security dashboard" id="security">
                            <div class="box-head">
                                <h3>Delete Your Account</h3>
                            </div>
                            <div class="security-details">
                                <h5 class="font-light mt-3">Hi <span> Mark Enderess,</span>
                                </h5>
                                <p class="font-light mt-1">We Are Sorry To Here You Would Like To Delete Your Account.
                                </p>
                            </div>

                            <div class="security-details-1 mb-0">
                                <div class="page-title">
                                    <h4 class="fw-bold">Note</h4>
                                </div>
                                <p class="font-light">Deleting your account will permanently remove your profile,
                                    personal settings, and all other associated information. Once your account is
                                    deleted, You will be logged out and will be unable to log back in.</p>

                                <p class="font-light mb-4">If you understand and agree to the above statement, and would
                                    still like to delete your account, than click below</p>

                                <button class="btn btn-solid-default btn-sm fw-bold rounded" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal">Delete Your
                                    Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->
@endsection
