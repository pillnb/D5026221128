<!DOCTYPE html>
<html>

<head>
    <style>
        a:visited {
            color: rgb(22, 159, 49);
            text-decoration: none;
        }

        a:link {
            color: rgb(28, 121, 20);
            text-decoration: none;
        }

        a:hover {
            font-weight: bold;
            color: black;
        }

        .fotolingkaran {
            border-radius: 50% ;
        }

        .fotorounded {
            border-radius: 10%;
        }
    </style>
</head>

<body>
    <a href="https://www.its.ac.id"> Web ITS</a>
    |
    <a href="https://www.detik.com" target="_blank"> Detik.com </a>
    |
    <a href="https://www.w3schools.com/html/html_links.asp" target="_blank"> W3Schools HTML</a>
    <br>
    <img  src="https://images.immediate.co.uk/production/volatile/sites/10/2020/01/2048x1365-Carols-pick-of-best-plants-for-colourful-containers-GettyImages-1185235271-0ee53ef.jpg?quality=90&webp=true&resize=800,534"
        alt="Violet" width="200px" height="200px" class="fotolingkaran">
    <br>
    <img src="{{ asset('img/fotoku.jpg') }}" width="500px"  class="fotorounded">

</body>

</html>
