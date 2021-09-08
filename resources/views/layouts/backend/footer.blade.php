<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; - developed by
                <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
        </div>
    </div>
</footer>

<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</div>
<script src="{{ asset('js/app.js')}}"></script>
{{-- <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script> --}}
{{-- <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{ asset('backend/js/ruang-admin.min.js')}}"></script>
<script src="{{ asset('backend/js/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('backend/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/ckeditor.js')}}"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script> --}}
@include('sweet::alert')
@yield('scripts')
</body>

</html>
