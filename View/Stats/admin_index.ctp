<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Staff</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-12 text-right">
                        <a class="btn btn-success" href="<?= $this->Html->url('/admin/stats/ajouterRang') ?>" style="color:#FFF"><i class="fa fa-plus"></i> Ajouter un rang</a>
                        <a class="btn btn-success" href="<?= $this->Html->url('/admin/stats/ajouterStaff') ?>" style="color:#FFF"><i class="fa fa-plus"></i> Ajouter un staff</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box-header with-border">
                        <h3 class="box-title">Rangs</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($staffs as $staff): ?>
                                <tr>
                                    <td><?= $staff['Staff']['id'] ?></td>
                                    <td><?= $staff['Staff']['name'] ?>
                                        <span class="badge">
                                        <?php
                                        $i = 0;
                                        foreach($staffResult as $s):
                                            if($s['StaffUser']['staff_id'] == $staff['Staff']['id']) $i++;
                                        endforeach;
                                        echo $i;
                                        ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" style="color: #FFF" href="<?= $this->Html->url('/admin/stats/modifierRang/' .  $staff['Staff']['id']) ?>">Modifier</a>
                                        <a class="btn btn-danger" style="color: #FFF" href="<?= $this->Html->url('/admin/stats/supprimerRang/' .  $staff['Staff']['id']) ?>">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box-header with-border">
                        <h3 class="box-title">Liste des staffs</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Rang</th>
                                <th>Fonction</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($staffResult as $staff): ?>
                                <tr>
                                    <td><?= $staff['StaffUser']['id'] ?></td>
                                    <td><?= $staff['StaffUser']['user_id'] ?></td>
                                    <td><?= $staff['Staff']['name'] ?></td>
                                    <td><?= $staff['StaffUser']['function'] ?></td>
                                    <td>
                                        <a class="btn btn-warning" style="color: #FFF" href="<?= $this->Html->url('/admin/stats/modifierStaff/' . $staff['StaffUser']['id']) ?>">Modifier</a>
                                        <a class="btn btn-danger" style="color: #FFF" href="<?= $this->Html->url('/admin/stats/supprimerStaff/' . $staff['StaffUser']['id']) ?>">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>