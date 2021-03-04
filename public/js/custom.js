$('body').on('click', '.modalshows', function (event) {
    event.preventDefault();

    var me  = $(this),
        url = me.attr('href')

      $.ajax({
          url : url,
          dataType: 'html',
          success : function (response) {
              $('#modal-body').html(response);
          }
      });

      $('#myModal').modal('show');
})

$('body').on('click','.modalshowsSapras', function (event) {
    event.preventDefault();

    var me  = $(this),
    url = me.attr('href')

  $.ajax({
      url : url,
      dataType: 'html',
      success : function (response) {
          $('#modalSapras-body').html(response);
      }
  });

  $('#myModalSapras').modal('show');
})

$('body').on('click', '.modalshowsLarge', function (event) {
    event.preventDefault();

    var me  = $(this),
        url = me.attr('href')

      $.ajax({
          url : url,
          dataType: 'html',
          success : function (response) {
              $('#modalLarge-body').html(response);
          }
      });

      $('#modal-large').modal('show');
})


$('body').on('click', '.modalshowsDetail', function (event) {
    event.preventDefault();

    var me  = $(this),
        url = me.attr('href')

      $.ajax({
          url : url,
          dataType: 'html',
          success : function (response) {
              $('#modalDetail-body').html(response);
          }
      });

      $('#myModalDetail').modal('show');
})

$('body').on('click','#simpanDusun', function () {
    
    var form = $('#formDusun form'),
        url = form.attr('action'),
        red = $('#formDusun a').attr('href'),
        method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';       

    

        $.ajax({
            url : url,
            method : method,
            data : form.serialize(),
            beforeSend : function () {
                $("#loader").show();  
            },
            success : function (data) {
                
                $('.print-error-msg').css('display','none');

                 if (method == 'POST') {
                    swal({
                        type : 'success',
                        title : 'Data Wilayah Administratif',
                        text : 'Berhasil di Input'
                    })
                 } else {
                    swal({
                        type : 'success',
                        title : 'Data Wilayah Administratif',
                        text : 'Berhasil di Update'
                    })
                 }

                    setTimeout(function () {
                        window.location.href=red
                    }, 2000);
             
            },
            complete:function(data){
                $("#loader").hide();
            },
            error : function (xhr) {  
                
                swal({
                    type : 'error',
                    title : 'Gagal Menginput !!!',
                    confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                })
            
                
                var res = xhr.responseJSON;         
                if ($.isEmptyObject(res) == false) {
                    $('.print-error-msg').find('ul').html('');
                    $('.print-error-msg').css('display','block');
                    $.each(res.errors, function (key, value) {

                     $('.print-error-msg').find('ul').append('<li>'+value+'</li>')
                     
                    })
                }
            }
        })
})

$('body').on('click','#modal-btn-save-sapras', function (event) {
    event.preventDefault();

    event.preventDefault();

    var form = $('#modalSapras-body form'),
         url = form.attr('action'),
        method = form.attr('method')
     
     $.ajax({
        url : url,
        method : method,
        data : form.serialize(),
        beforeSend : function () {
            $("#loader").show();  
        },
        success : function () {
            $('.warningGuru').css('display','none');
            form.trigger('reset');
            $('#myModalSapras').modal('hide');
            $('#transportasi').DataTable().ajax.reload();
            $('#sanitasi').DataTable().ajax.reload();
            $('#peribadatan').DataTable().ajax.reload();
            $('#pendidikan').DataTable().ajax.reload();
            $('#olahraga').DataTable().ajax.reload();
            $('#kesehatan').DataTable().ajax.reload();
            $('#irigasi').DataTable().ajax.reload();
            $('#airbersih').DataTable().ajax.reload();

            swal({
                type : 'success',
                title : 'SID',
                text : 'Berhasil di Proses'
            })


        },
        complete:function(data){
            $("#loader").hide();
        },
        error : function (xhr) {
            swal({
                type : 'error',
                title : 'Gagal Menginput !!!',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            })
        
            
            var res = xhr.responseJSON;         
            if ($.isEmptyObject(res) == false) {
                $('.print-error-msg').find('ul').html('');
                $('.print-error-msg').css('display','block');
                $.each(res.errors, function (key, value) {

                 $('.print-error-msg').find('ul').append('<li>'+value+'</li>')
                 
                })
            }
        }
     })
})

