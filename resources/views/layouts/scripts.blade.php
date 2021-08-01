<!-- Vendor JS Files -->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('/js/jquery.easing.min.js')}}"></script>
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

<!-- OFFLINE -->
<script src="{{asset('/js/counterup/counterup.min.js')}}"></script>
<script src="{{asset('/css/venobox/venobox.min.js')}}"></script>
<script src="{{asset('/css/owl.carousel/owl.carousel.min.js')}}"></script>
<!-- ONLINE -->
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('/js/main.js')}}"></script>

<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/61050eb5649e0a0a5ccece28/1fbts2u0c';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

@stack('scripts')