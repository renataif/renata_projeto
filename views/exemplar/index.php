<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExemplarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exemplars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exemplar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Exemplar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'edicao',
            'numpaginas',
            'anopublicacao',
            'livro_id',
            //'editora_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>