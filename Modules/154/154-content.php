<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/154.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>154</title>
</head>

<body>
    <div class="container">
        
        <div class="row" style="padding-bottom:20px;">
            <div class="col-md-9">
                SHOPPING CART
            </div>
            <div class="col-md-3">
                <input type="submit" value="Proceed to checkout" style="background: #3275B2;color: white;padding: 5px;float:left">
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="product">
                    <div class="container">
                        <table class="sizes-table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href=""><i class="fas fa-times"></i></a></td>
                                    <td><a href=""><img class="img" src="./images/product-101-2-grey_400x_crop_center.jpg" alt=""></a></td>
                                    <td>
                                        <a href=""> Classic Crew Neck Sweatshirt</a> <br>
                                        Size: S<br>
                                        Color: Black</td>
                                    <td>$12.80</td>
                                    <td>
                                        <form action="">
                                            <button type="submit">-</button>
                                            <input type="text" value="1">
                                            <button type="submit">+</button>
                                            <a href=""><i class="fas fa-pencil-alt"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="tfoot">
                                <tr>
                                    <td colspan="5">
                                        <button type="submit" class="button1">Continute Shopping</button>
                                        <button type="submit" class="button2"> UpdateShopping Cart</button>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-3 menu">
                <h2>ESTIMATE SHIPPING AND TAX</h2>
                <div class="toltal">
                    <h3>CART TOTALS</h3>
                    <div class="table1">
                        <div class="container">
                            <table class="table2">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="price1" style="">$25.60
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="margin: 0 20px;">
                                            Grand Total
                                        </td style="">
                                        <td class="price2">
                                            $25.60
                                        </td>
                                    </tr>
                                </tfoot>

                            </table>
                            <input type="submit" value="Proceed to check out" style="border: 1px black solid;background: #3275B2;color: white;padding: 5px;margin: 10px 0; width: 100%;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>