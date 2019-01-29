<?php

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use humhub\modules\user\widgets\AuthChoice;
?>
<div class="modal-dialog modal-dialog-small animated fadeIn">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><?= Yii::t('UserModule.views_auth_login', '<strong>Join</strong> the network'); ?></h4>
        </div>
        <div class="modal-body">
            <br/>

            <?php if ($canRegister) : ?>
                <div class="text-center">
                    <ul id="tabs" class="nav nav-tabs tabs-center" data-tabs="tabs">
                        <li class="<?= (!isset($_POST['Invite'])) ? "active" : ""; ?> tab-login"><a
                                href="#login"
                                data-toggle="tab"><?= Yii::t('SpaceModule.views_space_invite', 'Login'); ?></a>
                        </li>
                        <li class="<?= (isset($_POST['Invite'])) ? "active" : ""; ?> tab-register"><a
                                href="#register"
                                data-toggle="tab"><?= Yii::t('SpaceModule.views_space_invite', 'New user?'); ?></a>
                        </li>
                    </ul>
                </div>
                <br/>
            <?php endif; ?>


            <div class="tab-content">
                <div class="tab-pane <?= (!isset($_POST['Invite'])) ? "active" : ""; ?>" id="login">

                        <?= AuthChoice::widget([]) ?>


                </div>

            </div>
        </div>

    </div>

</div>

<script type="text/javascript">
    $(document).on('humhub:ready', function () {
        $('#login_username').focus();

    });

    $('.tab-register a').on('shown.bs.tab', function (e) {
        $('#register-email').focus();
    })

    $('.tab-login a').on('shown.bs.tab', function (e) {
        $('#login_username').focus();
    })

</script>
