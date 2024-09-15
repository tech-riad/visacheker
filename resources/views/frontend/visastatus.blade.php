@extends('frontend.layouts.master')
@section('content')
<!-- page title area start -->
<div class="page-title__area pt-50"
    style="background-image: url({{ asset('frontend/assets/img/about-us/ab-us.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="page__title-wrapper text-center">
                    <h3 class="pb-50">Visa Status</h3>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadccrumb-bg">
        <ul class="breadcrumb justify-content-center pt-20 pb-20">
            <li class="bd-items"><a href="{{ url('/') }}">Home</a></li>
            <li class="bd-items bdritems">|</li>
            <li class="bd-items"> <a href="{{ route('checkstatus') }}">Visa Status Check</a></li>
        </ul>
    </nav>
</div>
<!-- page title area end -->

<section class="Search-visa-status pb-90 wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-body pt-20">
                                <h4>Submit Your Passport Number</h4>
                                <hr>
                                <form id="passport-status">
                                    @csrf
                                    <div class="row py-2">
                                        <div class="col-xl-6">
                                            <input name="passport_number" class="contact__input" type="text"
                                                placeholder="Your Passport Number">
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6" style="display: flex">
                                            <button type="submit" id="btn-submit" class="btn btn-primary">
                                                <i class="fas fa-arrow-circle-down"></i> Check Status
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="status-result">

    </div>
    <div id="data-not-found" style="display: none;">
        <div class="container pt-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row p-2">
                                <div class="col-md-4">
                                    <img src="{{ asset('Flag_of_Canada.svg.png') }}" style="height: 80px; width: auto">
                                </div>
                                <div class="col-md-4 text-center">
                                    <h1 style="color: red">Data not found</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#passport-status").submit(function (e) {
            e.preventDefault();

            var passportNumber = $("input[name='passport_number']").val();
            var csrfToken = $("input[name='_token']").val();

            $.ajax({
                type: "POST",
                url: "/check-passport-status",
                data: {
                    _token: csrfToken,
                    passport_number: passportNumber
                },
                success: function (response) {
                    var statusResult = $("#status-result");
                    var dataNotFound = $("#data-not-found");
                    statusResult.empty(); // Clear the status div.

                    if (response.client) {
                        var clientData = response.client;

                        // Serialize the data and format it similar to your provided HTML structure.
                        var serializedData = `
                                <div class="container pt-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body p-0">
                                                    <div class="row p-2">
                                                        <div class="col-md-4 logo-view-phone">
                                                            <img src="{{ asset('Flag_of_Canada.svg.png') }}" style="height: 80px; width: auto">
                                                        </div>
                                                        <div class="col-md-4 text-center">
                                                            <h1 style="color: red">${clientData.short_description}</h1>
                                                        </div>
                                                    </div>
                                                    <hr style="margin: 0!important; color: black!important">
                                                    <div class="row pb-5 p-2">
                                                        <div class="col-lg-12 text-center">
                                                            <h4>Client Information</h4>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="mb-1">Name: ${clientData.name}</p>
                                                            <p>Passport Number: ${clientData.passport_number}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <img src="{{asset('${clientData.image}')}}" style="height: 300px; width: auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                        statusResult.html(serializedData);
                        statusResult.show();
                        dataNotFound.hide();
                    } else if (response.message) {
                        statusResult.hide();
                        dataNotFound.show();
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });

</script>


<script>
    document.addEventListener("keyup", function (e) {
        var keyCode = e.keyCode ? e.keyCode : e.which;
        if (keyCode == 44) {
            stopPrntScr();
        }
    });

    function stopPrntScr() {

        var inpFld = document.createElement("input");
        inpFld.setAttribute("value", ".");
        inpFld.setAttribute("width", "0");
        inpFld.style.height = "0px";
        inpFld.style.width = "0px";
        inpFld.style.border = "0px";
        document.body.appendChild(inpFld);
        inpFld.select();
        document.execCommand("copy");
        inpFld.remove(inpFld);
    }

    function AccessClipboardData() {
        try {
            window.clipboardData.setData('text', "Access   Restricted");
        } catch (err) {}
    }
    setInterval("AccessClipboardData()", 300);

</script>


<script>
    document.addEventListener('keyup', (e) => {
        if (e.key == 'PrintScreen') {
            navigator.clipboard.writeText('');
            alert('Screenshots disabled!');
        }
    });

    /** TO DISABLE PRINTS WHIT CTRL+P **/
    document.addEventListener('keydown', (e) => {
        if (e.ctrlKey && e.key == 'p') {
            alert('This section is not allowed to print or export to PDF');
            e.cancelBubble = true;
            e.preventDefault();
            e.stopImmediatePropagation();
        }
    });

</script>


<script>
    document.getElementById('captureButton').addEventListener('click', function () {
        if ('mediaDevices' in navigator && 'getDisplayMedia' in navigator.mediaDevices) {
            navigator.mediaDevices.getDisplayMedia({
                video: true
            }).then(stream => {
                const videoElement = document.createElement('video');
                videoElement.srcObject = stream;
                document.body.appendChild(videoElement);

                videoElement.onloadedmetadata = () => {
                    videoElement.play();
                    const canvas = document.createElement('canvas');
                    canvas.width = videoElement.videoWidth;
                    canvas.height = videoElement.videoHeight;
                    const context = canvas.getContext('2d');
                    context.drawImage(videoElement, 0, 0, canvas.width, canvas.height);

                    const screenshotImage = document.getElementById('screenshotImage');
                    screenshotImage.src = canvas.toDataURL('image/png');

                    const screenshotContainer = document.getElementById('screenshotContainer');
                    screenshotContainer.style.display = 'block';

                    stream.getTracks().forEach(track => track.stop());
                };
            }).catch(error => {
                console.error('Error accessing screen capture:', error);
            });
        } else {
            console.error('Screen capture is not supported in this browser.');
        }
    });

</script>

@endpush
