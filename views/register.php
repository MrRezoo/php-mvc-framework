<h1>Register Form</h1>
<hr>
<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="first_name">First name</label>
                <input id="first_name" type="text" name="first_name" class="form-control">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input id="last_name" type="text" name="last_name" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" name="password" type="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input id="confirm_password" name="confirm_password" type="password" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Sign up</button>
</form>