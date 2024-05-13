<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                {{-- <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('adminn/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('adminn/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('adminn/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('adminn/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('adminn/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('adminn/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('adminn/js/demo/chart-pie-demo.js') }}"></script>


<!-- Page level plugins -->
<script src="{{ asset('adminn/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminn/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('adminn/js/demo/datatables-demo.js') }}"></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

@if (Session::has('success'))
    <script>
        Swal({
            title: "Success!",
            text: "{{ Session::get('success') }}",
            icon: "success",
            button: "OK",
        });
    </script>
@endif

@if (Session::has('error'))
    <script>
        Swal({
            title: "Error!",
            text: "{{ Session::get('errorr') }}",
            icon: "error",
            button: "OK",
        });
    </script>
@endif

</body>

</html>
