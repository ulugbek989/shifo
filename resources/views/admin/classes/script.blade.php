<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/popper.js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('admin/assets/js/carbon.js')}}"></script>
<script src="{{asset('admin/assets/js/demo.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>




<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        if (file){
            var reader = new FileReader();
            reader.onload=function(){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@if(Session::has('success1'))
    <script>
        toastr.success("{!! Session::get('success1') !!}");

    </script>
@endif
@if(Session::has('error'))
    <script>
        toastr.success("{!! Session::get('error') !!}");

    </script>
@endif
@if(Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");

    </script>
@endif

{{--@if(Session::has('success1'))--}}
{{--    <script>--}}
{{--        swal("Great job","{!! Session::get('success1') !!}","success",{--}}
{{--            button:"OK",--}}
{{--        });--}}
{{--    </script>--}}
{{--@endif--}}


    @livewireScripts
<script>
    window.addEventListener('closeModal', () => {
        $("#modalFormN").modal('hide');
        $('.modal-backdrop').remove();
    });
    window.addEventListener('openModal', () => {
        $("#modalFormM").modal('show');
    });
</script>
<script>
    $(document).ready(function(){
        $('#action_menu_btn').click(function(){
            $('.action_menu').toggle();
        });
    });
</script>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        if (file){
            var reader = new FileReader();
            reader.onload=function(){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>