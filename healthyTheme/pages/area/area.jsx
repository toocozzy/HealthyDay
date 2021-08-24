import AOS from '../../../node_modules/aos/dist/aos';
import autoComplete from "@tarekraafat/autocomplete.js";
import '../../components/navigation/navigation.jsx';
import '../../components/cookie-bar/cookie-bar.jsx';
import { cities } from './cities.jsx';
import '../../components/banner-info/banner-info.jsx';

try {
  AOS.init({
    duration: 1200,
  })

  const deliveryForm = document.querySelector('.delivery-form');
  const formResponse = deliveryForm.querySelector('.response');
  const inputCities = deliveryForm.querySelector('.input-cities');

  new autoComplete({
    selector: '.input-cities',
    data: {
      src: cities
    },
    onSelection: (feedback) => {
      if(feedback.selection) {
        inputCities.value = feedback.selection.value;
      }
    }
  });


  deliveryForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const value = inputCities.value;

    formResponse.classList.remove('green-color', 'red-color');
    const exist = cities.includes(value)

    const responseText = exist ? 'Obsługujemy twoje miejsce zamieszkania' : 'Niestety nie obsługujemy twojego miejsca zamieszkania'
    const responseClass = exist ? 'green-color' : 'red-color'

    formResponse.innerHTML = responseText;
    formResponse.classList.add(responseClass);
  })

} catch (err) {
  console.log(err);
}
