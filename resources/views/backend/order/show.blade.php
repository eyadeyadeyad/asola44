@extends('backend.layouts.master')

@section('title','Order Detail')

@section('main-content')
<div class="card">
<h5 class="card-header">Order       <a href="{{route('order.pdf',$order->id)}}" class=" btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Generate PDF</a>
  </h5>
  <div class="card-body">
    @if($order)
    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <th>#</th>
            <th>رقم الطلب</th>
            <th>الاسم</th>
            <th>البريد الإلكتروني</th>
            <th>الكمية</th>
            <th>رسوم الشحن</th>
            <th>الإجمالي</th>
            <th>الحالة</th>
            <th>الإجراءات</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->order_number}}</td>
            <td>{{$order->first_name}} {{$order->last_name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->shipping->price}} د.ل</td>
            <td>{{number_format($order->total_amount,2)}} د.ل</td>
            <td>
                @if($order->status=='new')
                  <span class="badge badge-primary">جديد</span>
                @elseif($order->status=='process')
                  <span class="badge badge-warning">جاري التجهيز</span>
                @elseif($order->status=='delivered')
                  <span class="badge badge-success">تم التسليم</span>
                @else
                  <span class="badge badge-danger">{{$order->status}}</span>
                @endif
            </td>
            <td>
                <a href="{{route('order.edit',$order->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                <form method="POST" action="{{route('order.destroy',[$order->id])}}">
                  @csrf
                  @method('delete')
                      <button class="btn btn-danger btn-sm dltBtn" data-id={{$order->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>

        </tr>
      </tbody>
    </table>

    <section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row">
          <div class="col-lg-6 col-lx-4">
            <div class="order-info">
              <h4 class="text-center pb-4">معلومات الطلب</h4>
              <table class="table">
                    <tr class="">
                        <td>رقم الطلب</td>
                        <td> : {{$order->order_number}}</td>
                    </tr>
                    <tr>
                        <td>تاريخ الطلب</td>
                        <td> : {{$order->created_at->format('d/m/Y')}} في {{$order->created_at->format('H:i')}} </td>
                    </tr>
                    <tr>
                        <td>الكمية</td>
                        <td> : {{$order->quantity}}</td>
                    </tr>
                    <tr>
                        <td>حالة الطلب</td>
                        <td> : 
                          @if($order->status == 'new') جديد
                          @elseif($order->status == 'process') جاري التجهيز
                          @elseif($order->status == 'delivered') تم التسليم
                          @else {{$order->status}} @endif
                        </td>
                    </tr>
                    <tr>
                        <td>رسوم الشحن</td>
                        <td> : {{$order->shipping->price}} د.ل</td>
                    </tr>
                    <tr>
                      <td>كوبون الخصم</td>
                      <td> : {{number_format($order->coupon,2)}} د.ل</td>
                    </tr>
                    <tr>
                        <td>المبلغ الإجمالي</td>
                        <td> : {{number_format($order->total_amount,2)}} د.ل</td>
                    </tr>
                    <tr>
                        <!-- <td>Payment Method</td>
                        <td> : @if($order->payment_method=='cod') Cash on Delivery @else Paypal @endif</td> -->
                        <td>طريقة الدفع</td>
                        <td> : 
                            @if($order->payment_method == 'cod')
                                الدفع عند الاستلام
                            @elseif($order->payment_method == 'paypal')
                                باي بال
                            @elseif($order->payment_method == 'cardpay')
                                دفع بالبطاقة
                            @endif
                        </td>

                    </tr>
                    <!-- <tr>
                        <td>Payment Status</td>
                        <td> : {{$order->payment_status}}</td>
                    </tr> -->
                    <tr>
                      <td>حالة الدفع</td>
                      <td> : 
                          @if($order->payment_status == 'paid')
                              <span class="badge badge-success">مدفوع</span>
                          @elseif($order->payment_status == 'unpaid')
                              <span class="badge badge-danger">غير مدفوع</span>
                          @else
                              {{$order->payment_status}}
                          @endif
                      </td>
                  </tr>

              </table>
            </div>
          </div>

          <div class="col-lg-6 col-lx-4">
            <div class="shipping-info">
              <h4 class="text-center pb-4">معلومات الشحن</h4>
              <table class="table">
                    <tr class="">
                        <td>الاسم الكامل</td>
                        <td> : {{$order->first_name}} {{$order->last_name}}</td>
                    </tr>
                    <tr>
                        <td>البريد الإلكتروني</td>
                        <td> : {{$order->email}}</td>
                    </tr>
                    <tr>
                        <td>رقم الهاتف</td>
                        <td> : {{$order->phone}}</td>
                    </tr>
                    <tr>
                        <td>العنوان</td>
                        <td> : {{$order->address1}}, {{$order->address2}}</td>
                    </tr>
                    <tr>
                        <td>الدولة</td>
                        <td> : {{$order->country}}</td>
                    </tr>
                    <tr>
                        <td>المحافظة</td>
                        <td> : {{$order->state ?? 'غير محدد'}}</td>
                    </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Order Products Section -->
    <section class="order-products mt-4">
      <div class="row">
        <div class="col-12">
          <div class="order-products-info">
            <h4 class="text-center pb-4">المنتجات المطلوبة</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>الصورة</th>
                    <th>اسم المنتج</th>
                    <th>الكمية</th>
                    <th>السعر</th>
                    <th>الإجمالي</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($order->cart as $cart)
                    <tr>
                      <td>
                        @if($cart->product && $cart->product->photo)
                          @php
                            $photo = explode(',', $cart->product->photo);
                          @endphp
                          <img src="{{$photo[0]}}" alt="{{$cart->product->title}}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                        @else
                          <img src="{{asset('backend/img/thumbnail-default.jpg')}}" alt="No Image" style="width: 60px; height: 60px; object-fit: cover; border-radius: 5px;">
                        @endif
                      </td>
                      <td>
                        @if($cart->product)
                          {{$cart->product->title}}
                          @if($cart->product->size)
                            <br><small class="text-muted">المقاس: {{$cart->product->size}}</small>
                          @endif
                        @else
                          <span class="text-danger">منتج محذوف</span>
                        @endif
                      </td>
                      <td>{{$cart->quantity}}</td>
                      <td>{{number_format($cart->price, 2)}} د.ل</td>
                      <td>{{number_format($cart->amount, 2)}} د.ل</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif

  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info,.order-products-info{
        background:#ECECEC;
        padding:20px;
        border-radius: 8px;
    }
    .order-info h4,.shipping-info h4,.order-products-info h4{
        text-decoration: underline;
        color: #333;
    }
    .order-products-info table th {
        background-color: #f8f9fa;
        font-weight: 600;
        text-align: center;
    }
    .order-products-info table td {
        vertical-align: middle;
        text-align: center;
    }

</style>
@endpush
