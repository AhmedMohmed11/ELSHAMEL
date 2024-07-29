<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
<form class="form">
    <p class="title">تسجيل الدخول </p>
    <p class="">سجل دخول</p>


    <label>
        <input class="input" type="email" placeholder="" required>
        <span>البريد الالكتروني</span>
    </label>

    <label>
        <input class="input" type="password" placeholder="" required="">
        <span>كلمة المرور</span>
    </label>

    <button class="submit">تسجيل الدخول</button>
    <p class="signin">ليس لديك حساب؟ <a href="#">سجل الان</a> </p>
</form>

<?php include("footer.php"); ?>