<!DOCTYPE html>
<html lang="en">
<head>

 @include('users.head')
</head>
<body>
<div class="wrapper">
   @include('users.alert')


    <form style="width: 380px;" method="post" action="/admin/users/login/store" >
        <h1 class="a11y-hidden">Login Form</h1>

        <div class="form-group">
            <label class="label-email">
                <span class="required" style="font-size: 16px; margin-left: 4px;">Username or Email</span>
                <input type="text" class="form-control " name="username" placeholder="Enter your Username" tabindex="1"  />
                <span class="required invalid-feedback"></span>
            </label>
        </div>
        <input  type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
        <label style="margin-top: -105px;" class="label-show-password" for="show-password">
            <span>Show Password</span>
            <div class="icheck-primary">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </label>
        <div style="margin-top: -20px;" class="form-group" >
            <label class="label-password">
                <span class="required" style="font-size: 16px; margin-left: 4px;">Password</span>
                <input type="text" class="form-control" name="password" placeholder="Password" tabindex="2" />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </label>
        </div>

        <div style="margin-top: 20px;text-align: center;" class="form-group">
            <input type="submit" value="Log In" style="border-radius: 12px;" />
        </div>

        <div style="margin-top: 80px;; ; " class="email">
            <a style="font-size: 16px;" href="#">Forgot password?</a>
            <p style="color:black; font-size: 14px;margin-top: 12px;" >Don't have an account? <a style="font-size: 16px;" href="#">Sign up now</a>.</p>
        </div>
        <figure aria-hidden="true">
            <div class="person-body"></div>
            <div class="neck skin"></div>
            <div class="head skin">
                <div class="eyes"></div>
                <div class="mouth"></div>
            </div>
            <div class="hair"></div>
            <div class="ears"></div>
            <div class="shirt-1"></div>
            <div class="shirt-2"></div>
        </figure>

       @csrf
    </form>

</div>


</body>
</html>
