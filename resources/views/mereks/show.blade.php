<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Show Laravel 9</title>
</head>

<body>
    {{-- NAVBAR --}}
    @include('layouts.navbar')
    {{-- /NAVBAR --}}

    {{-- CONTENT --}}
    <div class="section">
        <div class="container">
            {{-- row 1 --}}
            <div class="row mt-5 justify-content-center">
                <h3>Show Merek</h3>
            </div>
            {{-- row 2 --}}
            <div class="row mt-5">

                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $merek->nama_merek }}</h5>
                            <p><b>Honda Motor Company, Ltd. adalah sebuah konglomerat multinasional publik asal Jepang yang memproduksi mobil, sepeda motor, dan peralatan daya. Perusahaan ini berkantor pusat di Minato, Tokyo, Jepang</b></p>
                            <a href="#" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- /CONTENT --}}

    {{-- FOOTER --}}
    @include('layouts.footer')
    {{-- /FOOTER --}}




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>
