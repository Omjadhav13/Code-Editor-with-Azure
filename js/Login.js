const form = document.querySelector('.form');
const email = document.getElementById('email-input');
const password = document.getElementById('password-input');

const setError = (element, message) => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector('.error');

	errorDisplay.innerText = message;
	inputControl.classList.add('error');
	inputControl.classList.remove('success');
};

const setSuccess = (element) => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector('.error');

	errorDisplay.innerText = '';
	inputControl.classList.add('success');
	inputControl.classList.remove('error');
};

const isValidEmail = (email) => {
	const re =
		/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
};

const isValidPassword = (password) => {
	const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
	return re.test(password);
};

const validateInputs = () => {
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();

	if (email === '') {
		setError(email, 'Email is required');
		return false;
	} else if (!isValidEmail(emailValue)) {
		setError(email, 'Enter a valid email address');
		return false;
	} else {
		setSuccess(email);
	}

	if (passwordValue === '') {
		setError(password, 'Password is required');
		return false;
	} else if (!isValidPassword(passwordValue)) {
		setError(password, 'Invalid password');
		return false;
	} else {
		setSuccess(password);
	}

	return true;
};
