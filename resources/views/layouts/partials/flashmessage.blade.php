@if(session()->has('flash_message'))
    <script>

        swal({
            title: "Good Job!",
            text: "{{Session::get('flash_message')}}}",
            type: "success",
            confirmButtonText: "Ok!",
            timer: 2000,
            }
        )

    </script>
@endif