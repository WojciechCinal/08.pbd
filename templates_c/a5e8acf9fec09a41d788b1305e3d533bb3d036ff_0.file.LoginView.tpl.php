<?php
/* Smarty version 3.1.30, created on 2022-04-25 23:10:19
  from "C:\xampp\htdocs\08.pbd\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62670e3ba8bf45_09764770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5e8acf9fec09a41d788b1305e3d533bb3d036ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\08.pbd\\app\\views\\LoginView.tpl',
      1 => 1649505470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62670e3ba8bf45_09764770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21811967762670e3ba86200_71919373', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143747320462670e3ba87188_41903111', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205972376962670e3ba8b756_87509017', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_21811967762670e3ba86200_71919373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="footer">
        <ul class="icons">
            <li><a href="https://github.com/WojciechCinal" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </section>
<?php
}
}
/* {/block 'footer'} */
/* {block 'header'} */
class Block_143747320462670e3ba87188_41903111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="header">
        <div class="inner">
            <span class="icon solid major fa-cloud"></span>
            <h1>Witaj w prostym kalkulatorze kredytowym.<br />
                Wykorzystano szablon <strong>PHOTON</strong> ze strony: <a href="http://html5up.net">HTML5 UP</a>.</h1>
            <p>Zadanie 7. Kontroler  - Ochrona</p>
            <ul class="actions special">
                <li><a href="#one" class="button scrolly">Przejdź do logowania</a></li>
            </ul>
        </div>
    </section>
<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_205972376962670e3ba8b756_87509017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="one" class="main style1">
        <div class="container">
            <section>
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                    <legend>Logowanie do systemu</legend>
                    <fieldset>
                    <div class="row gtr-uniform gtr-50">
                        <div class="col-6 col-12-xsmall">
                            <label for="id_login">Login: </label>
                            <input id="id_login" type="text" name="login"/>
                        </div>
                        <div class="col-6 col-12-xsmall">
                            <label for="id_pass">Hasło: </label>
                            <input id="id_pass" type="password" name="pass" /><br />
                        </div>

                        <div>
                            <input type="submit" value="Zaloguj" class="primary"/>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </section>
        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
