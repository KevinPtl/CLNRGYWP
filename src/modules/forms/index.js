import { checkEmail, checkPhone, checkField } from "./validators";
import debounce from "./debounce";

class FormValidator {
  constructor() {
    this.isFormProcessing = false;
    this.formValues = null;
    this.formWrapper = document.querySelector("#form-wrapper");
    this.messageSent = document.querySelector("#message-sent");
    this.spinner = document.querySelector(".contact-spinner");

    this.formSlideshow = document.querySelector("#form-wizard-container");
    this.formSlides = document.getElementsByClassName("stepper").length;

    this.step = 0;
    this.progressSteps = document.querySelectorAll(".step");

    this.next = document.querySelector("#next");
    this.next1 = document.querySelector("#next1");
    this.next2 = document.querySelector("#next2");
    this.next3 = document.querySelector("#next3");

    this.previous1 = document.querySelector("#previous1");
    this.previous2 = document.querySelector("#previous2");
    this.previous3 = document.querySelector("#previous3");
    this.previous4 = document.querySelector("#previous4");

    this.submit = document.querySelector("#submit");

    this.form = document.querySelector("#contact-form");
    this.fullname = document.querySelector("#fullname");
    this.phone = document.querySelector("#phone");
    this.email = document.querySelector("#email");
    this.goal = document.querySelector("#goal");
    this.goalTime = document.querySelector("#goalTime");
    this.healthState = document.querySelector("#healthState");
    this.motivation = document.querySelector("#motivation");
    this.notes = document.querySelector("#notes");
    this.recaptchaToken = document.querySelector("#recaptcha-token");

    if (this.form) {
      this.form.addEventListener("submit", this.onFormSubmit.bind(this));

      // Previous button handler
      this.previous1.addEventListener("click", () => {
        if (this.step <= 0) {
          return;
        }

        this.step--;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.previous2.addEventListener("click", () => {
        if (this.step <= 0) {
          return;
        }

        this.step--;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.previous3.addEventListener("click", () => {
        if (this.step <= 0) {
          return;
        }

        this.step--;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.previous4.addEventListener("click", () => {
        if (this.step <= 0) {
          return;
        }

        this.step--;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      // Next button handler
      this.next.addEventListener("click", () => {
        if (this.step >= this.formSlides - 1) {
          return;
        }

        if (!this.isStepValid(this.step)) {
          return;
        }

        this.step++;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.next1.addEventListener("click", () => {
        if (this.step >= this.formSlides - 1) {
          return;
        }

        if (!this.isStepValid(this.step)) {
          return;
        }

        this.step++;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.next2.addEventListener("click", () => {
        if (this.step >= this.formSlides - 1) {
          return;
        }

        if (!this.isStepValid(this.step)) {
          return;
        }

        this.step++;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.next3.addEventListener("click", () => {
        if (this.step >= this.formSlides - 1) {
          return;
        }

        if (!this.isStepValid(this.step)) {
          return;
        }

        this.step++;
        this.formSlideshow.style.left = `${this.step * -100}%`;
        this.onStepperChange(this.step);
      });

      this.next.addEventListener("keydown", (event) => {
        if (event.key === "Tab" || event.key === " ") {
          event.preventDefault();
          return;
        }
      });

      // Disable next keydown tab
      this.next1.addEventListener("keydown", (event) => {
        if (event.key === "Tab" || event.key === " ") {
          event.preventDefault();
          return;
        }
      });

      this.next2.addEventListener("keydown", (event) => {
        if (event.key === "Tab" || event.key === " ") {
          event.preventDefault();
          return;
        }
      });

      this.next3.addEventListener("keydown", (event) => {
        if (event.key === "Tab" || event.key === " ") {
          event.preventDefault();
          return;
        }
      });

      this.form.addEventListener("input", debounce(this.onInput.bind(this)));
    }
  }

  onStepperChange(currentStep) {
    const previousStep = currentStep - 1;

    this.progressSteps.forEach((step, index) => {
      if (index <= previousStep) {
        this.progressSteps[index].classList.add("done");
      } else {
        this.progressSteps[index].classList.remove("done");
      }
    });
  }

  isStepValid(step) {
    let isStepValid = null;

    switch (step) {
      case 0:
        isStepValid =
          checkField(this.fullname) &&
          checkPhone(this.phone) &&
          checkEmail(this.email);
        break;
      case 1:
        isStepValid = checkField(this.goal) && checkField(this.goalTime);
        break;
      case 2:
        isStepValid = checkField(this.healthState);
        break;
      case 3:
        isStepValid = checkField(this.motivation);
        break;
      default:
        isStepValid = true;
        break;
    }

    return isStepValid;
  }

  onFormSubmit(e) {
    // prevent the form from submitting
    e.preventDefault();

    if (this.isFormProcessing) {
      return;
    }

    // validate forms
    let isNameValid = checkField(this.fullname),
      isPhoneValid = checkPhone(this.phone),
      isEmailAddressValid = checkEmail(this.email),
      isGoalValid = checkField(this.goal),
      isGoalTimeValid = checkField(this.goalTime),
      isHealthStateValid = checkField(this.healthState),
      isMotivationValid = checkField(this.motivation);
    //isRecaptchaTokenValid = checkField(this.recaptchaToken);

    let isFormValid =
      isNameValid &&
      isEmailAddressValid &&
      isGoalValid &&
      isPhoneValid &&
      isGoalTimeValid &&
      isHealthStateValid &&
      isMotivationValid;
    // && isRecaptchaTokenValid;

    // submit to the server if the form is valid
    if (isFormValid) {
      this.isFormProcessing = true;
      this.spinner.style.display = "block";
      this.formValues = {
        fullname: this.fullname.value,
        phone: this.phone.value,
        email: this.email.value,
        goal: this.goal.value,
        goalTime: this.goalTime.value,
        healthState: this.healthState.value,
        motivation: this.motivation.value,
        notes: this.notes.value,
        //recaptchaToken: this.recaptchaToken.value,
      };
      this.sendEmail();
    }
  }

  onInput(e) {
    if (e.target.id === "fullname") {
      checkField(this.fullname);
    } else if (e.target.id === "phone") {
      checkPhone(this.phone);
    } else if (e.target.id === "email") {
      checkEmail(this.email);
    } else if (e.target.id === "goal") {
      checkField(this.goal);
    } else if (e.target.id === "goalTime") {
      checkField(this.goalTime);
    } else if (e.target.id === "healthState") {
      checkField(this.healthState);
    } else if (e.target.id === "motivation") {
      checkField(this.motivation);
    }
  }

  async sendEmail() {
    const endpoint = contact_form.url;
    const nonce = contact_form.nonce;
    const formData = new FormData();
    const serializedData = new URLSearchParams(this.formValues).toString();

    formData.append("action", "contact_form");
    formData.append("nonce", nonce);
    formData.append("data", serializedData);

    const response = await fetch(endpoint, {
      method: "POST",
      body: formData,
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    const data = await response.json();

    if (data && data.success) {
      this.hideForm();
    } else if (!data || !data.success) {
      this.onError();
    }
  }

  onError() {
    this.isFormProcessing = false;
    this.spinner.style.display = "none";
  }

  hideForm() {
    this.formWrapper.style.display = "none";
    this.messageSent.style.display = "block";
    this.isFormProcessing = false;
    this.spinner.style.display = "none";
    this.resetForm();
  }

  resetForm() {
    this.formValues = null;
    this.fullname.value = "";
    this.email.value = "";
    this.phone.value = "";
    this.goal.value = "";
    this.goalTime.value = "";
    this.healthState.value = "";
    this.motivation.value = "";
    this.notes.value = "";
    this.recaptchaToken.value = "";
    //grecaptcha.reset();
  }
}

export default FormValidator;
