'use strict';

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
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
}

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