@extends('layouts.checkout')
@section('title', 'Checkout')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1 class="font-weight-bold">Who is Going?</h1>
                            <p>Trip to Ubud, Bali, Indonesia</p>

                            <!-- table -->
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ url('frontend/images/avatar-chk1.png') }}" height="60" />
                                            </td>
                                            <td class="align-middle">Angga Risky</td>
                                            <td class="align-middle">CN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#"><img src="{{ url('frontend/images/ic_remove.png') }}" /></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('frontend/images/avatar-chk2.pn') }}g" height="60" />
                                            </td>
                                            <td class="align-middle">Galih Pratama</td>
                                            <td class="align-middle">SG</td>
                                            <td class="align-middle">30 Days</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#"><img src="{{ url('frontend/images/ic_remove.png') }}" /></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- member -->
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form action="" class="form-inline">
                                    <!-- name -->
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUSername" class="form-control mb-2 mr-sm-2"
                                        id="inputUsername" placeholder="Username" />

                                    <!-- visa -->
                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <!-- date -->
                                    <label for="doePassport" class="sr-only">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
                                            placeholder="DOE Passport" />
                                    </div>

                                    <!-- button -->
                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>

                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in
                                    Nomads.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Informations</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">2 person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-right">$ 190,00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">$ 80,00 / person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">$ 280,00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">$ 279,</span>
                                        <span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr />
                            <h2>Payment Instructions</h2>
                            <p class="payment-instructions">
                                Please complete your payment before to continue the wonderful
                                trip
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image" />
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0881 8829 8800 <br />
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="bank-item pb-">
                                    <img src="{{ url('frontend/images/ic_bank.png') }}" class="bank-image" />
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0881 8501 7888 <br />
                                            Bank HSBC
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container mt-3">
                            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py2">I Have
                                Made Payment</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('details') }}" class="text-muted">Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/css/gijgo.min.css') }}" />
@endpush

@push('prepend-script')
    <script src="{{ url('frontend/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".datepicker").datepicker({
                uiLibrary: "bootstrap4",
                icons: {
                    rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />',
                },
            });
        });
    </script>
@endpush
