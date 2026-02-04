<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <style>
/* Custom multi-level dropdown */
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu > .dropdown-menu {
    top: 0;
    left: 100%;
    margin-left: 0.1rem;
    margin-right: 0.1rem;
}

ul.navbar-nav li a {
    color: #333;
    transition: all 0.2s;
}

ul.navbar-nav li a:hover {
    color: #0d6efd; /* Bootstrap primary color */
}
</style>
</head>
<body>
    <h1>This is home page </h1>
<a href="{{ route('login') }}">login</a>

    <ul>
        @foreach ($category as $cat)
            <li><a href="{{ route('categorypage',$cat->url) }}">{{ $cat->name }}</a>
            <ul>
                @foreach ($cat->subCategory as $subCate)
                    <li><a href="{{ route('sub_categorypage',[$cat->url,$subCate->url]) }}">{{ $subCate->name }}</a>
                        <ul>
                            @foreach ($subCate->childCategory as $childCat)
                                <li><a href="{{ route('child_CategoryPage',[$cat->url,$subCate->url,$childCat->url]) }}">{{ $childCat->name }}</a></li>
                            @endforeach
                            
                        </ul>
                    </li>
                @endforeach
                

            </ul>
            </li>
        @endforeach
        
    </ul>

</body>
</html>