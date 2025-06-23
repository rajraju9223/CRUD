<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    
   <div style="background-color: #0f5e9c;"><h1 style="text-align: center; color: white">JJM District Wise Functional Schemes</h1></div>
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
            <tr style="background-color: rgb(107 114 128)">
                <th style="color: white">ID</th>
                <th style="color: white">District Name</th>
                <th style="color: white">Handed Over</th>
                <th style="color: white">Functional</th>
                <th style="color: white">Non Functional</th>
                <th style="color: white">Edit</th>
                <th style="color: white">Delete</th>
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
