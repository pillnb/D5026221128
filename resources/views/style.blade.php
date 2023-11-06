<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
    <style>
        h2 {
            color: rgb(255, 0, 140);
            text-align: center;
            text-decoration: underline;
        }

        .ratakanan {
            color: rgb(255, 142, 127);
        }
    </style>
</head>

<body>
    <!-- CSS dengan cara inline [khusus ini yang beda] -->
    <h1 style="color:blue;
    text-align:center;
    text-decoration: line-through;"> Halo apa kabs? </h1>
    <!-- CSS dengan cara inpage [khusus satu halaman saja yg beda] -->
    <h2> Halo apa kabs? </h2>
    <!-- CSS dengan cara external file [satu situs full seragam] -->
    <h3> Halo apa kabs? </h3>
    <div class="ratakanan kotak1"> Harga: Rp35.000 </div> <br>
    <div class="ratakanan " style="color:brown;"> Diskon besar </div>
</body>

</html>
