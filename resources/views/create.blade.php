{{-- <!doctype html>
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

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                                    <form class="mx-1 mx-md-4" action="/add" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <input type="text" id="form3Example1c" name="name"
                                                    value="{{ old('name') }}" class="form-control" />
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
                                                    value="{{ old('email') }}" class="form-control" />
                                                @error('email')
                                                    <span style="color:red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                         <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input class="form-control"name="password" value="{{old('password')}}" type="password" id="formFile">
                                                @error('password')
                                                <span style="color:red">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Profile Upload</label>

                                                <input class="form-control" name="image" type="file" id="formFile">
                                                  @error('image')
                                                <span style="color:red">{{$message}}</span>
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

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #d3d4e0;
        }

        .register-container {
            max-width: 900px;
            background-color: #ffffff;
            display: flex;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 50px auto;
            border-radius: 10px;
        }

        .form-section {
            flex: 1;
            padding: 40px;
        }

        .form-section h2 {
            color: #4b2e83;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-control {
            border: none;
            border-bottom: 1px solid #cccccc;
            border-radius: 0;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #4b2e83;
            box-shadow: none;
        }

        .submit-btn {
            background: linear-gradient(90deg, #4b2e83, #6b4cad);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .image-section {
            flex: 1;
            background: #1e1f3d url('https://img.freepik.com/free-vector/rocket-launch-concept-illustration_114360-1195.jpg?w=740&t=st=1680000000~exp=1680003600~hmac=dummy') no-repeat center;
            background-size: cover;
            position: relative;
        }

        .overlay {
            background-color: rgba(30, 31, 61, 0.85);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="form-section">
            <h2>Registration Form</h2>
            <form class="mx-1 mx-md-4" action="/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" placeholder="Full Name" id="form3Example1c" name="name"
                            value="{{ old('name') }}" class="form-control" />
                        @error('name')
                            <span style="color:brown">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="mb-3">

                    <input type="email" id="form3Example3c" placeholder="Email" name="email"
                        value="{{ old('email') }}" class="form-control" />
                    @error('email')
                        <span style="color:brown">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-control"name="password" placeholder="Password" value="{{ old('password') }}"
                        type="password" id="formFile">
                    @error('password')
                        <span style="color:brown">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <input class="form-control" name="image"  type="file" id="formFile" accept="image/*"/>
                    @error('image')
                        <span style="color:brown">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
        <div class="image-section">
            <div class="overlay"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
