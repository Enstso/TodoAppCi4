<?= $this->extend('page.php')?>
<?= $this->section('body')?>
<div class="card">
    <form class="form-horizontal" action="/reorder/save" method="post">
        <div class="card-header">
            Réordonner les tâches
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">ordre</th>
                        <th scope="col">Tâche</th>
                    </tr>
                </thead>
                <tbody>
                    <?=((session()->has('errors')) ? \Config\Services::validation()->listErrors():'')?>
                    <?php foreach ($tasks as $task) : ?>
                        <tr>
                            <td>
                                <input type="hidden" class="form-control" name="id[]" value="<?= old('id[]', $task->id ?? '',false)?>">
                                <input type="text" name="order[]" value="<?= old('order[]', $task->order ?? '',false)?>">
                            </td>
                            <td>
                                <div class=form-control>
                                    <?php if ($task->done) : ?>
                                        <s><?= $task->text ?></s>
                                    <?php else: ?>
                                        <?= $task->text ?>
                                    <?php endif ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach?>    
                </tbody>
            </table>
        </div>
        <div class=card-footer>
            <div class=col-12>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    <i class="fa fa-sort-numeric-asc" aria-hidden="true">Réordonner</i>
                </button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection()?>
