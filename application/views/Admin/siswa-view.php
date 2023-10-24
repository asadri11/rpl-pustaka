<!-- judul ahalam -->
<h3 class="mt-3">
    <?= $title; ?>
</h3>

<!-- table data siswa -->
<a href="<?= base_url('admin/tambahSiswa'); ?>" class="btn btn-success">Tambah Data Siswa </a>
<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
            <td>NO</td>
            <td>NISN</td>
            <td>NAMA SISWA</td>
            <td>JURUSAN</td>
            <td>JENIS KELAMIN</td>
            <td>AKSI</td>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($siswa as $s) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td>
                        <?= $s['nisn']; ?>
                    </td>
                    <td>
                        <?= $s['nama_siswa']; ?>
                    </td>
                    <td>
                        <?= $s['jurusan']; ?>
                    </td>
                    <td>
                        <?php if($s['jenis_kelamin'] == 'L') :
                        echo "Laki-Laki";
                        else :
                        echo "Perempuan";
                        endif; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('admin/editsiswa/') . $s['nisn'];?>" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('admin/deletesiswa/') . $s['nisn'];?>" class="btn btn-danger">Hapus</a>
                    </td>

                </tr>

                <?php $no++; ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>