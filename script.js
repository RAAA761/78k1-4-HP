document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const password = document.getElementById('password').value;
    const correctPassword = '14HR_2024'; // 設定するパスワード

    if (password === correctPassword) {
       window.location.href = 'Session_login.php'
        
        window.location.href = 'protected.html';
    } else {
        document.getElementById('error-message').innerText = 'パスワードが間違っています';
    }
});




   window.addEventListener('scroll', function(event) {
      event.preventDefault();
    });
