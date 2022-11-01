$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<div class='form-row'>");
        var cols = "";

        cols += `<div class="form-group  col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-3">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                 </div>`
        cols += `<div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
       

        cols += `<div class="form-group col-lg-1">
                    <input type="button" class="form-control bg-danger ibtnDel"
                    value="X" >
                </div>`
        newRow.append(cols);
        $(".myTable").append(newRow);
        counter++;
        $(".myTable").on("click", ".ibtnDel", function (event) {
            $(this).closest("div.form-row").remove();       
            counter -= 1
        });
    });

    $("#add").on("click", function () {
        var newRow = $("<div class='form-row'>");
        var cols = "";

        cols += `<div class="form-group  col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-3">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                 </div>`
        cols += `<div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        
       

        cols += `<div class="form-group col-lg-1">
                    <input type="button" class="form-control bg-danger ibtnDel"
                    value="X" >
                </div>`
        newRow.append(cols);
        $(".mynewTable").append(newRow);
        counter++;
    });

    $(".mynewTable").on("click", ".ibtnDel", function (event) {
        $(this).closest("div.form-row").remove();       
        counter -= 1
    });

    $("#addwork").on("click", function () {
        var newRow = $("<div class='form-row'>");
        var cols = "";

        cols += `<div class="form-group  col-lg-1">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-1">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                 </div>`
        cols += `<div class="form-group col-lg-1">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-2">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-3">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        cols += `<div class="form-group col-lg-3">
                    <input type="text" class="form-control" id="validationCustom01" name="' + counter + '" required>
                </div>`
        
       

        cols += `<div class="form-group col-lg-1">
                    <input type="button" class="form-control bg-danger ibtnDel"
                    value="X" >
                </div>`
        newRow.append(cols);
        $(".addform").append(newRow);
        counter++;
    });

    $(".addform").on("click", ".ibtnDel", function (event) {
        $(this).closest("div.form-row").remove();       
        counter -= 1
    });

});

