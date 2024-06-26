// bagian untuk menghandle tambah artikel
$(function () {
  // USER
  // tambah user
  $(".tambahUserModalLabel").on("click", function () {
    $("#UserModalLabel").html("Tambah User");
    $("#submitBtn").html("Tambah User");
    $("#nama").val("");
    $("#email").val("");
    $("#position").val("");
    $("#alamat").val("");
  });
  // edit user
  $(".editUserModalLabel").on("click", function () {
    $("#UserModalLabel").html("Edit User");
    $(".modal-body form").attr(
      "action",
      "http://localhost/MSIB/6-php_mvc/public/user/ubah"
    );
    $(".modal-footer button[type=submit]").html("Edit User");
    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/MSIB/6-php_mvc/public/user/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",

      success: function (data) {
        // console.log(data);
        $("#nama").val(data.nama);
        $("#email").val(data.email);
        $("#position").val(data.position);
        $("#alamat").val(data.alamat);
        $("#id").val(data.id);
      },
    });
  });

  // ARTIKEL / BLOG
  // tambah artikel
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
