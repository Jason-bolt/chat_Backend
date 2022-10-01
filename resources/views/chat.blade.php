<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    @vite('resources/js/app.js')


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

</head>
<!-- <body style="background-color: #ebebeb; "> -->
<body>

<section class="">
    <div class="container">
        <div class="row mt-4 shadow" style="height: 90vh;">
            <!-- Left side -->
            <div class="col-4" style="background-color: #eee;">
                <!-- user info -->
                <div class="text-center pt-4">
                    <img src="{{ asset('me.jpg') }}" alt="Image" class="img-fluid rounded-circle" width="120px">
                    <p class="lead">Jason Appiatu</p>
                </div>

                <!-- Contact list -->
                <div style="height: 63vh; overflow: auto;">

                    <div id="contact-tile" >
                        <div class="border">
                            <div class="d-inline-flex p-1">
                                <div>
                                    <img src="{{ asset('me.jpg') }}" alt="Image" class="img-fluid rounded-circle" width="50px">
                                </div>

                                <div class="ms-2 mt-1">
                                    <h6 class="m-0">Name of person</h6>
                                    <p class="p-0 m-0">
                                        <small>This is a message</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a onclick="window.open('/www.google.com', '_blank')" style="color:#222; text-decoration:none; cursor:pointer;" >
                        <div id="contact-tile" >
                            <div class="border">
                                <div class="d-inline-flex p-1">
                                    <div>
                                        <img src="{{ asset('me.jpg') }}" alt="Image" class="img-fluid rounded-circle" width="50px">
                                    </div>

                                    <div class="ms-2 mt-1">
                                        <h6 class="m-0">Name of person</h6>
                                        <p class="p-0 m-0">
                                            <small>This is a message</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Right side -->
            <div class="col p-0 position-relative" style="background-color: #dddddd;">
                <!-- Top -->
                <div class="text-end" style="height: 60px; width: 100%; background-image: linear-gradient(to right, #1900ff, rgb(59, 0, 99));">

                    <p class="h5"><span class="text-white">Jason Appiatu</span>
                        <img src="{{ asset('me.jpg') }}" alt="Image" class="img-fluid rounded-circle m-2" width="45px">
                    </p>
                </div>


                <!-- Messages -->
                <div style="height: 84vh; overflow: auto;" class="">
                    <div class="container pt-3" id="messages" style="font-size: 13px;">


                        <!-- Other person's message -->
                        <div class="d-flex justify-content-start">
                            <p class="rounded bg-white px-2 mb-2 d-inline-block py-1 me-0" style="max-width: 70%;">This is another message</p>
                        </div>

                        <!-- My message -->
                        <div class="d-flex justify-content-end">
                            <p class="rounded bg-white px-2 mb-2 d-inline-block py-1 me-0" style="max-width: 70%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio rerum amet cumque quod iste. Voluptate earum soluta consequuntur, officia mollitia assumenda maiores, nesciunt eveniet enim vitae maxime minima quasi voluptatibus.</p>
                        </div>

                    </div>
                </div>

                <!-- Form -->
                <div class="position-absolute bottom-0 bg-white px-2" style="height: 45px; width: 100%;">
                    <form action="{{ route('send-message') }}" method="POST" class="pt-1" id="chat_form">
                        @csrf
                        <div class="d-flex flex-row justify-content-around">
                            <!-- Attachment button -->
                            <div class="btn btn-secondary rounded-circle" style="overflow: hidden; position:relative; background-image: radial-gradient(rgb(12, 0, 116), rgb(45, 0, 56)); border: 0;">
                                <i class="bi bi-paperclip"></i>
                                <input type="file" name="file" style="opacity: 0; position: absolute; top: 0; right: 0;">
                            </div>

                            <!-- <div id="file-div" class="contents-items">
                                <ul class="items-list">
                                    <li><i class="bi bi-image me-2"></i>Photo</li>
                                    <li><i class="bi bi-file me-2"></i>File</li>
                                    <li><i class="bi bi-mic mr-2"></i>Record</li>
                                    <li><i class="bi bi-folder2-open mr-2"></i>File</li>
                                </ul>
                            </div> -->

                            <textarea name="message" id="message" rows="1" class="form-control rounded-pill me-2" style="width: 70%; resize: none; height: fit-content;" placeholder="Type your message here..." required></textarea>
                            <input type="text" name="username" id="username" value="{{ auth()->user()->username }}" hidden>
                            <button type="submit" class="btn btn-primary rounded-pill px-2 px-sm-3 px-md-5"><span id="send-button">Send</span> <i class="bi bi-send"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<script>

    function openUrl(url) {
        window.open(url, '_blank');
    }

    $(document).ready(function () {
        {{--showAllPosts();--}}
        {{--function showAllPosts() {--}}
        {{--    $.ajax({--}}
        {{--        url: "{{ route('posts.index') }}",--}}
        {{--        type: "GET",--}}
        {{--        success: function (response) {--}}
        {{--            $("#showPosts").html(response);--}}
        {{--            $("div").form({--}}
        {{--                order: [0, 'desc']--}}
        {{--            });--}}
        {{--        }--}}
        {{--    });--}}
        {{--}--}}
        {{--$('#postAdd').click(function(e){--}}
        {{--    e.preventDefault();--}}
        {{--    var form = $('#addPost');--}}
        {{--    var formData = new FormData($('#addPost')[0]);--}}
        {{--    $.ajax({--}}
        {{--        type: "POST",--}}
        {{--        url: "{{ route('posts.store') }}",--}}
        {{--        data: formData,--}}
        {{--        processData: false,--}}
        {{--        contentType: false,--}}
        {{--        success: function (data) {--}}
        {{--            showAllPosts();--}}
        {{--        },--}}
        {{--        error: function (error) {--}}
        {{--            console.log(error);--}}
        {{--            alert('error'+error);--}}
        {{--        }--}}
        {{--    })--}}
        {{--})--}}
    })
</script>


</body>
</html>
