
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