$('body').on('click','#simpanX', function (event) {
    event.preventDefault();

    var form =  $('#formX form'),
        url = form.attr('action'),
        redirect_ = $('#formX a').attr('href'),
        title = $(this).attr('title'),
        method = form.attr('method')
     
    $.ajax({
        url : url,
        method : method,
        data : new FormData(form[0]),
        contentType : false,
        processData: false,
        datatype : 'JSON',
        beforeSend : function () {
            $("#loader").show();  
        },
        success : function (data) {
           
            if (method == 'POST') {
                swal({
                    type : 'success',
                    title : title,
                    text : 'Berhasil di Input'
                })
             } else {
                swal({
                    type : 'success',
                    title : title,
                    text : 'Berhasil di Update'
                })
             }

             setTimeout(function () {
                window.location.href=redirect_
            }, 2000);
        },
        complete:function(data){
            $("#loader").hide();
        },
        error : function (xhr) {
            swal({
                type : 'error',
                title : 'Gagal Menginput !!!',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            })
        
            
            var res = xhr.responseJSON;         
            if ($.isEmptyObject(res) == false) {
                $('.print-error-msg').find('ul').html('');
                $('.print-error-msg').css('display','block');
                $.each(res.errors, function (key, value) {

                 $('.print-error-msg').find('ul').append('<li>'+value+'</li>')
                 
                })
            }
        }
    })      
})

$('body').on('click','#modal-btn-save',function (event) {
    event.preventDefault();

    var form = $('#modal-body form'),
         url = form.attr('action'),
        method = form.attr('method')
     
     $.ajax({
        url : url,
        method : method,
        data : new FormData(form[0]),
        contentType : false,
        processData: false,
        datatype : 'JSON',
        beforeSend : function () {
            $("#loader").show();  
        },
        success : function () {
            $('.warningGuru').css('display','none');
            form.trigger('reset');
            $('#myModal').modal('hide');
            $('#datatable').DataTable().ajax.reload();

            swal({
                type : 'success',
                title : 'Panel SMKN 5 BARRU',
                text : 'Berhasil di Proses'
            })


        },
        complete:function(data){
            $("#loader").hide();
        },
        error : function (xhr) {
            swal({
                type : 'error',
                title : 'Gagal Menginput !!!',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            })
        
            
            var res = xhr.responseJSON;         
            if ($.isEmptyObject(res) == false) {
                $('.print-error-msg').find('ul').html('');
                $('.print-error-msg').css('display','block');
                $.each(res.errors, function (key, value) {

                 $('.print-error-msg').find('ul').append('<li>'+value+'</li>')
                 
                })
            }
        }
     })
})

$('body').on('click','#modal-btn-savePend',function (event) {
    event.preventDefault();

    var form = $('#modalLarge-body form'),
         url = form.attr('action'),
        method = form.attr('method')
     
     $.ajax({
        url : url,
        method : method,
        data : new FormData(form[0]),
        contentType : false,
        processData: false,
        datatype : 'JSON',
        beforeSend : function () {
            $("#loader").show();  
        },
        success : function () {
            $('.warningGuru').css('display','none');
            form.trigger('reset');
            $('#modal-large').modal('hide');
            $('#datatable').DataTable().ajax.reload();

            swal({
                type : 'success',
                title : 'SID',
                text : 'Berhasil di Proses'
            })


        },
        complete:function(data){
            $("#loader").hide();
        },
        error : function (xhr) {
            swal({
                type : 'error',
                title : 'Gagal Menginput !!!',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
            })
        
            
            var res = xhr.responseJSON;         
            if ($.isEmptyObject(res) == false) {
                $('.print-error-msg').find('ul').html('');
                $('.print-error-msg').css('display','block');
                $.each(res.errors, function (key, value) {

                 $('.print-error-msg').find('ul').append('<li>'+value+'</li>')
                 
                })
            }
        }
     })
})

$('body').on('click','.deleteDusun', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href')
        token = $('meta[name="csrf-token"]').attr('content')



    swal({
        title: "Apa Kamu Yakin ?",
        text: "Anda tidak akan dapat memulihkan data ini!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Tidak, batalkan!",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url  : url,
                type : 'POST',
                data : {
                    '_method' : 'DELETE',
                    '_token' : token
                },
                beforeSend : function () {
                    $("#loader").show();  
                },
                success: function (response) {
                    $('#datatable').DataTable().ajax.reload();
                    swal("SID", "Data Anda Sudah Terhapus.", "success");
                },
                complete:function(data){
                    $("#loader").hide();
                },
            })
        }else{
            swal("Batal", "Data ini aman :)", "error");
        }
    });
    

})

