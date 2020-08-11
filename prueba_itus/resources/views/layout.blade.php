<!DOCTYPE html>
<html>
    <head>
    <title>
        @yield( 'content_title', 'ITUSS' )
    </title>
    <style>
        .active{
            -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10+ and Edge */
  user-select: none; /* Standard syntax */
color: red;
text-decoration: none;
        }

        .nosel{
            -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10+ and Edge */
  user-select: none; /* Standard syntax */
        };
    </style>
    </head>
    <body>
        @include('nav')
    <br>
    <br>
    @yield( 'content_inicio' )
    </body>
</html>
