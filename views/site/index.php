<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Status;
use kartik\date\DatePicker;
use yii\bootstrap\Nav;
use app\models\Orientation;
use app\models\Abiturient;
$this->title = 'Crm';
//$this->params['breadcrumbs'][] = $this->title;
?>

  <section class="section section-top section-full">
      
    <div class="container">
   
        <div class="col-md-10 col-lg-7 ">
                <h1 class="text-black  mb-4 display-4 font-weight-bold">
                <?= Html::encode($this->title) ?>
                </h1> 
                            
        </div>

        <div class="container">
        <div class="text-right"
        <div class="wrap"> 
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-default btn-lg active']) ?>  
        <?= Html::a('Статистика', ['static'], ['class' => 'btn btn-default btn-lg active']) ?>   
        <?php
echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right   '],
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти',
                    ['class' => 'btn btn-default btn-lg active']
                )
                . Html::endForm()
                . '</li>'
             )
        ],
    ]);?>
        </a>
        </div>

    </div>

    <div class="table-responsive">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => [
            'class' => 'striped table',
        ],
        'columns' => [
            'id',
            ['attribute'=>'surname', 'label'=>'Фамилия', 'value'=>'surname'],
            ['attribute'=>'name', 'label'=>'Имя', 'value'=>'name'],
            ['attribute'=>'email', 'label'=>'E-mail', 'value'=>'email'],
            //['attribute' => 'orientationName','label' => 'Orientation', 'value'=>'orientation0.name'],
            ['attribute' => 'status','label'=>'Status', 'value'=>'status0.name', 'filter' => ArrayHelper::map(Status::find()->all(), 'id', 'name'),
              'filterInputOptions' => ['class' => 'form-control form-control-sm']],
              ['attribute'=>'date','label'=>'Дата',],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>