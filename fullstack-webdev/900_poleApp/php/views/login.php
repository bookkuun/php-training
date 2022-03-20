<h1>
    ログインページです
</h1>

<form action="<?php echo CURRENT_URI; ?>" method="POST">
    <div>
        id: <input type="text" name="id">
    </div>
    <div>
        password: <input type="text" name="pwd">
    </div>
    <div>
        <input type="submit" value="ログイン">
    </div>
</form>
