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
            const head = `<br><table class="table table-bordered"`
            const thead = `<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Tempat Lahir</th><th>No Hp</th><th>Alasan</th></tr></thead>`
            const markup = respon.data
                .map(item => `
            <tr>
          <td class="surat table-info">${item.id}</td>
          <td class="surat table-info">${item.nama}</td>
          <td class="surat table-info">${item.alamat}</td>
          <td class="surat table-info">${item.tlahir}</td>
          <td class="surat table-info">${item.handphone}</td>
          <td class="surat table-info">${item.alasan}</td>
            </tr>
            `)
                .join('');
            const footer = `</table`
            const list = (head + thead + markup + footer);

            // tampilkan di kolom ke dua
            $showData.html(list);
        });
    });

});