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




        <form action ="bblog/" method="POST" >

          {!! csrf_field() !!}
            <?php echo csrf_field();?>
           enter ur email: <input type ="text" name="email" /><br/>
           enter ur password : <input type ="password" name="password" /><br/><br/>

            Enter  the title of your Blog : <input type ="text" name="title" /><br/>
            Enter descrption here  : <textarea rows="4" cols="50" name="content">
            </textarea> <br/>
            <button class="title" type="submit" > save </button>

            <button class="title" type="submit">  preview </button>
            <br/>
            <textarea rows="30" cols="50">

            </textarea>

        </form>
        </div>
    </body>

</html>
