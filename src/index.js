import MobileMenu from "./modules/mobileMenu";
import Header from "./modules/header";
import Slider from "./modules/slider";
import FormValidator from "./modules/forms";
import { TESTIMONY_SLIDE } from "./constant";
import Search from "./modules/search";

const search = new Search();
const form = new FormValidator();
const mobileMenu = new MobileMenu();
const header = new Header();
const testimonialSlider = new Slider(
  TESTIMONY_SLIDE.selector,
  TESTIMONY_SLIDE.config
);
