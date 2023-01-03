$(document).ready(() => {

    // Menampilkan Table Saat Awal Reload
    showTable();

    // Memasukkan Code Untuk menampilkan Table dalam satu Fungsi, yaitu ShowTable
    function showTable() {
        const $showData = $('#show-data');

        $showData.text('Loading the JSON file.');

        // Ambil Data JSON
        $.getJSON('api.php', (respon) => {
            console.log(respon.code);
            console.log(respon.status);

            // Mengatur Ulang Format Dari JSON Menjadi HTML
            const head = `<br><table id="tabelnya" class="table table-bordered table-responsive">`
            const thead = `<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Tempat Lahir</th><th>No Hp</th><th>Alasan</th></tr></thead><tbody>`
            const markup = respon.data
                .map(item => `
            <tr data-id="${item.id}">
          <td>${item.id}</td>
          <td>${item.nama}</td>
          <td>${item.alamat}</td>
          <td>${item.tlahir}</td>
          <td>${item.handphone}</td>
          <td>${item.alasan}</td>
          <td>
                <button class="btn btn-danger hapus" id="hapus" data-id="${item.id}">HAPUS</button>
          </td>
            </tr>
            `)
                .join('');
            const footer = `</tbody></table>`

            // Merangkum semua data dalam satu variabel
            var listdata = head + thead + markup + footer;
            const list = (listdata);

            // Menampilkan Data table ke Variabel
            $showData.html(list);

            // Memproses Penghapusan Data
            $('.hapus').on('click', (event) => {
                // console.log($(event.target).data("id"));
                var hapus = $(event.target).data("id");
                // console.log(hapus);

                // Menampilkan Layar Konfirmasi Penghapusan Data
                swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Perintah Tidak dapat dibatalkan!",
                    icon: 'warning', // tipe pesan (success, error, warning, info)
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'YA'
                }).then((result) => {
                    // ketika layar konfirmasi di klik "Iya", maka kode yang akan dijalankan adalah:
                    if (result.value) {

                        // Proses Menghapus Data
                        $.ajax({
                            url: 'delete.php',
                            method: 'POST',
                            data: {
                                id: hapus
                            },
                            success: function () {
                                // Menampilkan Konfirmasi Bahwa Data Telah Dihapus
                                Swal.fire({
                                    title: 'SUKSES',
                                    text: 'Data Berhasil Di Hapus',
                                    icon: 'success', // tipe pesan (success, error, warning, info)
                                })
                            }
                        }).always(function () {
                            // Menjalankan perintah ShowTable saat Penghapusan berhasil
                            showTable();
                        });
                    }
                });
            });
        });
    }

    // Kode Untuk Submit
    $('#form-submit').submit(function (event) {
        event.preventDefault(); // mencegah form dari reload

        // mengambil nilai dari form
        var id = $('#id').val();
        var nama = $('#nama').val();
        var alamat = $('#alamat').val();
        var tlahir = $('#tlahir').val();
        var handphone = $('#handphone').val();
        var alasan = $('#alasan').val();

        // Mencegah Form Disubmit bila mana ada yang kosong  
        if (nama == '' || alamat == '' || tlahir == '' || handphone == '' || alasan == '') {
            // alert('Pastikan anda mengisi semua kolom!');
            Swal.fire({
                title: 'Peringatan',
                text: 'pastikan anda mengisi semua kolom',
                icon: 'warning', // tipe pesan (success, error, warning, info)
            });
            return;
        }

        // mengirim data ke server menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: 'daftarjs.php',
            data: { id: id, nama: nama, alamat: alamat, tlahir: tlahir, handphone: handphone, alasan: alasan },
            success: function () {
                // Menampilkan Pesan Sukses
                Swal.fire({
                    title: 'SELAMAT',
                    text: 'Data Pendaftaran anda sudah kami terima',
                    icon: 'success', // tipe pesan (success, error, warning, info)
                })
            }
        }).always(function () {
            // Menjalankan perintah ShowTable saat Pendaftaran berhasil
            showTable();
        }).always(function () {
            // Menjalankan Fungsi removeForm untuk menghapus sisa Data di Form
                removeForm();
        });
    });

    // Fungsi untuk mengkosongkan Value di Form
    function removeForm() {
          $("#nama").val('');
          $("#alamat").val('');
          $("#tlahir").val('');
          $("#handphone").val('');
          $("#alasan").val('');
    };
});