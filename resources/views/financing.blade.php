@extends('layouts.pages')

@section('content')
     <!-- Feature Section Begin -->
 <section class="feature spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="feature__text">
                    <div class="section-title">
                        <span>Financing</span>
                        <h2>EXECUTIVE SUPER RIDES</h2>
                    </div>
                    <div class="feature__text__desc">
                        <p>Purchasing a Motor Vehicle has never been easier here in Kenya.</p>
                        <p>Our team of highly qualified sales as well as finance experts are committed to finding you the best deal and getting you in your new purchase as soon as possible.</p>
                        <p>You can feel confident that our finance team will go above and beyond to provide you with the best finance options available that fit your lifestyle and budget. Call it hassle-free service.</p>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section-title">
                    <h2>Official M~Pesa</h2>
                </div>
                <div class="feature__text__desc">
                    <img src="{{ asset('img/feature/mpesa.png') }}" alt="ESR Executive Super Rides Limited">
                </div>
            </div>
         
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="feature__text">
                    <div class="section-title">
                        <h2>IMPORTANT NOTICE ON ALL PAYMENTS</h2>
                    </div>
                    <div class="feature__text__desc">
                        <p>Dear Customer,</p>
                        <p>Thank you for choosing to buy your motor vehicle and/any other related product/service from
                            <img src="{{ asset('img/ESR.png') }}" style="height: 15px; width: 20px;" alt="ESR Executive Super Rides Limited">
                        </p>
                        <p>In order to facilitate swift service delivery to you, always ensure that at all times all payments you make to us are strictly as per our provided company bank account details or to our registered M~Pesa till number.</p>
                        <p>Any other payement arrangement(especially payments to third party accounts or individuals) shall not be honoured by us.</p>
                        <p>Once again, thank you for your cooperation.</p>
                    </div>
                   
                </div>
            </div>
           
         
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="feature__text">
                    <div class="section-title">
                        <h2>Key Requirements</h2>
                    </div>
                    <div class="feature__text__desc">
                        <p>1. 6 Months bank or M~Pesa statement.</p>
                        <p>2. National identification card copy</p>
                        <p>3. Two(2) Passport photo size.</p>
                        <p>4. KRA Pin Copy.</p>
                    </div>
                   
                </div>
            </div>
           
         
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="feature__text">
                    <div class="section-title">
                        <h2>APPLYING FOR CAR FINANCE</h2>
                    </div>
                    <div class="feature__text__desc">
                        <p>Understand the car finance options available to you.</p>
                        <p>Understand the overall cost of your agreement.</p>
                        <p>Read all the paperwork thoroughly.</p>
                        <p>Check your credit score.</p>
                        <p>Shop around for car finance</p>
                        <p>Honesty is key</p>
                        <p>If you don’t know, ask questions</p>
                    </div>
                   
                </div>
            </div>
           
         
        </div>

    </div>
     <!-- About Us Section Begin -->
     <section class="about spad">
        <div class="container">
            <div class="section-title">
                <h2>Financing Types</h2>
            </div>
            <div class="about__feature">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <i class="fa fa-clock"></i>
                            <h5>PERSONAL CONTRACT PURCHASE (PCP)</h5>
                            <p>With PCP finance, you pay an initial deposit, followed by monthly instalments, but a large portion of the loan is deferred until the end of the agreement. You can pay that final sum to own the car, hand it back or start another agreement.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about__feature__item">
                            <i class="fa fa-credit-card"></i>
                            <h5>HIRE PURCHASE (HP)</h5>
                            <p>With HP, you pay a deposit up front (normally 50% minimum), and then pay off the rest of the balance – plus the interest - in equal monthly instalments. You’ll pay an ‘option to purchase’ fee, then the car is yours at the end of the agreement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->
</section>
<!-- Feature Section End -->
@endsection