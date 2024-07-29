<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
<div class="page-container">

    <form class="form" style="border-left-width: 0px; left: 35%" style="border-left-width: 0px;left: 35%;top: 19px;" ;>
        <p class="title">قم بالتسجيل الان </p>
        <p class="message">سجل الان لتستطيع الوصول لدوراتك </p>
        <div class="flex">
            <label>
                <input class="input" type="text" placeholder="" required="">
                <span>الاسم الاول</span>
            </label>

            <label>
                <input class="input" type="text" placeholder="" required="">
                <span>الاسم الثاني</span>
            </label>
        </div>

        <label>
            <input class="input" type="email" placeholder="" required="">
            <span>البريد الالكتروني</span>
        </label>

        <label>
            <input class="input" type="password" placeholder="" required="">
            <span>كلمة السر</span>
        </label>
        <label>
            <input class="input" type="password" placeholder="" required="">
            <span>اعادة كلمة المرور </span>
        </label>
        <label class="checkbox-label">
            <input type="checkbox" class="ui-checkbox">
            الطالب
        </label>
        <label class="checkbox-label">
            <input type="checkbox" class="ui-checkbox">
            معلم
        </label>
        <button class="submit">تسجيل</button>
        <p class="signin">لديك حساب؟ <a href="./login.php">سجل الدخول الان</a> </p>
    </form>
</div>
<?php include("footer.php"); ?>