<!DOCTYPE html>
<html lang="en">

<head>
    @stack('meta')
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{--  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  --}}

    {{--  <link rel="stylesheet" href="{{URL::asset('/css/akura.css')}}"> --}}
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}">

    @stack('extra-style')
</head>

<body style="font-size: 0.75rem; /*">
    <div class="justify-content-end d-flex">
        <button id="generate-pdf" class="btn btn-danger">Export to PDF</button>
    </div>
    <div class="container-fluid " id="print-content">
        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("input").prop('disabled', true);
        let fileName = $(document).find("title").text();
        console.log(fileName);
        var opt = {
            margin: [15, 2, 15, 2], //top, left, buttom, right
            filename: fileName.trim(),
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2,
                bottom: 20
            },
            pagebreak: {
                mode: ['css']
            },
            jsPDF: {
                unit: 'mm',
                orientation: 'portrait'
            }
        };
        $('#generate-pdf').click(function() {
            window.scrollTo(0, 0);
            setTimeout(() => {
                var element = document.getElementById('print-content');
                html2pdf().set(opt).from(element).save();
            }, 300);
        });
    </script>
</body>

</html>
