


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
            background: #1e1f3d url('{{ asset('storage/' . $result->image) }}') no-repeat center;
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
               <a href="/" ><svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor"
                class="bi bi-arrow-left-circle " viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg> </a>
            <h2>Registration Form Edit</h2>

            <form class="mx-1 mx-md-4" action="/update/{{ $result->id }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" placeholder="Full Name" id="form3Example1c" name="name"
                            value='{{ $result->name }}' class="form-control" />
                        @error('name')
                            <span style="color:brown">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="mb-3">

                    <input type="email" id="form3Example3c" placeholder="Email" name="email"
                        value='{{ $result->email }}' class="form-control" />
                    @error('email')
                        <span style="color:brown">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <input class="form-control" name="image" type="file" id="formFile" accept="image/*" />
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
