<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Shoping carts</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('js/jquery-3.2.1.min.js') }}"> -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">You Shop Name</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Category one <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Category two</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a id="cart" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> <span id="count">{{\Cart::count()}}</span> - Items<span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-cart shopping-cart" role="menu" id="cart-list">
                      <div class="list-cart">

                      </div>
                      <li class="divider"></li>
                      <li><a class="text-center" href="/checkout">View Cart</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container" style="margin-top: 100px">
            <div>
                @foreach ($products as $product)
                <p>
                  <strong>{{$product->name}}</strong>
                  <h3>{{$product->cost}}</h3>
                  <button type="button" name="button" onclick="addCart({{$product->id}})">Add Cart</button>
                  <hr>
                </p>
                @endforeach
            </div>
        </div>

    </body>
    <script type="text/javascript">
        (function(){

            // $("#cart").on("click", function() {
            //
            //     $(".shopping-cart").fadeToggle( "fast");
            // });
            $("#cart").on("click", function() {

                var root = '{{url('/')}}';
                var str = "";
                $.get(root + '/loadCarts', function(data, status){
                    // console.log(data);

                    $.each(data.data, function (key, value) {

                        // console.log(value);
                        str += '<li>\
                        <span class="item"><span class="item-left">\
                        <img src="http://lorempixel.com/50/50/" alt="" />\
                        <span class="item-info"><span>' + value.name + '</span><span>23$ - </span></span></span>\
                        <span class="item-right"><button class="btn btn-xs btn-danger pull-right">x</button></span></span>\
                        </li>';
                    });


                }).then(function(){
                    // console.log(str);
                    $('.list-cart').replaceWith('<div class="list-cart">' + str + '</div>');
                    // $('#cart-list').append(str);
                    $(".shopping-cart").fadeToggle( "fast");
                });
            });
        })();

        function addCart(id)
        {
            var root = '{{url('/carts')}}';
            $.get(root + '/' + id + '/' + 'add', function(data, status){

                console.log(data);
            //   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
              $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
            });
        }
    </script>
    <style>
        ul.dropdown-cart{
        min-width:250px;
        }
        ul.dropdown-cart li .item{
        display:block;
        padding:3px 10px;
        margin: 3px 0;
        }
        ul.dropdown-cart li .item:hover{
        background-color:#f3f3f3;
        }
        ul.dropdown-cart li .item:after{
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
        }

        ul.dropdown-cart li .item-left{
        float:left;
        }
        ul.dropdown-cart li .item-left img,
        ul.dropdown-cart li .item-left span.item-info{
        float:left;
        }
        ul.dropdown-cart li .item-left span.item-info{
        margin-left:10px;
        }
        ul.dropdown-cart li .item-left span.item-info span{
        display:block;
        }
        ul.dropdown-cart li .item-right{
        float:right;
        }
        ul.dropdown-cart li .item-right button{
        margin-top:14px;
        }
    </style>
</html>