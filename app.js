$('#add-icon').click(function () {
    initial();
    $('#add-form').addClass('on');
    $('textarea').focus();
    final();
});
$('#search-icon').click(function () {
    initial();
    $('#search-block').addClass('on');
    $('.key').focus();
    final();
});

$('.close-icon').click(function () {
    initial();
});



function initial() {
    $('.box').removeClass('on');
    $('#logo').addClass('on');
}

function final() {
    $('#logo').removeClass('on');
}
function showSuccess() {
    $('#success').addClass('on');
}
function showResult(txt, file) {
    $('#result').addClass('on');
    var formattedText = '<pre>' + escapeHTML(txt) + '</pre>';
    $('.result-msg').html(formattedText);
    console.log(file);
    if (file != "") {
        $('.download-file').addClass('have');
        $('.download-file').attr('href', 'files/' + file);
    } else {
        $('.download-file').removeClass('have');
    }
}

function escapeHTML(html) {
    return html.replace(/</g, '&lt;').replace(/>/g, '&gt;');
}



function showSuccess(val1, val2) {
    $('#success').addClass('on');
    $('#keyResult').val(val1)
    $('#pinResult').val(val2)
}
function processLoader() {
    $('.searching').addClass('on');
    $('.loader').addClass('load');
}
function hideLoader() {
    $('.searching').removeClass('on');
    $('.loader').removeClass('load');
}
$(document).ready(function () {
    $('#send-data').submit(function (e) {
        e.preventDefault();
    
        // Check if textarea and pin fields are filled
        var formValid = true;
        $(this).find('textarea, input[name="pin"]').each(function() {
            if ($(this).val() === '') {
                formValid = false;
                $(this).next('.error-message').html('Please fill in this field.'); // Add an error message
            } else {
                $(this).next('.error-message').html(''); // Clear error message if the field is filled
            }
        });
    
        if (!formValid) {
            // Display an error or return
            console.log('Please fill in all required fields.');
            return;
        }
    
        processLoader();
    
        var formData = new FormData(this);
    
        $.ajax({
            url: 'add',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#send-data')[0].reset();
                const res = response.split("|");
                hideLoader();
                initial();
                showSuccess(res[0], res[1]);
                shareAction(res[0], res[1]);
            },
            error: function (xhr, status, error) {
                hideLoader();
                console.log("Error:", error);
            }
        });
    });
    

    $('.copy-icon').on('click', function () {
        var targetId = $(this).data('target');
        var inputToCopy = $('#' + targetId);

        inputToCopy.select();
        document.execCommand('copy');

        // Remove text selection after copying
        if (window.getSelection) {
            window.getSelection().removeAllRanges(); // For modern browsers
        } else if (document.selection) {
            document.selection.empty(); // For IE
        }

        var copiedMessage = $(this).siblings('.copied');
        copiedMessage.addClass('active');

        setTimeout(function () {
            copiedMessage.removeClass('active');
        }, 2000);
    });

    $('#search-form').submit(function (e) {
        e.preventDefault();

        // Check if textarea and pin fields are filled
        var formValid = true;
        $(this).find('input').each(function() {
            if ($(this).val().trim() === '') {
                formValid = false;
                $(this).next('.error-message').html('Please fill in this field.'); // Add an error message
            } else {
                $(this).next('.error-message').html(''); // Clear error message if the field is filled
            }
        });

        if (!formValid) {
            // Display an error or return
            console.log('Please fill in all required fields.');
            return;
        }



        processLoader();

        var formData = new FormData(this);
        $.ajax({
            url: 'search',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#search-form')[0].reset();
                const res = response.split("|");
                hideLoader();
                initial();
                showResult(res[0], res[1]);
                copyResult(res[0])
            },
            error: function (xhr, status, error) {
                hideLoader();
                console.log("Error:", error);
            }
        });
    });


});

function shareAction(val1, val2) {
    $('.share-data').on('click', function () {
        const key = val1
        const pin = val2

        const textToCopy = `Welcome to ConfidexKey\n\nKey: ${key}\nPin: ${pin}`;

        const hiddenTextArea = $('#hiddenTextArea');
        hiddenTextArea.val(textToCopy);
        hiddenTextArea.select();
        document.execCommand('copy');
        $('.share-copied').addClass('active');
        setTimeout(function () {
            $('.share-copied').removeClass('active');
        }, 2000);
    });
}
function copyResult(txt) {
    $('.copy-result').on('click', function () {

        const textToCopy = txt;

        const hiddenTextArea = $('#hiddenTextArea2');
        hiddenTextArea.val(textToCopy);
        hiddenTextArea.select();
        document.execCommand('copy');
        $('.share-copied').addClass('active');
        setTimeout(function () {
            $('.share-copied').removeClass('active');
        }, 2000);
    });
}





function resetJS() {
    $(document).keydown(function (event) {
        if (event.keyCode == 123) { // Prevent F12
            return false;
        }
        else if (event.ctrlKey) {
            return false;
        }
        else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
            return false;
        }
        else if (event.ctrlKey && event.shiftKey && event.keyCode == 74) {
        }
        else if (event.ctrlKey && event.keyCode == 85) {
        }
    });
}