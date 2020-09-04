<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/template/auth.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/func/getMenu.php');
?>
    </td>

        <td class="right-collum-index">
            
            <div class="project-folders-menu">
                <ul class="project-folders-v">
                    <li class="project-folders-v-active"><a href="/?login=yes"><?= $_SESSION['authorization'] ? 'Выйти' : 'Авторизация' ?></a></li>
                    <li><a href="#">Регистрация</a></li>
                    <li><a href="#">Забыли пароль?</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'yes' && ! $success):

                $_SESSION['authorization'] = false;?>

            <div class="index-auth">

                <form action="<?= !$_SESSION['authorization'] ? '/' : '?login=yes'?>" method="post">

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">

                        <?php if ($_COOKIE['login'] !== $_SESSION['login'] || !$_SESSION['authorization'] && !isset($_COOKIE['login'])): ?>

                        <tr>
                            <td class="iat">
                                <label for="login_id">Ваш e-mail:</label>
                                <input id="login_id" size="30" name="userLogin" value="<?= htmlspecialchars($userLogin, ENT_QUOTES) ?? ''?>">
                            </td>
                        </tr>

                        <?php endif; ?>

                        <tr>
                            <td class="iat">
                                <label for="password_id">Ваш пароль:</label>
                                <input id="password_id" size="30" name="userPassword" type="password" value="<?= htmlspecialchars($userPassword, ENT_QUOTES) ?? ''?>">
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Войти" name="Enter"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <?php endif;

            if ($success) {
                include $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
            }
            if ($error) {
                include $_SERVER['DOCUMENT_ROOT'] . '/include/error.php';
            }?>

            </td>
        </tr>
    </table>

    <div class="clearfix">
            <?= showMenu($menuItems, 'sortDesc', 'main-menu bottom'); ?>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>