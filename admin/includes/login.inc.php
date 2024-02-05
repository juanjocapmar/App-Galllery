<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Gallery</title>
</head>
<body>
    
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">


                                <form method=post action="actions/login.act.php">
                                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                        <p class="lead fw-normal fs-1 mb-0 me-3  py-2">SIGN IN</p>
                                    </div>
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email-login">Email address</label>
                                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" name="email-login"/>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-3">
                                        <label class="form-label" for="password-login">Password</label>
                                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                                        placeholder="Enter password" name="password-login" />
                                    </div>

                                    <p class="bg-gray w-100 h-2">
                                        

                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <input type="submit" class="btn btn-primary btn-lg w-100 bg-dark" value="Login">
                                        <hr class="bg-gray w-100 my-4" >
                                        
                                        <p class="small fw-bold fs-5 text-center py-4 my-2 pt-1 mb-0">Don't have an account?</p> 
                                        <div class="d-flex justify-content-center">
                                            <a href="index.php?page=new" class="btn btn-lg btn-dark w-75">Register</a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </section>
            

      

    </div>
    <script src="../assets/bootstrap.min.js"></script>
</body>
</html>