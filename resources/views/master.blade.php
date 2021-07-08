<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Project Layout</title>

    {{-- css cdn --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    {{-- Fontaewsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    {{ View::make("header")}}
    @yield("content")
    {{ View::make("footer")}}
    {{-- @include('footer') --}}


    <style>

        .cont-height {
            min-height: 85vh;
        }

        img.slider-img {

            max-height:40vh !important;
        }

        /* .custom-indicator-color > li{
            background: #000 !important;
            height: 0px;
        }

        .custom-icon-color {
            color: #000;
        } */

        .custom-bgc {
            /* background-color: lightseagreen; */
            background-color: #5f9ea038;  /* traparent cadetblue */
            
        }

        .trending-bgc {
            background-color: #fff;
        }
        .trending-items {
            width: 20%;
            float: left;
            overflow: hidden;
        }

        .details-img {

            width: 100%;
            max-height: 300vh;
            object-fit: cover;
            overflow: hidden;

        }

        .cart-img {

            max-height: 20vh;
        } 

    </style>
    






    {{-- js cdn --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    


    {{-- <script>
        jQuery(document).ready(function() {
            jQuery('button').click(function() {
                alert("all set");
            });
        });
    </script>   checking js --}}

    {{-- <script>
        $(document).ready(function() {
            $('button').click(function() {
                alert("all set");
            });
        });
    </script>    --}}

   
</body>
</html>