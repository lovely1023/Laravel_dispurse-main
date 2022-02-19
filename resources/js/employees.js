import Swiper, {Autoplay, FreeMode} from 'swiper';
import 'swiper/css';
import 'swiper/css/autoplay';


Swiper.use([Autoplay, FreeMode]);
const swiper = new Swiper(".swiper", {
    freeMode: true,
    slidesPerView: 'auto',
    loop: true,
    speed: 3000,
    autoplay: {
        delay: 500,
        pauseOnMouseEnter: true,
        disableOnInteraction: false
    }
});
window.swiper = swiper;
