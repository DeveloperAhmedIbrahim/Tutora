let success = $('#success').val();
let warning = $('#warning').val();
let error = $('#error').val();
let info = $('#info').val();
let url = $('#url').val();

toastr.options = {
    maxOpened: 1,
    autoDismiss: 0,
    closeButton: 1,
    debug: 0,
    newestOnTop: 1,
    progressBar: 1,
    positionClass: "toast-bottom-right",
    preventDuplicates: 1,
    onclick: null,
}

if(success != null && success != '')
{
    toastr['success'](success);
}
if(warning != null && warning != '')
{
    toastr['warning'](warning);
}
if(info != null && info != '')
{
    toastr['info'](info);
}
if(error != null && error != '')
{
    toastr['error'](error);
}

function toggle_password(element,id)
{
    var type = $(`#${id}`).attr('type');
    if(type == 'password')
    {
        $(`#${id}`).attr('type','text');
        $(element).html('<i class="fas fa-eye-slash"></i>');
    }
    else if(type == 'text')
    {
        $(`#${id}`).attr('type','password');
        $(element).html('<i class="fas fa-eye"></i>');
    }
}

function confirmation(section, url, message)
{
    swal({
        title: "Are you sure",
        text: `${message}`,
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, do it!",
        showClass: { popup: "animate__animated animate__fadeIn" },
        customClass: {
            confirmButton: "btn btn-primary me-3 waves-effect waves-light",
            cancelButton: "btn btn-label-secondary waves-effect waves-light",
        },
    }, function () {
        window.location.href = url;
    });
}


CKEDITOR.replace('ckeditor');
CKEDITOR.config.height = 300;
