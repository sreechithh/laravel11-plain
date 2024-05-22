$(document).ready(function () {
    // var clipboard = new Clipboard('.clipboard');
    $('.SelectInputWrapper select').select2();

    // // DOM ELEMENTS
    $('.SwitcheryWrapper input[type=checkbox]').each(function (index, value) {
        new Switchery(this, {
            color: '#008000'
        });
    });

    $('.summernote-editor').summernote({
        height: 200,
        popover: {
            image: [],
            link: [],
            air: []
        }
    });

    // Display color formats
    $(".colorpicker-show-input").spectrum({
        showInput: true,
        allowEmpty: true,
    });

    $('.confirm').click(function () {
        let message = $(this).data('message') || 'Are you sure?';

        return window.confirm(message);
    });

    $('.form-control-uniform').uniform();

    $("a.tooltipLink").tooltip();

});

$(document).ready(function () {

    function cb(start, end) {
        $('.DateRangePickerWrapper input span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('.DateRangePickerWrapper input').each(function (index, element) {

        let start = moment().subtract(29, 'days');
        let end = moment();
        let dateRange = element.value;
        if (dateRange) {
            dateRange = dateRange.split('-');
            if (dateRange[0] && dateRange[1]) {
                start = dateRange[0];
                end = dateRange[1];
            }
        }

        $(this)
            .daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

        cb(start, end);
    });
});


function copyToClipBoard(id) {
    const str = document.getElementById(id).innerText
    const el = document.createElement('textarea')
    el.value = str
    el.setAttribute('readonly', '')
    el.style.position = 'absolute'
    el.style.left = '-9999px'
    document.body.appendChild(el)
    el.select()
    document.execCommand('copy')
    document.body.removeChild(el)
}


$(document).ready(function () {
    $("select").on("select2:select", function (evt) {
        var element = evt.params.data.element;
        var $element = $(element);

        $element.detach();
        $(this).append($element);
        $(this).trigger("change");
    });
});