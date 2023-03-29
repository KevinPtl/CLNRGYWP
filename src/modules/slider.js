import Glide from "@glidejs/glide";
import { TESTIMONY_SLIDE } from "../constant";

class Slider {
  constructor(selector, config) {
    if (document.querySelector(selector)) {
      new Glide(selector, config).mount();
    }
  }
}

export default Slider;
