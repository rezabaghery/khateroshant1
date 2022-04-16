@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">جستجو محصول</div>

                <div class="card-body">
                    <form action="product">
                        <div class="form-group">
                            <label>آی‌دی محصول</label>
                            <input placeholder="tpi-302134" type=text class="form-control" name="id">
                        </div>
                        <button type="submit" class="btn btn-success">جستجو</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
