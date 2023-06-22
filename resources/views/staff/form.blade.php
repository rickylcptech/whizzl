<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    </head>
    <body>
        <div class="container" style="padding: 2rem">
            <div class="card bg-light">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mt-3 text-center">Register Staff</h4>
                    <form method="post" enctype="multipart/form-data" action="{{route('staff.store')}}">
                        @csrf
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="name" class="form-control" placeholder="Full name" type="text" required>
                        </div>
                        <input type="file" name="foto" required class="mt-2" accept="image/*">
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                        </div>
                    </form>
                </article>
            </div> <!-- card.// -->
        
        </div> 
    </body>
</html>
