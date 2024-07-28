@include('layouts.includes.head')
@section('title')
    Admission procedures |
@endsection

<body>

    <div class="container">
        <div class="shadow-lg bg-white mb-5 rounded-5">

            <div class="mt-3 bg-grad-primary card-header d-flex justify-content-between p-0">
                <a class="btn text-white shadow-0" href="{{ url('/') }}"><img class=""
                        src="{{ asset('images/logos/icon.png') }}" alt="" style="width: 50px;"></a>
                <h4 class="mt-2 ml-3 text-white mt-4">Admission Procedure</h4>
                <a class="btn text-white m-3 shadow-0" href="#"><i class="fas fa-info-circle fa-lg"></i></a>
            </div>

            <div class="card-body px-3 px-lg-5 py-5">

            <h2>1. Required Documents:</h2>
    <ul>
        <li>Completed Application Form</li>
        <li>Educational Certificates</li>
        <li>Transfer Certificate (TC) and Conduct Certificate</li>
        <li>Migration Certificate</li>
        <li>Identity Proof</li>
        <li>Passport-sized Photographs</li>
        <li>Category Certificate</li>
        <li>Other Supporting Documents</li>
    </ul>

    <h2>2. Payment System:</h2>
    <p>The college offers multiple payment options for the convenience of students during the admission process:</p>
    <ul>
        <li>Online Payment</li>
        <li>Bank Drafts</li>
        <li>Cash Payment</li>
        <li>NEFT/RTGS</li>
    </ul>

    <h2>3. College Policy:</h2>
    <ul>
        <li>Merit-Based Selection</li>
        <li>Reservation Policy</li>
        <li>Transparency</li>
        <li>Anti-Ragging Policy</li>
    </ul>

    <p>For detailed information regarding admission criteria, fee structure, and important dates, please refer to the college prospectus or visit the official college website.</p>

    <p>For any queries or assistance regarding the admission process, feel free to contact the college admission office during working hours.</p>

    <p>We look forward to welcoming you to The NorthCap University and wish you success in your academic journey!</p>

    <p><strong>NCU Family</strong><br>



                <div class="text-center">
                    <button type="button" class="btn-grad-secondary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><i class="fas fa-user-plus"></i>
                        Admission
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Verify yourself</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('student.admission.verify') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="" for="secCode">Admission security code</label>
                                        <input class="form-control @error('security_code') is-invalid @enderror"
                                            name="security_code" type="text">
                                        @error('security_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="" for="secCode">Rocket transaction ID</label>
                                        <input class="form-control @error('payment_transection') is-invalid @enderror"
                                            name="payment_transection" type="text">
                                        @error('payment_transection')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                    <button name="v_check" class="btn-grad-primary" type="submit">Submit</button>
                                </div>
                        </div>
                    </div>
                </div>


                @include('layouts.includes.scripts')

            </div>
        </div>
    </div>
</body>
