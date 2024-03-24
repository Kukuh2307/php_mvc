// bagian untuk menghandle tambah artikel
$(function () {
  $(".tambahArtikelModalLabel").on("click", function () {
    $("#ArtikelModalLabel").html("Tambah Artikel");
    $("#submitBtn").html("Tambah Artikel");
    $("#judul").val("");
    $("#tulisan").val("");
    $("#penulis").val("");
  });

  // bagian untuk menghandle ubah artikel
  $(".editArtikelModalLabel").on("click", function () {
    $("#ArtikelModalLabel").html("Ubah Artikel");
    $(".modal-body form").attr(
      "action",
      "http://localhost/MSIB/6-php_mvc/public/blog/ubah"
    );
    $(".modal-footer button[type=submit]").html("Ubah Artikel");

    const id = $(this).data("id");
    // console.log(id);

    // bagian untuk mendapatkan id dari artikel yang ingin di edit kemudian dikirim dengan format json ke controller getUbah untuk di ambil datanya dari database kemudian akan di tambahkan ke modal form
    $.ajax({
      url: "http://localhost/MSIB/6-php_mvc/public/blog/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#judul").val(data.judul);
        $("#tulisan").val(data.tulisan);
        $("#penulis").val(data.penulis);
        $("#id").val(data.id);
      },
    });
  });
});
