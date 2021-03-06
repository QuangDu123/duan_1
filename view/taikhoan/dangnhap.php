

    <div class="container">
        <div class="p-3 border bg-light">
            <h2>ĐĂNG NHẬP</h2>
            <div class="card-header">
                <form action="/action_page.php" class="was-validated">
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> Ghi Nhớ Mật Khẩu.
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <div class="form-check">
                            <a href="#">Quên Mật Khẩu</a>
                        </div>
                        <div class="form-check">
                            <a href="#">Đăng Ký Thành Viên</a>
                        </div>

                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
