$(document).ready(() => {

    function showTable() {
        const $showData = $('#show-data');

        $showData.text('Loading the JSON file.');

        // Ambil Data JSON
        $.getJSON('api.php', (respon) => {
            console.log(respon.code);
            console.log(respon.status);

            // Mengatur Ulang Format Dari JSON Menjadi HTML
            const head = `<br><table class="table table-bordered table-responsive">`
            const thead = `<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Tempat Lahir</th><th>No Hp</th><th>Alasan</th></tr></thead><tbody>`
            const markup = respon.data
                .map(item => `
            <tr>
          <td class="imtaq" data-idimtaq="${item.id}">${item.id}</td>
          <td class="imtaq" data-idimtaq="${item.id}">${item.nama}</td>
          <td class="imtaq" data-idimtaq="${item.id}">${item.alamat}</td>
          <td class="imtaq" data-idimtaq="${item.id}">${item.tlahir}</td>
          <td class="imtaq" data-idimtaq="${item.id}">${item.handphone}</td>
          <td class="imtaq" data-idimtaq="${item.id}">${item.alasan}</td>
            </tr>
            `)
                .join('');
            const footer = `</tbody></table>`

            // Merangkum semua data dalam satu variabel
            var listdata = head + thead + markup + footer;
            const list = (listdata);

            // Menampilkan Data table ke Variabel
            $showData.html(list);
        });
    }

    // Menampilkan Table Saat Awal Reload
    showTable();

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
        });
    });
});