<?php
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Orientation;

$this->title = 'День открытых дверей';
?>
    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url(/web/img/image.png);"></div>

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">
                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                           День открытых дверей в РКСИ!<br>дд.месяц.2019 год<br> Время!
                        </h1>

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                           Вход свободный!
                        </p>

                        <!-- Button -->
                        <p class="text-center mb-0" >
                            <a href="#form"  class="btn btn-primary ">
                               ЗАРЕГИСТИРОВАТЬСЯ
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>


 

    <!-- SECTIONS
    ================================================== -->
    <!-- PAGES
    ================================================== -->

    


    <!-- ABOUT
    ================================================== -->
    



    <!-- SERVICES
    ================================================== -->
    <section class="section" id="service">
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Достижения РКСИ
                    </h2>

                </div>
            </div>
            <!-- / .row -->


            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4 ">
                    <div class="service-block d-flex">
                        <div class="service-icon ">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-content ">
                            <h4><span>HTML</span> web template</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="service-content">
                            <h4><span>Wordpress</span> theme Conversion</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="service-content">
                            <h4><span>PSD</span> web template</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="service-content">
                            <h4>Wordpress <span> Theme Installation</span> </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-bug"></i>
                        </div>
                        <div class="service-content">
                            <h4>Html Css <span>BUG Fixing</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-md-6 mb-4">
                    <div class="service-block d-flex">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt"></i>
                        </div>
                        <div class="service-content">
                            <h4>24 Hours <span>Dedicated Support </span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. asperiores rem voluptas nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT
    ================================================== -->
    <section class="section bg-light" id="portfolio">
        <div class="container">
             <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="portfolio-block">
                        <img src="/web/img/8.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Всероссийская олимпиада профиссионального мастерства обучающихся</h4>
                        </div>
                        <!-- <div class="overlay-content">
                            <a href="single-portfolio.html"><i class="fa fa-link"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="portfolio-block">
                        <img src="/web/img/9.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Регеональный чемпионат "Молодые профессионалы" (WorldSkills Russia)</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="portfolio-block">
                        <img src="/web/img/6.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Международная конгресс-выставка "Global Education-Образование без границ"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="portfolio-block">
                        <img src="/web/img/7.jpg" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Международная олимпиада в сфере информационнных технологий "IT-Планета"</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="portfolio-block">
                        <img src="/web/img/10.png" alt="portfolio">

                        <div class="portfolio-content">
                            <h4>Связь-информ</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Pricing
    ================================================== -->
    <section class="section" id="pricing">
        <div class="container">
            <div class="rectangel">
                 <div class="orientation">
                   
                    <!-- Heading -->
                    <h2 class="lg-title mb-2 ">
                        Направления 
                    </h2>   

                    <ul class="orientationName" >
                    <?php foreach ($array as $item): ?>
                        <li><?php echo $item->name ?></li>
                        <?php endforeach ?>
                        </ul>
                  
                        <p class="text-right mb-0" >
                        <a href="#" class="btn btn-primary right ">Подробнее</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>


   

    <!-- Contact
    ================================================== -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-8 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                    <a name="form">Регистрация</a>
                    </h2>

                </div>
            </div>
            <!-- / .row -->
        <?php if(Yii::$app->session->hasFlash('success')): ?>
        <?php echo Yii::$app->session->getFlash('success'); ?>
        <?php endif; ?>
        <?php if(Yii::$app->session->hasFlash('error')): ?>
        <?php echo Yii::$app->session->getFlash('error'); ?>
        <?php endif; ?>
        <div class="row justify-content-center">
                <div class="col-lg-8">
                <div class="contact__form">
        <?php 
        Pjax::begin([]);
    $form = ActiveForm::begin([
        'options' => ['data' => ['pjax' => true]],
    ]);
        ?>

<?= $form->field($model, 'surname') ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'lastname') ?>
<?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
  'mask' => '+7 (999) 999 99 99',]); ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'klass') ?>
<?= $form->field($model, 'orientation')->dropdownList(
    Orientation::find()->select(['name', 'id'])->indexBy('id')->column(),
    ['prompt'=>'Выберети направление']
);?>
<?= $form->field($model, 'GPA') ?>
<?= $form->field($model, 'status') ?>
<?= $form->field($model, 'date') ?>



<div class="form-group">
<?= Html::submitButton('Регистрация', ['class' => 'byt2 but2 but2en btn', 'name' => 'login-button']) ?>
</div>
<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>
        </div>
    </section>
    <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Как пройти к колледжу   
                    </h2>

                </div>
            </div>
            </div>
    <div id="map" style="height: 400px"></div>
  
