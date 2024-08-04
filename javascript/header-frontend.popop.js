document.getElementById('openPopupBtn').addEventListener('click', function() {
    document.getElementById('popupForm').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('popupForm').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('popupForm')) {
        document.getElementById('popupForm').style.display = 'none';
    }
});
document.getElementById('openSignUpPopupBtn').addEventListener('click', function() {
    document.getElementById('signUpPopupForm').style.display = 'block';
});

document.querySelector('.closesignup').addEventListener('click', function() {
    document.getElementById('signUpPopupForm').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('signUpPopupForm')) {
        document.getElementById('signUpPopupForm').style.display = 'none';
    }
});
