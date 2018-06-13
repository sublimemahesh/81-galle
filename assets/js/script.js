$(function () {
    $('body').append('<div class="modal">\n' +
        '    <div class="modal-content">\n' +
        '        <span class="close icon-close"></span>\n' +
        '        <img src="" class="modal-image">\n' +
        '    </div>\n' +
        '</div>');

    // Handle keyboard shortcuts
    $(document).keyup(function(e) {
        if (e.keyCode === 27 /* Escape key*/){
            if($('.modal.modal-active').length){
                console.log("test");
                closeModal();
            }
        }
      });

    // Handle event on .close button click
    $('.close').click(function () {
        closeModal();
    });

    $('.modal').click(function(e){
        if($(e.target).is(".modal-content .modal-image")){
            // Click is not outside the image
            return;
        }
        // Otherwise close the image
        closeModal();
    })
    $('.modal > .modal-content').click(function(event){

    })
    // Show the lightbox modal
    $('a.lightbox').click(function (event) {
        // Prevent the link from going to the image
        event.preventDefault();

        $('.modal img').attr('src', $(this).attr('href'));

        // Add the class to the body to make .wrapper blurred
        $('body').removeClass('blur-out').addClass('blur-active');

        // Set active class on the modal
        $('.modal').removeClass('fade-out').addClass('modal-active');
    })
});

function closeModal(){
    $('.modal.modal-active').removeClass('modal-active')
    .addClass('fade-out');
    $('body').removeClass('blur-active')
    .addClass('blur-out');
}