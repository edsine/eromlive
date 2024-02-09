<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Courgette&family=Lora:ital@1&family=Noto+Sans:wght@500&family=Roboto:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('permit_certificate/styles.css') }}">
    <title>Permit</title>
</head>

<body>
    <div class="first">
        <div class="second">
            <div class="third">
                <div class="logo-div">
                    <div class="logo-info">
                        <h2 id="nigeria">Federal Republic of Nigeria
                            <h4 id="niwa">
                                <b>NATIONAL INLAND WATERWAYS AUTHORITY</b>
                                <p id="motto">Providing Ways & Means in Nigerian Waters</p>
                            </h4>
                        </h2>
                    </div>
                </div>
                <div class="content-div">
                    <h1>Operational Certificate</h1>
                    <div>
                        <form action="">
                            <div class="part-1">
                                <label for="" class="grey-color">This is to certify that</label><br>
                                <input type="text" name="" id=""
                                    value="{{ $service_application->employer()->company_name }}">
                                <p class="grey-color">of</p>
                                <input type="text" name="name_of_holder"
                                    value="{{ $service_application->employer()->contact_surname}}  {{$service_application->employer()->contact_firstname}} {{$service_application->employer()->contact_middlename}}"><br>
                            </div>
                            <div class="part-2">
                                <label for="" class="grey-color">With vessel number</label><br>
                                <input type="text" name="vessel_num" id=""><br>
                                <div class="grey-container">
                                    <p class="grey-color">
                                        is duly authorized to operate within the navigable waterways as provided for by
                                        the Decree No. 13 of 1997
                                    </p>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="signature">
                        <div class="row">
                            <div class="col sig">
                                <label for="">Issued on:</label><br>
                                <input type="text" name="" id="" value="{{$service_application->issued_on}}">
                            </div>
                            <div class="col sig2">
                                <label for="">Signed:</label><br>
                                <input type="text" name="" id="">
                            </div>
                        </div>
                    </div>
                    <div class="cert_no">
                        <label for="">Cert No.:</label>
                        <input type="text" name="" id="" value="{{$service_application->employer()->ecs_number}}">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
