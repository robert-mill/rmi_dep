<?php

use backend\models\StockItems;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Items';
$this->params['breadcrumbs'][] = $this->title;
$stockItemsClass = new StockItems();
$stockItemsData = $stockItemsClass->find()->all();
?>
<div class="stock-items-index">
    <ul>
        <?php
            $url = Yii::getAlias("@frontimgurl");
        foreach ($stockItemsData as $sitems): ?>
            <li><?=$sitems->title?><?=Html::img($url."/".$sitems->image)?><a href="">Open</a></li>
        <?php endforeach; ?>
    </ul>
</div>
