<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    <style>
        body{
            background-image: radial-gradient(rgb(12, 0, 116), rgb(45, 0, 56)); background-repeat: no-repeat; height: 100vh;
        }

        #contact-tile:hover{
            cursor: pointer;
            background-color: rgb(12, 0, 116, 0.1);
        }

        @media only screen and (max-width: 1184px) {
            #send-button{
                display: none;
            }
        }
    </style>

    @livewireStyles

</head>
<!-- <body style="background-color: #ebebeb; "> -->
<body>

    @livewireScripts

    <livewire:chat />

    @vite('resources/js/app.js')
</body>
</html>
