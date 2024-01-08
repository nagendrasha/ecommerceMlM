<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v36/ekka-admin/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 17:51:55 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ekka - Admin Dashboard HTML Template.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link href="{{asset('admin/cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css')}}"
        rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" rel="stylesheet" href="{{asset('admin/assets/css/ekka.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">

    <!-- FAVICON -->
    <link href="{{asset('admin/assets/img/favicon.png')}}" rel="shortcut icon" />
</head>

<body class="sign-inup" id="body">
    @yield('content')

    <!-- Javascript -->
    <script src="{{asset('admin/assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/slick/slick.min.js')}}"></script>

    <!-- Ekka Custom -->
    <script src="{{asset('admin/assets/js/ekka.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="{{asset('toastr/toastr.js')}}"></script>
    <script>
        toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';        
    </script>

    <script>
        function SendOTP(){
            // toastr.success("Success", 'Success');	
            var phone = $('form').serializeArray()[1].value;
              
            if(phone.length != 10){
                toastr.error("Enter Valid Phone Number", 'Invalid');	
                return false;
            }


        $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
        type: "POST",
        url: "{{route('send_otp')}}",
        data: { phone:phone }, 
        success: function( data ) {
        if(data.status == 200 /*OK*/){
            $("#otp-number").html(data.response);
            toastr.success(data.message, 'OTP Sent');	
        }else if(data.status == 404 /*Not Found*/){
            toastr.info(data.message, 'Phone Number Not Found');	
        }
        else{
            toastr.error("Something went wrong!", 'Error');	
        }
        },
        error: function(){
            toastr.error("Something went wrong!", 'Error');	
        }
    });

            return false;
        }


       $("#otp-box-value").on("keyup",function(){
        var otpValue = $(this).val();
         
        if(otpValue.length == 4){
            $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
        type: "POST",
        url: "{{route('verify_otp')}}",
        data: { otp:otpValue }, 
        success: function( data ) {
            if(data.status == 200 /*OK*/){
            $("#otp-number").html("");
            toastr.success(data.message, 'Success');	
        }else if(data.status == 401 /*Unauthorised*/){
            toastr.info(data.message, 'Error..');	
        }
        else{
            toastr.error("Something went wrong!", 'Error');	
        }
        },
        error: function(){
            toastr.error("Something went wrong!", 'Error');	
        }
    }); 
        }

       })
    </script>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/ekka/ekka-v36/ekka-admin/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 17:51:55 GMT -->

</html>