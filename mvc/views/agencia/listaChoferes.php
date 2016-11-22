<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\AppAssetAgencia;
use app\assets\AppAssetWebSite;
use yii\grid\GridView;
use yii\helpers\BaseHtml;
use yii\widgets\ActiveForm;
use yii\bootstrap\Dropdown;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Button;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use app\assets\BootswatchAsset;

raoul2000\bootswatch\BootswatchAsset::$theme = 'superhero';
BootswatchAsset::register($this);
AppAssetAgencia::register($this);
AppAsset::register($this);
AppAssetWebSite::register($this);

/* @var $this yii\web\View */
Modal::begin([
    'id' => 'modal',
    'size' => 'modal-lg',
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>
<!--<div class="container">
    <section id="main">
        <article>
            <div id="page-single-main">-->
<!--<div class="site-contact">
    <section id="main">
        <article>
<div id="page-single-main">-->
<div class="container">
    <div class="well bs-component">
        <div class="row">
            <div class="col-lg-8">
                <h1 >
                    <strong>Listado de Choferes</strong>
                </h1>
                <!--<div class="container-form" id="contenedor-formulario">-->
                <h1>
                    <?= Html::encode($this->title) ?>
                </h1>

                <?php if (Yii::$app->session->hasFlash('Usuario creado con exito')): ?>
                    <div class="alert alert-success">
                        Thank you for contacting us. We will respond to you as soon as possible.
                    </div>
                    <p>
                        Note that if you turn on the Yii debugger, you should be able
                        to view the mail message on the mail panel of the debugger.
                        <?php if (Yii::$app->mailer->useFileTransport): ?>
                            Because the application is in development mode, the email is not sent but saved as
                            a file under
                            <code>
                                <?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?>
                            </code>.
                            Please configure the
                            <code>useFileTransport</code>property of the
                            <code>mail</code>
                            application component to be false to enable email sending.
                        <?php endif; ?>
                    </p>
                <?php else: ?>
                    <div>
                        <?php $form = ActiveForm::begin(); ?>
                        <?=
                        GridView::widget(['dataProvider' => $model->dataProvider,
                            'columns' => [
                                ['class' => 'yii\grid\CheckboxColumn', 'multiple' => False],
                                'Usuario',
                                'Password',
                                'Nombre',
                                'Apellido',
                                'Documento',

                            ],]);


                        ?>

                        <div id='botones-group'>
                            <?= Html::button('Agregar', ['value' => Url::toRoute('agencia/alta_chofer_agencia'), 'class' => 'btn btn-primary btn-lg', 'id' => 'modalButton']); ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= Html::button('Actualizar', ['value' => Url::toRoute('agencia/actualizar_chofer_agencia'), 'class' => 'btn btn-primary btn-lg', 'id' => 'actualizarButton']); ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= Html::button('Eliminar', ['value' => Url::toRoute('agencia/actualizar_chofer_agencia'), 'class' => 'btn btn-primary btn-lg', 'id' => 'eliminarButton']); ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?= Html::a('Cerrar', [Url::toRoute('/agencia/index') ,'class' => 'btn btn-primary', 'id' => 'btn-cancelar']); ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                    </div>  
                <?php endif; ?>

                <!--</article>
                </section>
            </div>
            </div>-->
            </div>
        </div>

    </div>
</div>