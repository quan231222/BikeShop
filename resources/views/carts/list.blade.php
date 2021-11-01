@extends('main')

@section('content')
    <form class="bg0 p-t-130 p-b-85 " method="post" >
        @include('admin.alert')
        @if(count($products) != 0)
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            @php    $total = 0;    @endphp
                            <table class="table-shopping-cart">
                                <tbody>
                                    <tr class="table_head">
                                        <th class="column-1" style="text-align:center">Sản Phẩm</th>
                                        <th class="column-2"></th>
                                        <th class="column-3" style="text-align:center">Giá</th>
                                        <th class="column-4" style="text-align:center">Số Lượng</th>
                                        <th class="column-5" style="text-align:center">Tổng tiền</th>
                                        <th class="column-6">&nbsp;</th>
                                    </tr>

                                    @foreach ($products as $key => $product)
                                        @php
                                            $price = $product->price_sale != 0 ? $product->price_sale : $product->price;
                                            $priceEnd = $price * $carts[$product->id];
                                            $total += $priceEnd;
                                        @endphp
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src=" {{ $product->thumb }}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{ $product->name }}</td>
                                            <td class="column-3">{{ number_format($price, 0, '', '.') }} đ</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product" type="number" 
                                                            name="num_product[{{ $product->id }}]" value="{{ $carts[$product->id] }}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">{{ number_format($priceEnd, 0, '', '.') }} đ</td>
                                            <td class="p-r-50">
                                                <a href="/carts/delete/{{ $product->id }}">Xoá</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <div class="flex-c-m stext-101 cl2 size-118 bg0 p-lr-15 trans-04 m-tb-5"></div>
                                <div class="flex-c-m stext-101 cl2 size-118 bg0 p-lr-15 trans-04 m-tb-5"></div>
                            </div>

                            <input type="submit" value="Cập nhật giỏ hàng" formaction="/update-cart" 
                                class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            @csrf
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm" style="border-radius: 20px">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Tổng Giỏ Hàng
                        </h4>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Tổng cộng:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">
                                    {{ number_format($total, 0, '', '.') }} đ
                                </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Thông tin
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-112 cl8">
									Nhập thông tin của bạn:
								</p>
								
								<div class="p-t-15">
									<div class="bg0 m-b-12">
                                        <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="name" placeholder="Tên khách Hàng" required>
                                    </div>

                                    <div class="bg0 m-b-12">
                                        <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="phone" placeholder="Số Điện Thoại" required>
                                    </div>

                                    <div class="bg0 m-b-12">
                                        <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="address" placeholder="Địa Chỉ Giao Hàng">
                                    </div>

                                    <div class="bg0 m-b-12">
                                        <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="email" placeholder="Email Liên Hệ">
                                    </div>

                                    <div class="bg0 m-b-12">
                                        <textarea class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" name="content" placeholder="Ghi Chú Cho Chúng Tôi"></textarea>
                                    </div>
										
								</div>
							</div>
						</div>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Đặt Hàng
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="text-center"><h2>Giỏ Hàng Rỗng</h2></div>
        @endif
    </form>    
@endsection