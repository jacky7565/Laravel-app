<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <section class="vh-100" style="background-color: #eee;">

        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" action="/update/{{ $result->id }}" method="post" enctype="multipart/form-data">
                                        @csrf;
                                        @method('PUT')
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <input type="text" id="form3Example1c" name="name"
                                                    class="form-control" value='{{ $result->name }}' />
                                                @error('name')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <input type="email" id="form3Example3c" name="email"
                                                    value='{{ $result->email }}' class="form-control" />
                                                @error('email')
                                                    <span style="color:red">{{ $message }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            {{--
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example4c">Pass</label>
                                                    <input type="text" name="number" value='{{ $result->number }}'
                                                        id="form3Example4c" class="form-control" />
                                                    @error('number')
                                                        <span style="color:red">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div> --}}


                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example4c">Profile Upload</label>
                                                    <div class="text-center">
                                                        <img width="20%" name="image" src="{{ asset('storage/' . $result->image) }}" class="rounded"
                                                            alt="...">
                                                    </div>
                                                    <input class="form-control" name="image" type="file"
                                                        id="formFile">
                                                    @error('image')
                                                        <span style="color:red">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-lg">Register</button>
                                            </div>

                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


    </body>

    </html>
