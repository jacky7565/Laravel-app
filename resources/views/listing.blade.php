<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            height: 100vh;
            background-color: #111;
            color: #fff;
            padding: 20px;
        }

        .sidebar a {
            color: #ccc;
            text-decoration: none;
            display: block;
            padding: 10px;
            border-radius: 5px;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background-color: #333;
            color: #fff;
        }

        .logout-btn {
            border: 1px solid #fff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-md-block sidebar">
                <div class="mb-4 fs-3 fw-bold">Apex</div>
                <ul class="nav flex-column mb-auto">
                    <li class="nav-item">
                        <a class="active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">User</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Cities</a>
                    </li>
                </ul>
              <a href="/logout">  <button class="btn logout-btn w-100 mt-4">Log Out</button></a>
            </nav>

            <!-- Main content -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <!-- Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    @if (Auth::check())
                        <h2>Welcome , {{ Auth::user()->name }}</h2>
                    @endif

                    <div class="d-flex align-items-center gap-3">
                        <button class="btn btn-light">⚙️</button>
                        <button class="btn btn-light">🔔</button>

                        <img style="width:50px" src="{{ asset('storage/' . Auth::user()->image) }}" class="rounded-circle"
                            alt="Avatar">
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- User List -->
                <div class="card">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">User List</h5>
                    </div>
                    <div class="card-body">
                        <!-- Search and filter -->
                        <div class="row mb-3 d-flex justify-content-between">
                            <div class="col-md-3 ">
                                <form method="get" action="{{ url('/') }}" class="d-flex">
                                    <input type="search" name="search" id="form1" value="{{ request('search') }}"
                                        class="form-control me-2" placeholder="Search Name" />
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>

                            </div>


                            <div class="col-md-6 text-end ">
                                <a href="/"> <button type="button" class="btn btn-secondary">Reset</button></a>
                                <a href="/create"> <button type="button" class="btn btn-secondary">Add</button></a>
                            </div>
                        </div>

                        <!-- User Table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>

                                        <th>Email</th>
                                        <th>Image</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($result as $key => $val)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $val->name }}</td>
                                            <td>{{ $val->email }}</td>

                                            <td width="20%"><img src="{{ asset('storage/' . $val->image) }}"
                                                    width="20%">
                                            </td>
                                            <td>
                                                <div style="display:flex;margin-left:10px">

                                                    <button class="btn btn-sm btn-outline-secondary"><a
                                                            href="/edit/{{ $val->id }}">✏️</a></button>&nbsp;&nbsp;

                                                    <form action="{{ route('contact.destroy', $val->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick="return confirm('Are You sure ?')"
                                                            class="btn btn-sm btn-outline-danger">🗑️</button>

                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach



                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>{{ $result->links() }}</div>

                            <select class="form-select w-auto">
                                <option selected>5 Items per page</option>
                                <option>10 Items per page</option>
                            </select>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
