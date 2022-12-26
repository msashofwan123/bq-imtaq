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
            const head = ''
            const markup = respon.data
                .map(item => `
          <tr>
          <td class="surat">${item.id}</td>
          <td class="surat">${item.nama}</td>
          <td class="surat">${item.alamat}</td>
          <td class="surat">${item.tlahir} Ayat</td>
          </tr>
            `)
                .join('');
            const list = $('<div class="table-responsive"> <table class="table"/> </div>').html(head + markup);

            // tampilkan di kolom ke dua
            $showData.html(list);
        });
    });

});