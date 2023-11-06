<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>



<body class="bg-dark text-light">
    <!-- address -->
    <div class="container">
        <div class="mt-5 mb-4 row">
            <div class="col-12"> </div>
            <button class="btn btn-outline-info btn-block">+ Add New Address</button>
        </div>
        <!-- pay-method -->
        <div class="mb-2 row">
            <div class="font-weight-bold col-12"> Payment Method</div>
        </div>
        <!-- mastercard -->

        <div class="mb-1 bg-secondary row rounded-5">
            <div class=" col-1">
                <img src="{{ asset('img/mastercard-og-image.png') }}" width="30px" height="30px">
            </div>
            <div class="mt-2 mb-2 col-10"> Mastercard</div>
            <div class="col-1 float-right ">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                    <label class="custom-control-label" for="customRadio"></label>
                </div>
            </div>
        </div>

        <!-- cod -->
        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-1">
                <img src="{{ asset('img/cash-on-delivery.png') }}" width="20px" height="20px">
            </div>
            <div class=" col-10"> Cash On Delievery</div>
            <div class=" col-1 float-right">
                <div class="custom-control custom-radio custom-control-inline ">
                    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                    <label class="custom-control-label" for="customRadio"></label>
                </div>
            </div>
        </div>
        <!-- addpayment -->
        <div class="mt-4 mb-2 row">
            <div class="col-12"> </div>
            <button class="btn btn-outline-info btn-block">+ Add Payment Method</button>
        </div>
        <!-- order-summary -->
        <div class="mb-2 row">
            <div class="font-weight-bold col-12"> Order Summary</div>
        </div>
        <!-- sum-menu -->

        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-11"> Special Platter</div>
            <div class="mt-2 mb-2 col-1 text-info"> 1x </div>
        </div>
        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-11"> Pepperoni Pizza</div>
            <div class="mt-2 mb-2 col-1 text-info"> 1x </div>
        </div>
        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-11"> Burger</div>
            <div class="mt-2 mb-2 col-1 text-info"> 1x </div>
        </div>
        <!-- cost -->
        <div class="mt-2 mb-2 row">
            <div class="font-weight-bold col-12"> Cost Summary</div>
        </div>
        <!-- cost-menu -->

        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-10"> Shipping</div>
            <div class="mt-2 mb-2 col-2 text-info"> $0.20 </div>
        </div>
        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-10"> Items Total</div>
            <div class="mt-2 mb-2 col-2 text-info"> $35.80 </div>
        </div>
        <div class="bg-secondary row">
            <div class="mt-2 mb-2 col-10"> Total Payment</div>
            <div class="mt-2 mb-2 col-2 text-info"> $36.00 </div>
        </div>
        <!-- confirm -->
        <div class="mt-4 mb-4 row">
            <div class="col-12"> </div>
            <button class="btn btn-info btn-block">Confirm Order</button>
        </div>
    </div>

</body>
</html>
