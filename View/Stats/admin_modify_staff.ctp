<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Modifier un staff</h3>
                </div>
                <div class="box-body">
                    <form action="" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url('/admin/stats') ?>">
                        <div class="form-group">
                            <label>Pseudo</label>
                            <input name="user_id" value="<?= $staffsU['StaffUser']['user_id'] ?>" type="text" class="form-control" placeholder="Pseudo">
                        </div>
                        <div class="form-group">
                            <label>Fonction</label>
                            <input name="desc" value="<?= $staffsU['StaffUser']['function'] ?>" type="text" class="form-control" placeholder="Ex: Administrateur & Développeur">
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning" href="<?= $this->Html->url('/admin/stats') ?>">Annuler</a>
                            <button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>