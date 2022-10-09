<div>
    <section class="">
        <div class="container">
            <div class="row mt-4 shadow" style="height: 90vh;">
                <!-- Left side -->
                <div class="col-md-4 col-6" style="background-color: #eee;">
                    <!-- user info -->
                    <div class="text-center pt-4">
                        <img src="{{ asset('default_user.png') }}" alt="Image" class="img-fluid rounded-circle" width="120px">
                        <p class="lead">Jason Appiatu</p>
                    </div>

                    <!-- Contact list -->
                    <div style="height: 63vh; overflow: auto;">

                        @forelse($users as $user)
                            <div id="contact-tile" wire:click="getMessage({{ $user->id }})" >
                                <div class="border">
                                    <div class="d-inline-flex p-1">
                                        <div>
                                            <img src="{{ asset('default_user.png') }}" alt="Image" class="img-fluid rounded-circle" width="50px">
                                        </div>

                                        <div class="ms-2 mt-3">
                                            <h6 class="m-0 text-capitalize">{{ $user->username }}</h6>
                                            <p class="p-0 m-0">
                                                <small>This is a message</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="lead">No other user on the platform!</p>
                        @endforelse


                    </div>
                </div>

                <!-- Right side -->
                <div class="col p-0 position-relative" style="background-color: #dddddd;">
                    <!-- Top -->
                    <div class="text-end" style="height: 60px; width: 100%; background-image: linear-gradient(to right, #1900ff, rgb(59, 0, 99));">

                        <p class="h5"><span class="text-white">Jason Appiatu</span>
                            <img src="{{ asset('default_user.png') }}" alt="Image" class="img-fluid rounded-circle m-2" width="45px">
                        </p>
                    </div>


                    <!-- Messages -->
                    <div style="height: 75vh; overflow: auto;" class="">
                        <div class="container pt-3" id="messages" style="font-size: 13px;">

                            @if ($recipient_id == null)
                                <p class="display-6 text-center">No chat selected</p>
                            @else
                                @foreach($messages as $message)
                                    @if ($message['recipient_id'] == \Illuminate\Support\Facades\Auth::id())
                                        <!-- Other person's message -->
                                        <div class="d-flex justify-content-start">
                                            <p class="rounded bg-white px-2 mb-2 d-inline-block py-1 me-0" style="max-width: 70%;">
                                                {{ $message['message'] }}</p>
                                        </div>

                                    @endif

                                    @if ($message['sender_id'] == \Illuminate\Support\Facades\Auth::id())
                                        <!-- My message -->
                                        <div class="d-flex justify-content-end">
                                            <p class="rounded bg-white px-2 mb-2 d-inline-block py-1 me-0" style="max-width: 70%;">
                                                {{ $message['message'] }}</p>
                                        </div>
                                    @endif
                                @endforeach
                            @endif

                        </div>
                    </div>

                    @if ($recipient_id != null)
                        <!-- Form -->
                        <div class="position-absolute bottom-0 bg-white px-2" style="height: 45px; width: 100%;">
                            <div class="pt-1">
                                <div class="d-flex flex-row justify-content-around">
                                    <!-- Attachment button -->
                                    <div class="btn btn-secondary rounded-circle" style="overflow: hidden; position:relative; background-image: radial-gradient(rgb(12, 0, 116), rgb(45, 0, 56)); border: 0;">
                                        <i class="bi bi-paperclip"></i>
                                        <input type="file" name="file" style="opacity: 0; position: absolute; top: 0; right: 0;">
                                    </div>

                                    <textarea name="message" id="message" rows="1" class="form-control rounded-pill me-2" style="width: 70%; resize: none; height: fit-content;" placeholder="Type your message here..." required wire:model="textMessage"></textarea>

                                    <button type="submit" wire:click="postMessage" class="btn btn-primary rounded-pill px-2 px-sm-3 px-md-5"><span id="send-button">Send</span> <i class="bi bi-send"></i></button>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

</div>
