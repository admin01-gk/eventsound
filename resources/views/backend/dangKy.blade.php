<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet">
</head>
<body>
        <div class="container mt-3 justify-content-center">
        <div class="row ">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4 ">
            <form action="dangKy" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
               
                <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="email">email</label>
                <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="password">password</label>
                <input type="password" class="form-control rounded-0" id="password" placeholder="Password" name="password">
                </div>
                <div class="form-group ">
                <label class="text-uppercase font-weight-bold" for="level">level</label>
                <input type="text" class="form-control rounded-0" id="level" placeholder="Level" name="level">
                </div>
                <div class="form-group ">
                <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
                    Đăng Ký
                </button>
                <a href="login" class="btn btn-primary">Đăng Nhập</a>
                </div>
            </form>
            </div>
        </div>
        </div>
</body>
</html>