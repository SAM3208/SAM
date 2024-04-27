let notificationCount = 0;

const notificationBtn = document.getElementById('notification-btn');
const notificationCountElement = document.getElementById('notification-count');
const notificationsDiv = document.getElementById('notifications');

notificationBtn.addEventListener('click', () => {
    if (notificationsDiv.style.display === 'none' || notificationsDiv.style.display === '') {
        notificationsDiv.style.display = 'block';

    } else {
        notificationsDiv.style.display = 'none';
    }
});


function addNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification-item';
    notification.innerText = message;

    notificationsDiv.appendChild(notification);
    notificationCount++;
    notificationCountElement.innerText = notificationCount;
}


addNotification('Nueva notificación 1');
addNotification('Nueva notificación 2');
 

