<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <base href="/public">
    <!-- Favicons -->
    <link rel="icon" type="" href="home/image/Rectangle.png">

    <link rel="stylesheet" href="home/css/bootstrap.min.css">

    <link rel="stylesheet" href="home/css/all.min.css">

    <link rel="stylesheet" href="home/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="home/css/style.css">

    <link rel="stylesheet" href="home/css/services.css">
    <title>Checkout</title>


</head>

<body>
    <script></script>
    <!-- header -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            @include('home.nav')
        </div>
    </header>


    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('home/images/services\ \(1\).jpg')">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h2>Checkout</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Checkout</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <div class="container py-5">

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Order Placed Successfully</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your order has been placed successfully!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  @if(session('success'))
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      });
    </script>
  @endif

  <!--End of Modal-->

            <div class="container">
                <div class="row">

                    <div class="col-md-4 order-2">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your Cart</span>
                            <span class="badge rounded-pill bg-secondary">{{ $cart->count() }}</span>
                        </h4>

                        <ul class="list-group mb-3">
                            @foreach ($cart as $item)
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{ $item->product_title }}</h6>
                                        <small class="text-muted">{{ $item->product_description }}</small>
                                    </div>
                                    <span class="text-muted">{{ $item->price }}</span>
                                </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total Products (EGP)</span>
                                <strong id="productsTotal">{{ number_format($totalPrice, 2) }}</strong>
                            </li>
                            <li id="deliveryFeeItem" class="list-group-item d-flex justify-content-between d-none">
                                <span>Delivery Fee (EGP)</span>
                                <strong id="deliveryFee">0.00</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Taxes (EGP)</span>
                                <strong id="taxes">15.00</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (EGP)</span>
                                <strong id="totalPrice">{{ number_format($totalPrice + 15, 2) }}</strong>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-8 order-1">
                        <h4 class="mb-3">Billing Info and Address</h4>
                        <form method="POST" action="{{ route('checkout.add_order') }}">
                            @csrf
                            <!-- Add your billing and address fields here -->
                            <div class="row">
                                <div class="col mb-4">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        required>
                                </div>
                                <div class="col mb-4">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                        required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="you@example.com"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="1234 Main St"
                                    required>
                            </div>
                            <div class="row">
                                <div class="col mb-4">
                                    <label for="street_name">Street Name</label>
                                    <input type="text" class="form-control" name="street_name"
                                        placeholder="Street Name" required>
                                </div>
                                <div class="col mb-4">
                                    <label for="building_name_no">Building Name/Number</label>
                                    <input type="text" class="form-control" name="building_name_no"
                                        placeholder="Building Name/Number" required>
                                </div>
                            </div>

                            <hr class="mb-4">

                            <h4 class="mb-3">Payment Method</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_status"
                                    value="cash_on_delivery" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">Cash on Delivery</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_status"
                                    value="pay_online" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Pay Online</label>
                            </div>

                            <div id="onlinePaymentField" style="display: none;">
                                <div class="row">
                                    <div class="col mb-4">
                                        <label for="name_on_card">Name on card</label>
                                        <input type="text" class="form-control" name="name_on_card">
                                        <small class="text-muted">Full name, as displayed on the card</small>
                                    </div>
                                    <div class="col mb-4">
                                        <label for="credit_card_number">Credit card Number</label>
                                        <input type="text" class="form-control" name="credit_card_number"
                                            placeholder="1234-5678-9012">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="expiration_date">Expiry Date</label>
                                        <input type="text" class="form-control" name="expiration_date">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="cvv">CVV</label>
                                        <input type="text" class="form-control" name="cvv">
                                    </div>
                                </div>
                            </div>

                            <hr class="mb-4">

                            <h4 class="mb-3">Delivery Status</h4>
                            <div class="form-check">
                                <input class="form-check-input delivery-status" type="radio" name="delivery_status"
                                    value="standard" id="flexRadioDefault3" checked>
                                <label class="form-check-label" for="flexRadioDefault3">Standard Delivery
                                    (Free)</label>
                                <small class="text-muted" id="deliveryDateText">Expected delivery date:
                                    {{ now()->addDays(3)->format('Y-m-d') }}</small>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input delivery-status" type="radio" name="delivery_status"
                                    value="today" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">Same-day Delivery (EGP
                                    35.00)</label>
                                <small class="text-muted">Same-day delivery fee: EGP 35.00</small>
                            </div>

                            <hr class="mb-4">

                            <button class="btn btn-primary btn-lg btn-block" type="submit">Place Your Order</button>
                            <input type="hidden" name="final_total_price" id="final_total_price"
                                value="{{ $totalPrice + 15 }}">
                        </form>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const deliveryStatusInputs = document.querySelectorAll('.delivery-status');
                    const totalPriceElement = document.getElementById('totalPrice');
                    const deliveryFeeItem = document.getElementById('deliveryFeeItem');
                    const deliveryFeeElement = document.getElementById('deliveryFee');
                    const finalTotalPriceInput = document.getElementById('final_total_price');
                    const baseTotalPrice = parseFloat('{{ $totalPrice }}');
                    const taxes = 15.00;

                    deliveryStatusInputs.forEach(input => {
                        input.addEventListener('change', function() {
                            let newTotalPrice = baseTotalPrice + taxes; // Base price + taxes

                            if (this.value === 'today') {
                                deliveryFeeItem.classList.remove('d-none');
                                deliveryFeeItem.classList.add('d-flex');
                                deliveryFeeElement.innerText = '35.00';
                                newTotalPrice += 35.00; // Add 35 EGP for same-day delivery
                            } else {
                                deliveryFeeItem.classList.remove('d-flex');
                                deliveryFeeItem.classList.add('d-none');
                                deliveryFeeElement.innerText = '0.00';
                            }

                            totalPriceElement.innerText = newTotalPrice.toFixed(2);
                            finalTotalPriceInput.value = newTotalPrice.toFixed(2);
                        });
                    });

                    const paymentRadios = document.querySelectorAll('input[name="payment_status"]');
                    const onlinePaymentField = document.getElementById('onlinePaymentField');

                    paymentRadios.forEach(radio => {
                        radio.addEventListener('change', function() {
                            if (this.value === 'pay_online') {
                                onlinePaymentField.style.display = 'block';
                            } else {
                                onlinePaymentField.style.display = 'none';
                            }
                        });
                    });
                });
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="home/js/bootstrap.bundle.min.js"></script>
            <script src="home/js/index.js"></script>
</body>

</html>
