<footer class="pc-footer">
   <div class="footer-wrapper container-fluid">
      <div class="row">
         <div class="col my-1">
            <!--  <p class="m-0">ANT &#9829; crafted by Team <a href="" target="_blank">Persausive</a></p> -->
         </div>
         <div class="col-auto my-1">
            <ul class="list-inline footer-link mb-0">
               <li class="list-inline-item"><a href="index.php">Home</a></li>
               <li class="list-inline-item"><a href="" target="_blank">Support</a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>
<script>
   document.getElementById('sidebar-hide').addEventListener('click', () => {
     document.body.classList.toggle('full_mode');
   });
</script>
<!-- [Page Specific JS] start -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/plugins/apexcharts.min.js')}}"></script>
<script src="{{ asset('assets/js/widgets/support-chart.js')}}"></script>
<script src="{{ asset('assets/js/widgets/support-chart1.js')}}"></script>
<script src="{{ asset('assets/js/widgets/account-chart-1.js')}}"></script>
<script src="{{ asset('assets/js/widgets/satisfaction-chart.js')}}"></script>
<script>document.addEventListener('DOMContentLoaded', function () {
   new SimpleBar(document.querySelector('.feed-scroll'));
   new SimpleBar(document.querySelector('.pro-scroll'));
   });
   // 
</script><!-- [Page Specific JS] end --><!-- Required Js -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="{{ asset('assets/js/plugins/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/i18next.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/i18nextHttpBackend.min.js')}}"></script>
<script src="{{ asset('assets/js/fonts/custom-font.js')}}"></script>
<script src="{{ asset('assets/js/pcoded.js')}}"></script>
<script src="{{ asset('assets/js/theme.js')}}"></script>
<script src="{{ asset('assets/js/multi-lang.js')}}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js')}}"></script>
<!-- <script defer="defer" src="https://fomo.codedthemes.com/pixel/yRevReYmxkh1j4z7Hc4tgbOKeXSu5Bm1"></script> -->
<script>layout_change('dark');</script><script>layout_sidebar_change('dark');</script><script>layout_sidebar_change('dark');</script><script>change_box_container('true');</script><script>layout_caption_change('true');</script><script>layout_rtl_change('false');</script><script>preset_change('preset-1');</script>
<script src="https://dashboardkit.cc/assets/js/plugins/index.global.min.js"></script>
<script src="https://dashboardkit.cc/assets/js/plugins/sweetalert2.all.min.js"></script>
<script src="{{ asset('assets/js/application/calendar.js')}}"></script>
<!-- Cropper.js JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
</body>
<!-- [Body] end -->
</html>
@yield('scripts')