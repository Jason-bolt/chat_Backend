<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-color: #ebebeb;">

<section class="container">
    <div class="text-center pt-5">
        <div class="row">
            <div class="mx-auto col-sm-9 col-md-6">
                <div class="card shadow mt-5 py-2" style="border-radius: 30px;">
                    <div class="card-body">

                        @if ($errors->any())
                            <div>

                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible fade show py-1" role="alert">
                                        {{ $error }}
                                        <small><button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button></small>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <h1 class="py-2">Register</h1>
                        <form action="{{ route('register') }}" method="POST" style="width: 80%;" class="mx-auto my-4">
                            @csrf
                            <input type="email" name="email" id="email" class="form-control my-3 rounded-pill" placeholder="Email...">
                            <input type="text" name="username" id="username" class="form-control my-3 rounded-pill" placeholder="Username...">
                            <input type="password" name="password" class="form-control my-3 rounded-pill" placeholder="Password...">
                            <input type="password" name="password_confirmation" class="form-control my-3 rounded-pill" placeholder="Confirm password...">

                            <button type="submit" class="btn btn-primary px-5 rounded-pill">
                                Register
                            </button>
                            <p class="mt-2">
                                <small>
                                    <a href="{{ route('login') }}">Login instead</a>
                                </small>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
