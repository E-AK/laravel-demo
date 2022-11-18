<!DOCTYPE html>
<html>
    <head>
        <title>Админ панель</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1>Добавить товар</h1><br>
            <form class="row g-3" action="/admin" method="POST">
                {{ csrf_field() }}
                <div class="col-auto">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="col-auto">
                    <label for="price" class="form-label">Цена</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>

                <div class="col-auto">
                    <label for="preview" class="form-label">Изображение</label>
                    <input type="file" class="form-control" id="preview" name="preview" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
                </div>

                <div class="mb3">
                    <button type="submit" class="btn btn-primary mb-3">Добавить</button>
                </div>
            </form>

            <hr>

            <h1>Список товаров</h1><br>
            
            <div class="row">
                @foreach ($products as $product)
                <div class="col">
                <div class="card" style="width: 18rem;">
                        <img src={{ $product->preview_path }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->price }} р.</p>
                            <form action={{ "/admin/" . $product->id }} method="POST">
                                {{ csrf_field() }}
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>