<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Singup</title>
</head>
<body>
        <div class="container mt-5" id="login">
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="display-4">User Singup</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Users Name</label>
                                    <input type="text" name="name" placeholder="Enter User Name" class="form-control">                   
                                </div>

                                <div class="form-group">
                                    <label for="email">Users Email</label>
                                    <input type="email" name="email" placeholder="Enter User email" class="form-control" autocomplete="off">                   
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" placeholder="Enter User Password" class="form-control">                   
                                </div>
                                <div class="form-group">
                                            <label for="con-pass">Conform Password</label>
                                            <input type="password" name="pass" placeholder="Enter User Conform Password" class="form-control" autocomplete="off"> 
                                                            
                                        </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" style="width:50%">LOGIN</button>        
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>