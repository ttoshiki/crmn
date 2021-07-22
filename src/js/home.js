import Swiper from 'swiper/bundle';
import 'swiper/swiper-bundle.css';
import { Loader } from "@googlemaps/js-api-loader"

// スライダー
window.onload = function() {
  const swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
      nextEl: '.p-home-slider__button.-next',
      prevEl: '.p-home-slider__button.-prev',
    },
  });
}

// Google Map
const loader = new Loader({
  apiKey: "AIzaSyCViDorf7Sq8IbYJbBAonu5tLbdrBPwWAE",
  version: "weekly",
});

loader.load().then(() => {
  let map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 35.68106198, lng: 139.76689403 },
    zoom: 12,
    mapId: 'db75605afda0c7cd',
    disableDefaultUI: true,
  });
  const image =
    "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
  const beachMarker = new google.maps.Marker({
    position: { lat: 35.68106198, lng: 139.76689403 },
    map,
    icon: image,
  });
});

// モーダル
jQuery(function(){
    jQuery('.js-modal-open').each(function(){
        jQuery(this).on('click',function(){
            var target = jQuery(this).data('target');
            var modal = document.getElementById(target);
            jQuery(modal).fadeIn();
            return false;
        });
    });
    jQuery('.js-modal-close').on('click',function(){
        jQuery('.js-modal').fadeOut();
        return false;
    });
});