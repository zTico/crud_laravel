<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo show</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <a href="todo_show">Back</a><br><br>
                 <form method="post" action="../todo_update/{{$todoArr->id}}">
                    @csrf
                    <table>
                        <tr>
                            <td>Nome</td>
                            <td><input type="textname" name="name" required value="{{$todoArr->name}}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit"></td>
                        </tr>
                    </table>
                 </form>
        </div>
    </body>
</html>
