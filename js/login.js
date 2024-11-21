document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    document.getElementById('loading').style.display = 'block';

    fetch('./php/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ username, password })
    })
    .then(response => {
        return response.json();
    })
    .then(data => {
        document.getElementById('loading').style.display = 'none';
        document.getElementById('message').textContent = data.message;
        if (data.success) {
            window.location.href = 'http://127.0.0.1/html/zhuye.html';
        }
    })
    .catch(error => {
        document.getElementById('loading').style.display = 'none';
        console.error('Error:', error);
    });
});
