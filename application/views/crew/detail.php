<div class="row">
    <div class="col-md-3">
        <img src="<?= base_url('assets/uploads/crew/' . $crew->imgcrew); ?>" class="w-100" height="350">
    </div>
    <div class="col-md-9">
        <table class="h4 text-black table">
            <tr class="align-text-top">
                <td width="150px">Nama </td>
                <td width="5px">:</td>
                <td class="font-weight-bold"><?= $crew->nama; ?></td>
            </tr>
            <tr class="align-text-top">
                <td>Jabatan</td>
                <td>:</td>
                <td class="font-weight-bold"><?= $crew->jabatan; ?></td>
            </tr>
            <tr class="align-text-top">
                <td>Urutan </td>
                <td>:</td>
                <td class="font-weight-bold"><?= $crew->urutan; ?></td>
            </tr>
            <tr class="align-text-top">
                <td>Facebook </td>
                <td>:</td>
                <td class="font-weight-bold"><?= $crew->facebook; ?></td>
            </tr>
            <tr class="align-text-top">
                <td>Instagram </td>
                <td>:</td>
                <td class="font-weight-bold"><?= $crew->instagram; ?></td>
            </tr>
            <tr class="align-text-top">
                <td>Twitter </td>
                <td>:</td>
                <td class="font-weight-bold"><?= $crew->twitter; ?></td>
            </tr>
            <tr class="align-text-top">
                <td>Youtube </td>
                <td>:</td>
                <td class="font-weight-bold"><?= $crew->youtube; ?></td>
            </tr>
        </table>
    </div>
</div>