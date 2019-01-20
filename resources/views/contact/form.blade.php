


<div class="col-md-6 box-body">

    <div class="form-row">
        <div class="form-group ">
            <label for="email">Email*</label>
            {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="first-name">First Name*</label>
            {!! Form::text('first_name', null, ['class' => 'form-control', 'id' => 'first-name']) !!}
            @if ($errors->has('first_name'))
                <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="last-name">last Name*</label>
            {!! Form::text('last_name', null, ['class' => 'form-control', 'id' => 'last-name']) !!}

            @if ($errors->has('last_name'))
                <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group ">
            <label for="function">Function</label>
            {!! Form::text('function', null, ['class' => 'form-control', 'id' => 'function']) !!}

            @if ($errors->has('function'))
                <span class="help-block">
                <strong>{{ $errors->first('function') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group ">
            <label for="city">City</label>
            {!! Form::text('city', null, ['class' => 'form-control', 'id' => 'city']) !!}

            @if ($errors->has('city'))
                <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group ">
            <label for="phone">Phone Number</label>
            {!! Form::text('phone_number', null, ['class' => 'form-control', 'id' => 'phone']) !!}

            @if ($errors->has('phone_number'))
                <span class="help-block">
                <strong>{{ $errors->first('phone_number') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group ">
            <label for="birth-date">Birth Date</label>
            {!! Form::text('birth_date', null, ['class' => 'form-control', 'id' => 'datepicker']) !!}

            @if ($errors->has('birth_date'))
                <span class="help-block">
                <strong>{{ $errors->first('birth_date') }}</strong>
            </span>
            @endif
        </div>
        <div>
            <span>*Required Fields</span>
        </div>

        <div class="form-group box-footer">
            <input type="submit" class="btn btn-primary pull-right" value="update">
        </div>

    </div>
</div>


<div class="col-md-6 box-body">
    <div class="form-row">
        <div class="form-title">
            <h4>Company</h4>
            <hr>
        </div>
        <div class="form-group ">
            <label for="company-name">Name</label>
            {!! Form::text('company_name', null, ['class' => 'form-control', 'id' => 'company-name']) !!}

            @if ($errors->has('company_name'))
                <span class="help-block">
                <strong>{{ $errors->first('company_name') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group">
            <label for="company-address">Address</label>
            {!! Form::text('company_address', null, ['class' => 'form-control', 'id' => 'company-address']) !!}

            @if ($errors->has('company_address'))
                <span class="help-block">
                <strong>{{ $errors->first('company_address') }}</strong>
            </span>
            @endif
        </div>

    </div>

</div>

