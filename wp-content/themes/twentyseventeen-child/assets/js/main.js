(function ($, window, document, undefined) {
 $(function () {

   /* Here we working with fotorama slider */
   function fotoramaSlider() {
     $('.fotorama').fotorama({
       width: "100%",
       height: "70%",
       autoplay: "2000",
       allowfullscreen: 'native',
       nav: 'thumbs',
       transition: 'slide',
       keyboard: true,
       shuffle: true,
       thumbBorderWidth: 0,
       arrows: false,
     });
   }

   function init() {
     fotoramaSlider();
   }

   init();

 });
})(jQuery, window, document);