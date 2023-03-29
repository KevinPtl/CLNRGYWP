import { showError, showSuccess, isRequired } from "./";

const isEmailValid = (email) => {
  const pattern =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return pattern.test(email);
};

const checkEmail = (email) => {
  let valid = false;
  const emailAddress = email.value.trim();
  if (!isRequired(emailAddress)) {
    showError(email, "Courriel requis");
  } else if (!isEmailValid(emailAddress)) {
    showError(email, "Courriel invalide");
  } else {
    showSuccess(email);
    valid = true;
  }
  return valid;
};

export default checkEmail;
