<html>
    <head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/mycss.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">E-commerce</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php
                        if (!Auth::check()):
                            ?>
                            <li class="active"><a href="/register">Registration <span class="sr-only">(current)</span></a></li>
                            <li><a href="/login">Login</a></li>
                        <?php endif; ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="all_collection">All Collection</a></li>
                                <li><a href="#">Wear Collection</a></li>
                                <li><a href="#">Computer Accesories</a></li>
                                <li><a href="#">Hardware Collection</a></li>                             
                                <li><a href="#">EEE Products</a></li>
                            </ul>
                        </li>
                        <li><a href = "/admin">Add Product</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>

                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cart <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/cart">Your cart</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Wish list <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Create A wish List</a></li>
                                <li><a href="#">Find A Wish list</a></li>
                            </ul>
                        </li>
                        <?php
                        if (Auth::check()):
                            ?>
                            <li><a href = "/logout">Log out</a></li>
                        <?php endif; ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <p class="bg-success success">
                <?php if (Session::has('Success_msg')) : ?>
                <h4 style="text-align: center"><?php echo Session::get('Success_msg'); ?></h4>
            <?php endif; ?>
        </p>

        <?php echo $content; ?>

    </div>
</body>
</html>
