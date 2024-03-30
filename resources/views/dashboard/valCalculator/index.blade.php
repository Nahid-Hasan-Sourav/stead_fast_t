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
                                <button type="submit"
                                    class="mt-4 text-white btn btn-success waves-effect waves-light">«Calculate»</button>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5>Net Ammount : </h5>
                    <h5>Vat Ammount : </h5>

                </div>
            </div>
        </div>
    </div>
@endsection
