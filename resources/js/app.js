import 'bootstrap/dist/css/bootstrap.min.css'; // Importa il CSS di Bootstrap
import * as bootstrap from 'bootstrap'; // Importa il JS di Bootstrap


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();




// document.addEventListener("DOMContentLoaded", function() {
//     var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
//     var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
//         return new bootstrap.Dropdown(dropdownToggleEl);
//     });
// });


// document.addEventListener("DOMContentLoaded", function() {
//     // Inizializza tutti i dropdown di Bootstrap
//     var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
//     dropdownElementList.forEach(function(dropdownToggleEl) {
//         new bootstrap.Dropdown(dropdownToggleEl);
//     });
// });


//carosello che si muove con il touch

document.addEventListener('DOMContentLoaded', function () {
    var carousel = document.querySelector('#carouselExample');
    var carouselInstance = new bootstrap.Carousel(carousel, {
        interval: 3000,
        touch: true
    });

    carousel.addEventListener('mousedown', function (e) {
        var startX = e.pageX;
        var startY = e.pageY;

        function onMouseMove(e) {
            var diffX = e.pageX - startX;
            var diffY = e.pageY - startY;

            if (Math.abs(diffX) > Math.abs(diffY)) {
                if (diffX > 0) {
                    carouselInstance.prev();
                } else {
                    carouselInstance.next();
                }
                document.removeEventListener('mousemove', onMouseMove);
            }
        }

        function onMouseUp() {
            document.removeEventListener('mousemove', onMouseMove);
            document.removeEventListener('mouseup', onMouseUp);
        }

        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    });
});