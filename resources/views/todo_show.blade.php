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
                <a href="todo_create">Add Record</a><br><br>
                {{session('msg')}}
                <br/>
                <table id="customers">
                    <tr>
                        <td>Id</td>
                        <td>Nome</td>
                        <td>Criação</td>
                        <td>Ação</td>
                    </tr>
                    @foreach($todoArr as $todo)
                        <tr>
                        <td>{{$todo->id}}</td>
                        <td>{{$todo->name}}</td>
                        <td>{{$todo->created_at}}</td>
                        <td>
                            <a href="todo_delete/{{$todo->id}}">Deletar</a>
                            <a href="todo_edit/{{$todo->id}}">Editar</a>
                        </td>
                    </tr>            
                    @endforeach
                </table>
            
        </div>
    </body>
</html>
