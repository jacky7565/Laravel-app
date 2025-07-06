

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

       .back {
        background: #e2e2e2;
        width: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
    }

    .div-center {
        width: 400px;
        height: 400px;
        background-color: #fff;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto;
        max-width: 100%;
        max-height: 100%;
        overflow: auto;
        padding: 1em 2em;
        border-bottom: 2px solid #ccc;
        display: table;
    }

    div.content {
        display: table-cell;
        vertical-align: middle;
    }
    </style>
</head>

<body>


    <div class="back">


        <div class="div-center">


            <div class="content">


                <h3>Login</h3>
                <hr />
                <form action="/auth" method="POST">
                  @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" >Email address</label>
                        <input type="email"  name="email"class="form-control" value="{{old('email')}}" id="exampleInputEmail1" placeholder="Email">
                   @error('email')

                   <span style="color:brown">{{$message}}</span>
                   @enderror
                      </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" >Password</label>

                        <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                       @error('password')

                   <span style="color:brown">{{$message}}</span>
                   @enderror
                      </div>

                      <hr />
                    <button type="submit" class="btn btn-primary">Login</button>
                    <hr />
                   <a href="/create" type="button" class="btn btn-link">Signup</a>
                    <button type="button" class="btn btn-link">Reset Password</button>

                </form>

            </div>


            </span>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
