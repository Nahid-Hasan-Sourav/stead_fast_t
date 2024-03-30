@extends('dashboard.master')

@section('body')
    <div class="row">
        <div class="col-lg-8">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>



                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Gross Sum:</label>
                            <div class="col-sm-9">
                                <div class="input-group">

                                    <input class="form-control" type="number" name="gross_sum" id="gross_sum" required
                                        required placeholder="Enter Gross Sum">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">VAT Percentage:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="vat_percentage" id="vat_percentage"
                                    required placeholder="Enter Vat Percentage">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Operation</label>
                            <div class="col-sm-9">
                                <select name="operation" id="operation" required>
                                    <option value="exclude">Exclude VAT</option>
                                    <option value="include">Include VAT</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" id="calculateBtn"
                                    class="mt-4 text-white btn btn-success waves-effect waves-light">«Calculate»</button>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card result-card d-none">
                <div class="card-body">
                    <h5>Net Amount: <span id="netAmountDisplay"></span></h5>
                    <h5>VAT Amount: <span id="vatAmountDisplay"></span></h5>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#calculateBtn').click(function() {
            var grossSum = $('#gross_sum').val();
            var vatPercentage = $('#vat_percentage').val();
            var operation = $('#operation').val();

            const data = {
                grossSum,
                vatPercentage,
                operation
            };


            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $.ajax({
                url: "/vat/calculation",
                type: "POST",
                data: data,

                success: function(response) {
                    // console.log("submit form data: ", response);

                    if (response.status === "success") {

                        console.log("After Vat Calculation: ", response);
                        $('.result-card').removeClass('d-none');
                        $('#netAmountDisplay').text(response.netAmount);
                        $('#vatAmountDisplay').text(response.vatAmount);
                    }


                },
                error: function(xhr, status, error) {
                    console.log("Error: ", error);
                    var response = JSON.parse(xhr.responseText);
                    console.log("Error Message: ", response.message);
                    response.message.forEach(function(errorMessage) {
                        toastr.error(errorMessage);
                    });
                },
            });
        });
    </script>
@endpush
