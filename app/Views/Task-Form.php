<?php
$this->extend('page.php');
$this->section('body');
?>
<div class="card">
    <div class="card-header">
        <?= (isset($task) ? "Modifer une tâche" : "Nouvelle tâche") ?>
    </div>
    <div class="card-body">
        <?= ((session()->has('errors')) ? \Config\Services::calidation()->listErrors():'')?>
        <form class="form-horizontal" action="<?= (isset($task) ? '/sauvegarder/'.$task->id : '/sauvegarder') ?> "method="post">
            <div class=form-group>
                <form-label for="text">Text : </form-label>
                <input type="text" name="text" id="text" value="<?= old('text', $task->text ?? '',false)?>"placeholder="Au boulot">
                <br>
                <form-label for="order">Ordre : </form-label>
                <input type="number" name="order" id="order" value="<?= old('order', $task->order ?? '',false)?>"placeholder="Un numéro">
            </div>
            <button class="btn btn-priary" type="submit">
                <i class="fa fa-plus">Valider</i>
            </button>
        </form>
    </div>
</div>

