var getUrl = window.location;
var base_url = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1] + "/index.php/";

$(function () {
    toCategory()
    alpa()
    alpaKategori()
    toJalurMasuk()
})

function toCategory() {
    $.post(
        base_url + "Home/category",
        function (data) {
            data = JSON.parse(data)
            var html = ''
            for (let i in data.toOption) {
                html += '<option value="' + data.toOption[i].id_kategori + '">' + data.toOption[i].kategori + '</option>'
            }


            $('#select_category').html(html)
            $('#select_category').val(data.toOption[0].id_kategori)
            $('.kategori').html(data.toOption[0].kategori)
            toTableSESDES()
        }
    )
}

function toJalurMasuk(){
    $.post(
        base_url + "Home/getJalur",
        function (data) {
            data = JSON.parse(data)
            var html = ''
            for (let i in data.toOption) {
                html += '<option value="' + data.toOption[i].id_jalur + '">' + data.toOption[i].nama_jalur + '</option>'
            }


            $('#select_jalur').html(html)
            $('#select_jalur').val(data.toOption[0].id_jalur)
            $('.kategori').html(data.toOption[0].nama_jalur)
            toTablejalurMasuk()
        }
    )
}

function toTablejalurMasuk(){
    var id = $('#select_jalur').val()
    $.post(
        base_url + "Home/data_jalur_masuk/" + id,
        function (data) {
            //console.log(data)
            $('.jalur-masuk').html(data)
        }
    )

}

function toTableSESDES() {
    var id = $('#select_category').val()
    $.post(
        base_url + "Home/data_/" + id,
        function (data) {
            $('.ses-des').html(data)
        }
    )

    $.post(
        base_url + "Home/getCategory/" + id,
        function (data) {
            data = JSON.parse(data)
            $('.kategori').html(data.kategori)
        }
    )
}

function alpa() {
    $.get(
        base_url + "Home/prosesAlpa/1",
        function (data) {
            //console.log(data)
            $('.alpha').html(data)
        }
    )
}

function alpaKategori() {
    $.get(
        base_url + "Home/alpaKategori",
        function (data) {
            //console.log(data)
            $('.alpa-kategori').html(data)
            var table = $('#tabelKategori').DataTable({
                order: [],
                pageLength: 10,
                'lengthChange': false,
                "bDestroy": true,
            })
            $('#search-kategori').on('keyup', function () {
                table.search(this.value).draw();
            });
        }
    )
}