//add or remove textbox dynamically
$("#setupModal").on('shown.bs.modal', function () {

    var counter = 2;

    $("#addButton").click(function () {

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html(
            '<div id="TextBoxDiv' + counter + '"><div class="col-md-8"><div class= "form-group"><input type="text" class="form-control" name="description[]" placeholder="Eg: Tuition Payment, PTA Levy etc"></div></div><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" name="amount[]" placeholder="3000"></div></div></div>'
        );

        newTextBoxDiv.appendTo("#TextBoxesGroup");

        counter++;
    });

    $("#removeButton").click(function () {
        if (counter > 2) {
            counter--;
            $("#TextBoxDiv" + counter).remove();            
        }
    });
});

//add dynamic textboxes for setup fees
$("#addModal").on('shown.bs.modal', function () {

    var counter = 2;

    $("#addButton").click(function () {

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDiv' + counter);

        newTextBoxDiv.after().html(
            '<div id="TextBoxDiv' + counter + '"><div class="col-md-8"><div class= "form-group"><input type="text" class="form-control" name="description[]" placeholder="Eg: Tuition Payment, PTA Levy etc"></div></div><div class="col-md-4"><div class="form-group"><input type="text" class="form-control" name="amount[]" placeholder="3000"></div></div></div>'
        );

        newTextBoxDiv.appendTo("#TextBoxesGroup");

        counter++;
    });

    $("#removeButton").click(function () {
        if (counter > 2) {
            counter--;
            $("#TextBoxDiv" + counter).remove();
        }
    });
});

//add dynamic textboxes for fees collected by school
$("#feetypeModal").on('shown.bs.modal', function () {

    var counter = 2;

    $("#addButtonx").click(function () {

        var newTextBoxDiv = $(document.createElement('div'))
            .attr("id", 'TextBoxDivx' + counter);

        newTextBoxDiv.after().html(
            '<div id="TextBoxDivx' + counter + '"><div class="col-md-12"><div class= "form-group"><input type="text" class="form-control" name="feetype[]" placeholder="Eg: School Fees"></div></div>'
        );

        newTextBoxDiv.appendTo("#TextBoxesGroupx");

        counter++;
    });

    $("#removeButtonx").click(function () {
        if (counter > 2) {
            counter--;
            $("#TextBoxDivx" + counter).remove();
        }
    });
});

//flipping a div like a page
$("#flipdiv").flip({
    trigger: 'manual'
});

function flipFunction() {
    $("#flipdiv").flip('toggle');
}

/** ajax function to fill the account name from the provided
    bank details using Paystack API
*/
$('#loader').hide();//hide the loader
$('#acctno').keyup(function () {
    var acctno = $(this).val();
    var bankcode = $('#bank').val();

    // var data = {'Account Number' : acctno, 'Bank Code' : bankcode};

    if (acctno != '' && bankcode != '') {
        if ((acctno.toString().length) == 10) {
            var _token = $('input[name= "_token"]').val();

            $.ajax({
                url: "/paystack/get_acctname",
                method: "POST",
                data: { acctno: acctno, bankcode: bankcode, _token: _token },
                beforeSend: function () {
                    // $('#loader').html('');
                    // var gif = "<img width='auto' height='50' src=\"{{asset('dashboard/assets/images/loader1.gif')}}\" >";
                    // $('#loader').html(gif);
                    $('#loader').show();
                },
                success: function (data) {
                    // console.log(data);
                    $('#acctname').val('');
                    $('#acctname').val(data.account_name);
                    $('#loader').hide();
                }
            })
        }
    }
});