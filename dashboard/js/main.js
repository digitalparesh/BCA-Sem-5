const sunmit = document.querySelector('#submit')
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const validate = document.querySelector('.validate');

validate.style.display = 'none';
submit.onclick = function () {
  if (password.value === '123') {
    validate.style.display = 'none';
    return true;
  } else {
    validate.style.display = 'block';
    return false;
  }
}
