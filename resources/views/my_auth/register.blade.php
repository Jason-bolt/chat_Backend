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
                        <h1 class="py-2">Register</h1>
                        <form action="#" style="width: 80%;" class="mx-auto my-4">
                            <input type="email" name="email" id="email" class="form-control my-3 rounded-pill" placeholder="Email...">
                            <input type="text" name="username" id="username" class="form-control my-3 rounded-pill" placeholder="Username...">
                            <input type="password" name="password" class="form-control my-3 rounded-pill" placeholder="Password...">
                            <input type="password" name="password-confirm" class="form-control my-3 rounded-pill" placeholder="Confirm password...">

                            <button class="btn btn-primary px-5 rounded-pill">
                                Register
                            </button>
                            <p class="mt-2">
                                <small>
                                    <a href="login.html">Login instead</a>
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