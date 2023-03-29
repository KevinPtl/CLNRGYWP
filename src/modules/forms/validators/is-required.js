import { showError, showSuccess } from "./message-toggler";

const isRequired = (value) => (value === "" ? false : true);
const checkField = (field) => {
  let valid = false;
  const name = field.value.trim();

  if (!isRequired(name)) {
    showError(field, "Champs requis");
  } else {
    showSuccess(field);
    valid = true;
  }
  return valid;
};

export { checkField, isRequired };
