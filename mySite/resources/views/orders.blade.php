<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SushiSite: Подтверждение </title>
    <link rel="stylesheet" href="/public/css/orders.css">
</head>


<body>
    <div class="flex-container">

        <form action="{{route('basket-confirm')}}" method="POST">
            <fieldset>
                <legend align="right">Подтверждение заказа</legend>
                <table>
                    <p>Укажите свой телефон и мы свяжемся с вами</p>

                    <tr>
                        <td><label for="name">Введите имя:</label></td>
                        <td><input type="text" name="name" id="name" class="form-control" placeholder="Имя"></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Введите телефон:</label></td>
                        <td><input type="text" name="phone" id="phone" class="form-control" placeholder="Телефон"></td>
                    </tr>
                </table>
                @csrf
                <button type="submit">Подтвердить</button>
                
            </fieldset>
        </form>
    </div>
</body>

</html>