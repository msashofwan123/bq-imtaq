$(document).ready(function () {
    $('#daftar').submit(function (event) {
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
            success: function (response) {
                // menampilkan pesan sukses atau error
                Swal.fire({
                    title: 'SELAMAT',
                    text: 'Data Pendaftaran anda sudah kami terima',
                    icon: 'success', // tipe pesan (success, error, warning, info)
                })
            }
        });
    });
});