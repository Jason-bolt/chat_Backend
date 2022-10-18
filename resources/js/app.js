import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// const messages = document.getElementById("messages");
// const message = document.getElementById("message");
// const username = document.getElementById("username");
// const chat_form = document.getElementById("chat_form");
//
// chat_form.addEventListener('submit', function (e) {
//     e.preventDefault();
//
//     let has_error = false;
//
//     if (message.value.trim() === '') {
//         alert("No message typed");
//         has_error = true;
//     }
//
//     if (has_error) {
//         return;
//     }
//
//     const options = {
//         method: 'post',
//         url: '/chat',
//         data: {
//             username: username.value,
//             message: message.value
//         }
//     }
//
//     axios(options);
// });

window.Echo.channel('message')
    .listen('Message', (e) => {
        console.log(e);
    });
