# CHAT (For lack of a better name :sweat_smile:)

This practice project is a real chat application that allows everyone on the platform to communicate with each other (for now though :) ). In this project I used PHP with the [Laravel framework](https://laravel.com/). \

For the realtime capability, I used [Laravel livewire](https://laravel-livewire.com/) which is sort of a replacement to Vue or React in the Laravel framework. \

The project is however still in development.

## Project Installation
To install the project on your local machine, you can download the source files then within the root folder, run the following commands: \

```angular2html
    - composer install
    - php artisan key:generate
    - php artisan migrate
    - php artisan queue:work
    - php run dev
    - php artisan serve
```
After executing the commands above, register 2 users and login (using either two separate browsers or use incognito mode). Select the chat and start chatting away ;).

### Current Features Working
* User registration
* User authentication
* Sending and receiving chats in realtime

### Upcoming Features
* Editing or changing profile picture.
* Attaching content to a message, or sending media files.

## Link To Project
https://appiatu-chat.herokuapp.com/
