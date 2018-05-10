<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $Lang->get('STATS__ADD_RANK') ?></h3>
                </div>
                <div class="box-body">
                    <form action="" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url('/admin/stats') ?>">
                        <div class="form-group">
                            <label><?= $Lang->get('GLOBAL__NAME') ?></label>
                            <input name="name" type="text" class="form-control" placeholder="Ex: Administrateurs">
                        </div>
                        <div class="form-group">
                            <label><?= $Lang->get('STATS__COLOR_RANK') ?></label>
                            <select name="color" class="form-control form-control-sm">
                                <option value="warning"><?= $Lang->get('STATS__COLOR_YELLOW') ?></option>
                                <option value="info"><?= $Lang->get('STATS__COLOR_BLUE') ?></option>
                                <option value="primary"><?= $Lang->get('STATS__COLOR_TURQUOISE') ?></option>
                                <option value="danger"><?= $Lang->get('STATS__COLOR_RED') ?></option>
                                <option value="success"><?= $Lang->get('STATS__COLOR_GREEN') ?></option>
                                <option value="orange"><?= $Lang->get('STATS__COLOR_ORANGE') ?></option>
                                <option value="violet"><?= $Lang->get('STATS__COLOR_PURPLE') ?></option>
                                <option value="dark-gris"><?= $Lang->get('STATS__COLOR_DARK_GRAY') ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><?= $Lang->get('STATS__RANK') ?></label>
                            <input name="level" type="text" class="form-control" placeholder="Ex: 1 (équivaut à tout en haut)">
                        </div>
                        <div class="form-group">
                            <label><?= $Lang->get('STATS__RANK_DESC') ?></label>
                            <input name="desc" type="text" class="form-control" placeholder="Ex: Les administrateur sont là pour gérer le serveur.">
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning" href="<?= $this->Html->url('/admin/stats') ?>"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                            <button class="btn btn-success" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>