$(document).on('change','#nama_nik', function () {

    $.ajaxSetup({
        headers : {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var nikGet =  $(this).val(),
        url = $('#routeTampung').attr('href')

    $.ajax({
        url : url,
        type : 'POST',
        data : {
            nama_nik  : nikGet
        },
        beforeSend : function () {
            $("#loader").show();  
        },
        success:function (data) {
       
           $('#nama').val(data.nama).attr('readonly','true'),
           $('#nik').val(data.nik).attr('readonly','true'),
           $('#tempat_lahir').val(data.tempat_lahir).attr('readonly','true'),
           $('#tanggal_lahir').val(data.tgl_lahir).attr('readonly','true'),
           $('#jenis_kelamin').val(data.jk).attr('disabled','true'),
        //    $('#jenis_kelamin option[value="'.data.jenis_kelamin.'"]').attr('selected','selected'),
           $('#pendidikan').val(data.pendidikan_KK),
           $('#agama').val(data.agama).attr('readonly','true')
        },
        complete:function(data){
            $("#loader").hide();
        },
    })

})

$('body').on('click','#simpanAparat', function () {

    var form = $('#formAparat form'),
        url = form.attr('action'),
        red = $('#formAparat a').attr('href'),
        method = $('input[name=_method]').val() == undefined ? 'PUT' : 'POST';
       
        $.ajax({
            url : url,
            method : method,
            data : new FormData(form[0]),
            contentType : false,
            processData: false,
            datatype : 'JSON',
            beforeSend : function () {
                $("#loader").show();  
            },
            success : function (response) {
                $('.dangerAparat').css('display','none');

                if (method == 'POST') {
                    swal({
                        type : 'success',
                        title : 'Data Pemerintah Desa',
                        text : 'Berhasil di Input'
                    })
                }else{
                    swal({
                        type : 'success',
                        title : 'Data Pemerintah Desa',
                        text : 'Berhasil di Update'
                    })
                }

                setTimeout(function () {
                    window.location.href = red
                },2000)

            },
            complete:function(data){
                $("#loader").hide();
            },
            error : function (xhr) {
             
                swal({
                    type : 'error',
                    title : 'Gagal Menginput !!!',
                    confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                })
         

                var res = xhr.responseJSON;
                if ($.isEmptyObject(res) == false) {
                   
                        $('.errorAparat').find('ul').html('');
                        $('.dangerAparat').css('display','block');

                        $.each(res.errors, function (key, value) {
                            $('.errorAparat').find('ul').append('<li>'+value+'</li>')
                        })

                }

                $('html, body').animate({
                    scrollTop: $(".panel-info").offset().top
                   }, 2500);
               

            }           
        })

})

$('body').on('click','.deleteAparat', function (event) {
    event.preventDefault();

    var me = $(this),
        url = me.attr('href'),
        token = $('meta[name="csrf-token"]').attr('content')

        swal({
            title: "Apa Kamu Yakin ?",
            text: "Anda tidak akan dapat memulihkan data ini!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Tidak, batalkan!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url  : url,
                    type : 'POST',
                    data : {
                        '_method' : 'DELETE',
                        '_token' : token
                    },
                    success: function (response) {
                        $('#datatableAparat').DataTable().ajax.reload();
                        swal("Data Pemerintah Desa", "Data Anda Sudah Terhapus.", "success");
                    }
                })
            }else{
                swal("Batal", "Data ini aman :)", "error");
            }
        });

})

// REDIRECT WIDGET LEMBAGA

$('body').on('click','.bpd', function () {
    var url = $(this).attr('data-action');
    window.location.href = url;
})

$('body').on('click','.pkk', function () {
    var url = $(this).attr('data-action');
    window.location.href = url;
})

$('body').on('click','.karang', function () {
    var url = $(this).attr('data-action');
    window.location.href = url;
})

$('body').on('click','.bumdes', function () {
    var url = $(this).attr('data-action');
    window.location.href = url;
})

