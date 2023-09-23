$('#add-photo').on('click', function () {

    if ($('.input-img').length < 8) {
        let input
        if ($('.input-img').length <= 0) {
            input = $(
                `
                <div class="input-img">
                    <input type="file" name="foto[]" accept=".jpeg, .jpg, .png, ." id="foto"
                        class="form-control form-control-sm mt-2">
                </div>
                `
                )
        } else {
            input = $(
                `<div class="input-img d-flex mt-2">
                    <input type="file" name="foto[]" accept=".jpeg, .jpg, .png, .mp4, ." id="foto" class="form-control form-control-sm">
                    <div class="ms-2">
                        <button type="button" class="btn-remove btn btn-sm btn-outline-danger">
                            Remove
                        </button>
                    </div>
                </div>`
            )
        }
        $('#input-foto').append(input)
    }


})

$(document).on('click', '.btn-remove', function () {
    $(this).closest('.input-img').remove()
})

$('#remove-btn').click(function () {
    $('input[type="checkbox"]:checked').each(function () {
        let parent = $(this).closest('.col-md-3')
        parent.addClass('d-none')
        parent.find('.input-img').removeClass('input-img')
        $(this).closest('.row').append(parent)
    })

    if ($('.project-img.input-img').length <= 0) {
        $(this).addClass('d-none')
    }

})