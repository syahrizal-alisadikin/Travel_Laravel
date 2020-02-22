// elemen pada saat tombol di click
$('.page-scroll').on('click', function () {

    //ambil isi href
    var tujuan = $(this).attr('href');
    //tangkap elemen yang bersangkutan
    var elementujuan = $(tujuan);

    //pindahkan scroll
    $('html, body').animate({
        scrollTop: elementujuan.offset().top - 60
    }, 1250, 'swing');

    // e.preventDefault();



});
