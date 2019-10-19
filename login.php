<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <title>Login</title>
</head>
<body>
        <div class="container mt-5" id="login">
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="display-4"><i class="fas fa-user-circle"></i> User Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="">
                                        <div class="form-group">
                                            <label for="email"><i class="fas fa-envelope"></i> Users Email</label>
                                            <input type="email" name="email" placeholder="Enter User Email" class="form-control form-control-sm"" autocomplete="off" required>  

                                        </div>

                                        <div class="form-group">
                                            <label for="pass"><i class="fas fa-key"></i> User Password</label>
                                            <input type="password" name="pass" placeholder="Enter User Password" class="form-control form-control-sm"  required> 
                                                            
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block" >LOGIN</button>        
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>