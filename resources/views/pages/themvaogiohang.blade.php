
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel </title>
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
    <link rel="stylesheet" href="source/assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Shopping Cart</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Shopping Cart</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">

        <div class="table-responsive">
            <!-- Shop Products Table -->
            <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                <thead>
                <tr>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-status">Status</th>
                    <th class="product-quantity">Qty.</th>
                    <th class="product-subtotal">Total</th>
                    <th class="product-remove">Remove</th>
                </tr>
                </thead>
                <tbody>

                <tr class="cart_item">
                    <td class="product-name">
                        <div class="media">
                            <img class="pull-left" src="assets/dest/images/shoping1.jpg" alt="">
                            <div class="media-body">
                                <p class="font-large table-title">Men’s Belt</p>
                                <p class="table-option">Color: Red</p>
                                <p class="table-option">Size: M</p>
                                <a class="table-edit" href="#">Edit</a>
                            </div>
                        </div>
                    </td>

                    <td class="product-price">
                        <span class="amount">$235.00</span>
                    </td>

                    <td class="product-status">
                        In Stock
                    </td>

                    <td class="product-quantity">
                        <select name="product-qty" id="product-qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </td>

                    <td class="product-subtotal">
                        <span class="amount">$235.00</span>
                    </td>

                    <td class="product-remove">
                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>


                </tbody>
            </table>
            <!-- End of Shop Table Products -->
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->




