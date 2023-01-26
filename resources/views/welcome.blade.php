<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="antialiased">
<div>
<h1>To Do List</h1>
   @foreach($ListItems as $listItem)
       <div class="flex" style="align-items: center;">
           <li>Task:{{$listItem->name}}</li>
           <form  method="post" action="{{route('markComplete',$listItem->id)}}" >
               {{csrf_field()}}
               <button type="submit" style="max-height: 25px;margin-left: 40px;">complete</button>
           </form>
       </div>
    @endforeach
    <form method="post" action="{{route('saveItem')}}">
        {{csrf_field()}}
    <label for="listItem"New to do Item></label>
    <input type="text" name="listItem" placeholder="write here">
    <button type="submit">Save Item</button>
    </form>
</div>
</body>
</html>
