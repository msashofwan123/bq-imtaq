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
            const head = ``
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
            const list = $('<table class="table table-borderless">').html(head + markup);

            // tampilkan di kolom ke dua
            $showData.html(list);
        });
    });

});