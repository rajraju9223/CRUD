<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
   <div style="color: blue;"> <h1 style="text-align: center;">JJM District Wise Functional Schemes</h1></div>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
                <a href="{{route('product.create')}}">Insert Details</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>District Name</th>
                <th>Handed Over</th>
                <th>Functional</th>
                <th>Non Functional</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
            @endforeach

        </table>
    </div>
</body>
</html>
