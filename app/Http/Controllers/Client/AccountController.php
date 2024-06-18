<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use App\Models\Ward;
use App\Models\Carts;
use App\Models\Coupon;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Service\Order\OrderServiceInterface;

class AccountController extends Controller
{
    private $orderService;
    public function __construct(OrderServiceInterface $orderService)
    {
        $this->orderService= $orderService;
    }
   
    public function index(){
        $orders = $this->orderService->getOrderUserId(Auth::id());
        $ordersCount = count($orders);
        $pendingOrdersCount = 0;
        foreach ($orders as $order) {
            if ($order->status === 1) {
                $pendingOrdersCount++;
            }
        }

        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();

        return view('Client.my_account.index',compact('orders','ordersCount','pendingOrdersCount','provinces','districts','wards'));
    }
    public function show($id){
        
        $order = $this->orderService->find($id);
        return view('Client.my_account.show',compact('order'));
    }
    public function cancelOrder($id)
    {
        // Tìm đơn hàng theo ID
        $order = $this->orderService->find($id);

        // Kiểm tra xem đơn hàng có tồn tại và có thể hủy không
        if ($order && $order->status == 1) { // Giả sử trạng thái 1 là trạng thái có thể hủy
            // Thay đổi trạng thái đơn hàng
            $order->status = 0; // Giả sử trạng thái 0 là trạng thái đã hủy
            $order->save();

            return redirect()->back()->with('success', 'Đơn hàng đã được hủy.');
        }

        return redirect()->back()->with('error', 'Không thể hủy đơn hàng này.');
    }
    
}
