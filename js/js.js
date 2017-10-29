// --- Jquery data picker ---
$(function () {
    var dateToday = new Date();
    var bgDay = ["н","п","в","с","ч","п","с"];
    var dateFormat = "yy-mm-dd",
        from = $("#checkin")
            .datepicker({
                dateFormat: dateFormat,
                dayNamesMin: bgDay,
                firstDay: 1,
                minDate: dateToday,
                //defaultDate: "+1d",
                changeMonth: true,
                numberOfMonths: 2,
                //showAnim: 'slide',
            })
            .on("change", function () {
                var minDate = $(this).datepicker('getDate');
                minDate.setDate(minDate.getDate() + 1);
                $("#checkout").datepicker("option", "minDate", minDate);
                $("#checkout").datepicker("setDate", minDate);
            }),
        to = $("#checkout").datepicker({
                dateFormat: dateFormat,
                dayNamesMin: bgDay,
                firstDay: 1,
                defaultDate: "+1d",
                minDate: dateToday,
                changeMonth: true,
                numberOfMonths: 2,
            })
            .on("change", function () {
                from.datepicker("option", "maxDate", getDate(this));
            });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }
        return date;
    }
});