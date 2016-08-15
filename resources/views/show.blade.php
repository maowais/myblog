<!DOCTYPE html>
<html>
    <head>
        <title> laravel 5 </title>

        <link rel="stylesheet" type="text/css" href= "{{asset('css/main.css')}}" >

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
                text-align:left;
                font-size: 30px;
            }

            .container {
                text-align:center;
                display: table-cell;
                vertical-align:top;
            }

            .content {
                text-align:center;
                display: inline-block;
            }

            .title {
                font-size: 30px;
                text-align:center ;
            }
        </style>
    </head>

    <body>
        <div class="body">


        <form action ="/" method="POST" >

          {!! csrf_field() !!}

            <input type="hidden" name="_method" value="PATCH"/>

            <label>title</label>
            <input type="text" name="title" value="{{$blog->title}}" >
            </br>
            <label>content</label> <br/>
            <input  name="content" value="{{$blog->content}}" >
            <br/>
            <button class="title" type="submit" > Edit </button>



            <br/>


        </form>
        </div>
    </body>

</html>
