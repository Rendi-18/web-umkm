<!-- ======= Footer Section ======= -->
<footer id="footer"
    class="{{ Request::is('umkm/product*') ? 'fixed-lg-bottom' : '' }}{{ Request::is('koperasi/product*') ? 'fixed-lg-bottom' : '' }}{{ Request::is('koperasi/jasa*') ? 'fixed-lg-bottom' : '' }}{{ Request::is('search*') ? 'fixed-lg-bottom' : '' }}">
    <div class="container footer-bottom clearfix">
        <div class="copyright"> © Copyright <strong><span>{{ $website[0]->sitename }}</span></strong>. All Rights
            Reserved
        </div>
        {{-- <div class="credits"> Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></div> --}}
    </div>
</footer>
<!-- End Footer -->
