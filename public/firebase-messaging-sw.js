/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-messaging.js');

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
* New configuration for app@pulseservice.com
*/
firebase.initializeApp({
    apiKey: "AIzaSyBqDXA5OPm_rY87OYWj6uoyGMTsDX9LBbQ",
    authDomain: "schoolapp-c3163.firebaseapp.com",
    databaseURL: "https://schoolapp-c3163.firebaseio.com",
    projectId: "schoolapp-c3163",
    storageBucket: "schoolapp-c3163.appspot.com",
    messagingSenderId: "810121300083",
    appId: "1:810121300083:web:90550d5b78ab2bf4c54206",
    measurementId: "G-V5P1TB8637"
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log(
        "[firebase-messaging-sw.js] Received background message ",
        payload,
    );
    /* Customize notification here */
    const notificationTitle = "Background Message Title";
    const notificationOptions = {
        body: "Background Message body.",
        icon: "/itwonders-web-logo.png",
    };

    return self.registration.showNotification(
        notificationTitle,
        notificationOptions,
    );
});
