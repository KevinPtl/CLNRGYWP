import { showError, showSuccess, isRequired } from "./";

const isPhoneValid = (phone) => {
  const pattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  return pattern.test(phone);
};

const checkPhone = (phone) => {
  let valid = false;
  const phoneNumber = phone.value.trim();
  if (!isRequired(phoneNumber)) {
    showError(phone, "Champs requis");
  } else if (!isPhoneValid(phoneNumber)) {
    showError(phone, "Numéro de téléphone invalide");
  } else {
    showSuccess(phone);
    valid = true;
  }
  return valid;
};
export default checkPhone;
