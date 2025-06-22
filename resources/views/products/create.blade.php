<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div style="background-color: lightgreen;"><h1 style="text-align: center;">JJM District Wise Functional Schemes</h1></div>
    @if($errors->any())   
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>   
    @endif
</div>
<form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name"/>
    </div>
    <div>
        <label>Handed Over</label>
        <input type="text" name="qty" placeholder="Handed Over"/>
    </div>
    <div>
        <label>Functional</label>
        <input type="text" name="price" placeholder="Functional"/>
    </div>
     <div>
        <label>Non Functional</label>
        <input type="text" name="description" placeholder="Non Functional"/>
    </div>    
    <div>
        <input type="submit" value="save"/>
</div> 
</form>
</body>
</html>
