const flashData = $('.flash-data').data('flashdata');

if(flashData){
    Swal.fire({
        icon: 'success',
        title: 'Informasi',
        text: flashData
        
      })
}

//ERROR
// const flashError = $('.flash-error').data('flasherror');

// if(flashError){
//     Swal.fire({
//         icon: 'error',
//         title: 'Informasi',
//         text: flashError
        
//       })
// }

//tombol hapus
$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin',
        text: "Data ini dihapus?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      })
})

//tombol verifiy
$('.btn-verify').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Are You sure to',
        text: "Verify this File?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Verify!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      })
})

//tombol reject
$('.btn-reject').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Are You sure to',
        text: "Reject this File?",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Reject!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.location.href = href;
        }
      })
})

