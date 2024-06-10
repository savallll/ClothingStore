@extends('admin.layout.main')
@section('content')
    <div class="d-flex align-items-center">
        <h2>Order ID: {{ $order->id }}</h2>
        <div class="ms-4 h-75">
            {{-- @switch($order->status)
                @case(0)
                    <div class="p-2 bg-danger-subtle text-danger-emphasis rounded">{{ $order->status }}</div>
                @break

                @case(1)
                @case(2)
                @case(5)
                @case(6)
                    <div class="p-2 bg-warning-subtle text-warning-emphasis rounded">{{ $order->status }}</div>
                @break

                @case(3)
                @case(4)
                @case(7)
                    <div class="p-2 bg-success-subtle text-success-emphasis rounded">{{ $order->status }}</div>
                @break

                @default
            @endswitch --}}
            <select class="form-select form-select-lg pt-2" aria-label="Large select example" data-comment-id="{{ $order->id }}">
                <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Hủy bỏ</option>
                <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Chờ Xác nhận đơn hàng</option>
                <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Chưa được xác nhận</option>
                <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Xác nhận</option>
                <option value="5" {{ $order->status == 5 ? 'selected' : '' }}>Xử lý</option>
                <option value="6" {{ $order->status == 6 ? 'selected' : '' }}>Đang chuyển hàng</option>
                <option value="7" {{ $order->status == 7 ? 'selected' : '' }}>Hoàn thành</option>
            </select>
        </div>
    </div>

    <p class="fw-lighter">{{ $order->created_at }}</p>


    <div class="row">
        <div class="col-8">
            <div class="accordion mt-4 border-top-0 shadow" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#order_item" aria-expanded="true" aria-controls="order_item">
                            Order item
                        </button>
                    </h2>
                    <div id="order_item" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            @foreach ($order->orderDetails as $item)
                                <div class="d-flex pt-4 border-bottom pb-4">
                                    <img src="{{ asset('storage/' . $item->products->avatar) }}" alt=""
                                        height="100px" width="100px" class="border rounded">
                                    <div class="d-block ms-4">
                                        <p class="fw-lighter mb-0">{{ $item->products->productCategory->name }}</p>
                                        <div class="bolder ">{{ $item->products->name }}</div>
                                        <div class="fw-lighter pt-2">
                                            <span>
                                                size: {{ $item->size }} |
                                            </span>
                                            <span>color: {{ $item->color }}</span>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <span class="border rounded px-2 py-2">
                                            {{ number_format($item->amount, 0, ',', '.') }} đ
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion mt-4 border-top-0 shadow" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h5 bolder" type="button" data-bs-toggle="collapse"
                            data-bs-target="#summary" aria-expanded="true" aria-controls="summary">
                            Order summary
                        </button>
                    </h2>
                    <div id="summary" class="accordion-collapse collapse show ">
                        <div class="accordion-body">
                            <table class="table table-borderless border-bottom ">
                                <tbody>
                                    @foreach ($order->orderDetails as $item)
                                        <tr>
                                            <td scope="row">{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}x</td>
                                            <td>{{ $item->total }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th scope="row">Total</th>
                                        <th>{{ $order->orderDetails->count() }} item</th>

                                        <th>{{ number_format($order->orderDetails->sum('total'), 0, ',', '.') }} đ</th>

                                    </tr>
                                </tbody>

                            </table>
                            <div class="d-flex px-4">
                                <p class="fw-bold">Payments:
                                    {{ $order->payment_type == '1' ? 'VNPayment' : 'Payment later' }}</p>
                                <p class="ms-auto fw-bold">
                                    {{ $order->payment_type == '1' || $order->status == 7 ? number_format($order->orderDetails->sum('total'), 0, ',', '.') . 'đ' : '0 đ' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="accordion mt-4 border-top-0 shadow" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h5 bolder" type="button" data-bs-toggle="collapse"
                            data-bs-target="#customer" aria-expanded="true" aria-controls="customer">
                            Customer
                        </button>
                    </h2>
                    <div id="customer" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p><i class="bi bi-person-fill"></i> {{ $order->user->name }}</p>
                            <p><i class="bi bi-bag"></i> 5</p>
                            <p><i class="bi bi-clock-history"></i> {{ $order->user->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mt-4 border-top-0 shadow" id="accordionPanelsStayOpenExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h5 bolder" type="button" data-bs-toggle="collapse"
                            data-bs-target="#contact" aria-expanded="true" aria-controls="contact">
                            Contact
                        </button>
                    </h2>
                    <div id="contact" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p><i class="bi bi-envelope-fill"></i> {{ $order->user->email }}</p>
                            <p><i class="bi bi-telephone-fill"></i> {{ $order->user->phone }}</p>
                            <p><i class="bi bi-geo-alt-fill"></i> {{ $order->user->town_city }} -
                                {{ $order->user->street_address }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion mt-4 border-top-0 shadow" id="accordionPanelsStayOpenExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button h5 bolder" type="button" data-bs-toggle="collapse"
                            data-bs-target="#shippingAdsress" aria-expanded="true" aria-controls="shippingAdsress">
                            Shipping adsress
                        </button>
                    </h2>
                    <div id="shippingAdsress" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <p><i class="bi bi-person-fill"></i> {{ $order->first_name }} {{ $order->last_name }}</p>
                            <p><i class="bi bi-telephone-fill"></i> {{ $order->phone }}</p>
                            <p><i class="bi bi-geo-alt-fill"></i> {{ $order->town_city }} - {{ $order->street_address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>
        .table td,
        .table th {
            padding: 20px;
            /* Điều chỉnh giá trị padding tùy theo nhu cầu */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElements = document.querySelectorAll('.form-select');

            selectElements.forEach(select => {
                select.addEventListener('change', function() {
                    const commentId = this.dataset.commentId; // Lấy comment ID từ data attribute
                    const status = this.value;

                    fetch(`/admin/order/update/${commentId}`, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token
                            },
                            body: JSON.stringify({
                                status: status
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log('Status updated successfully');
                            } else {
                                console.error('Failed to update status');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        });
    </script>
@endsection
