import './bootstrap';
// import flatpickr from "flatpickr";
// import { Russian } from "flatpickr/dist/l10n/ru.js";
// import "flowbite";
// import Datepicker from 'flowbite-datepicker/Datepicker';
// import ru from "../../node_modules/flowbite-datepicker/js/i18n/locales/ru.js";
// import Datepicker from "flowbite-datepicker/Datepicker";
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';  

Alpine.plugin(intersect);

window.Alpine = Alpine;

Alpine.start();

// document.addEventListener('DOMContentLoaded', function () {
//     document.querySelectorAll('[datepicker]').forEach(function (element) {
//       element.removeAttribute('datepicker');
//     }); 
//  });

// const today = new Date();
// const minDate = new Date(today.getFullYear() - 17, today.getMonth(), today.getDate());
// minDate.setDate(minDate.getDate()+1);

// const datepickerEl = document.getElementById('datepickerId');
// Datepicker.locales.ru = ru.ru;
// const datepicker = new Datepicker(datepickerEl, {
//     language: 'ru',
//     format: 'dd.mm.yyyy',
//     maxDate: today,
//     minDate: minDate,
//     autoHide: false
// });

