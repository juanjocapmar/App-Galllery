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

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <form class="mx-1 mx-md-4" method=post action="actions/register.act.php">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" class="form-control" name="name"/>
                            <label class="form-label" for="name">Your Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" class="form-control" name="email" />
                            <label class="form-label" for="email">Your Email</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" class="form-control" name="password" />
                            <label class="form-label" for="password">Password</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" class="form-control" name="password-repeat" />
                            <label class="form-label" for="password-repeat">Repeat your password</label>
                            </div>
                        </div>
                        <div class="form-check my-3 py-3 mx-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="enabled">
                            <label class="form-check-label" for="enabled">
                                Enabled
                            </label>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" class="btn btn-primary btn-lg" value="Register">
                        </div>

                    </form>

                </div>
                
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <script src="../assets/bootstrap.min.js"></script>
</body>
</html>