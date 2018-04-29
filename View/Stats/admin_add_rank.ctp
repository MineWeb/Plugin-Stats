<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ajouter un rang</h3>
                </div>
                <div class="box-body">
                    <form action="" method="post" data-ajax="true" data-redirect-url="<?= $this->Html->url('/admin/stats') ?>">
                        <div class="form-group">
                            <label>Nom</label>
                            <input name="name" type="text" class="form-control" placeholder="Ex: Administrateurs">
                        </div>
                        <div class="form-group">
                            <label>Couleur</label>
                            <select name="color" class="form-control form-control-sm">
                                <option value="warning">Jaune</option>
                                <option value="info">Bleu</option>
                                <option value="primary">Turquoise</option>
                                <option value="danger">Rouge</option>
                                <option value="success">Vert</option>
                                <option value="orange">Orange</option>
                                <option value="violet">Violet</option>
                                <option value="dark-gris">Bleu/Gris foncé</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rang <small>(Ceci sert à  la priorité d'affichage)</small></label>
                            <input name="level" type="text" class="form-control" placeholder="Ex: 1 (équivaut à tout en haut)">
                        </div>
                        <div class="form-group">
                            <label>Description <small>(La description est optionel)</small></label>
                            <input name="desc" type="text" class="form-control" placeholder="Ex: Les administrateur sont là pour gérer le serveur.">
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