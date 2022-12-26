$(document).ready(() => {

    const $showData = $('#show-data');

    $('#get-data').on('click', (event) => {
        //  jangan refresh halaman    
        event.preventDefault();

        $showData.text('Loading the JSON file.');

        // get json di endpoint
        $.getJSON('api.php', (respon) => {
            console.log(respon.code);
            console.log(respon.status);

            // mengatur ulang format respon dari json menjadi html
            const head = `<br><table class="table table-bordered table-responsive">`
            const thead = `<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Tempat Lahir</th><th>No Hp</th><th>Alasan</th></tr></thead><tbody>`
            const markup = respon.data
                .map(item => `
            <tr>
          <td class="surat">${item.id}</td>
          <td class="surat">${item.nama}</td>
          <td class="surat">${item.alamat}</td>
          <td class="surat">${item.tlahir}</td>
          <td class="surat">${item.handphone}</td>
          <td class="surat">${item.alasan}</td>
            </tr>
            `)
                .join('');
            const footer = `</tbody></table>`
            var listdata = head + thead + markup + footer;
            const list = (listdata);

            // tampilkan di kolom ke dua
            $showData.html(list);
        });
    });

});