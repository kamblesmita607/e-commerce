<html>
<head>
    <title>Laravel 7 - Column sorting with pagination example - laravelcode.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3 class="text-center">Laravel 7 - Column sorting with pagination example - laravelcode.com</h3>
    <table class="table table-bordered">
        <tr>
            <th width="80px">@sortablelink('id')</th>
            <th>@sortablelink('name')</th>
            <th>@sortablelink('price')</th>
            <th>@sortablelink('details')</th>
            <th>@sortablelink('created_at')</th>
        </tr>
        
        @if($products->count())
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->details }}</td>
                    <td>{{ $product->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        @endif
    </table>
    {!! $products->appends(\Request::except('page'))->render() !!}
</div>
</body>
</html>