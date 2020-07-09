
<h2 class="title">Form Đăng Ký!</h2>
<form method="POST">
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Tên Đăng Nhập</label>
                <input class="input--style-4" type="text" pattern="[a-zA-Z0-9]+" minlength="5" maxlength="30" required name="txtUsername">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Mật khẩu</label>
                <input class="input--style-4" type="Password" minlength="5" maxlength="30" name="txtRetypePassword">
            </div>
        </div>
    </div>
    <div class="row row-space">

        <div class="col-2">
            <div class="input-group">
                <label class="label">Giới Tính</label>
                <div class="p-t-10">
                    <label class="radio-container m-r-45">Nam
                        <input type="radio" checked="checked" value="1" name="gender">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-container">Nữ
                        <input type="radio" value="0" name="gender">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Nhập lại mật khẩu</label>
                <input class="input--style-4" minlength="5" maxlength="30" type="Password" name="txtPassword">
            </div>
        </div>
    </div>
    <div class="row row-space">
        <div class="col-2">
            <div class="input-group">
                <label class="label">Email</label>
                <input class="input--style-4" minlength="10" maxlength="30" type="email" name="txtEmail">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <label class="label">Tên đầy đủ</label>
                <input class="input--style-4" minlength="5" maxlength="30" type="text" name="txtFullName">
            </div>
        </div>
    </div>
    <div class="input-group">
        <label class="label">Loại Người Dùng</label>
        <div class="rs-select2 js-select-simple select--no-search">
            <select name="idgroup">
                <option disabled="disabled" selected="selected">Chọn ...</option>
                <option value="0">Cơ Bản</option>
                <option value="1">Chuyên Nghiệp</option>
                <option value="2">Nâng Cao</option>
            </select>
            <div class="select-dropdown"></div>
        </div>
    </div>
    <div class="p-t-15">
        <button id="btnSignup" class="btn btn--radius-2 btn--blue" name="btnSignup" type="submit">Đăng Kí</button>
    </div>
    <br>
    <div class="input-group" >
        <label class="label" ></label>

        <a href="index.php" type="button" id="txtSignIn" >Đã có tài khoản? Đăng nhập tại đây!</a>



    </div>
</form>
