<?= $this->extend('page.php') ?>
<?= $this->section('body') ?>
<div class="card">
    <div class="car-header">
        <h1 class="font-bold">Les tâches</h1>
    </div>
    <div class = "card-body">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tâche</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task) : ?>
                    <tr>
                        <th scope="row"><?= $task->id?></th>
                        <?php if($task->done) : ?>
                            <td><s><?= $task->text ?></s></td>
                        <?php else : ?>
                            <td><?= $task->text ?></td>
                        <?php endif ?>
                        <td>
                            <a href="<?= '/modifier/'.$task->id?>" class="btn btn-primary" role="button">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= '/done/'.$task->id?>" class="btn btn-secondary" role="button">
                                <i class="fas fa-check-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= '/supprimer/'.$task->id?>" class="btn btn-danger" role="button">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class=card-footer>
        <div class=col-12>
            <a class="btn btn-primary" href="/creer"><i class="fas fa-plus">Ajouter</i></a>
            <a href='/reorder' class="btn btn-secondary active" role="button">
                <i class="fa fa-sort-numeric-asc" aria-hidden="true">Réordonner</i>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection()?>
