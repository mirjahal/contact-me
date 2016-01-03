<div class="row">
    <div class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                {!! Form::text('name') !!}
                <label for="name">Name</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">phone</i>
                {!! Form::text('phone') !!}
                <label for="name">Phone</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                {!! Form::text('email') !!}
                <label for="name">E-mail</label>
            </div>
        </div>
    </div>
    
    <div class="mdl-cell mdl-cell--12-col">
        <button class="btn waves-effect waves-light light-blue" type="submit">{{ $submitButtonText }}</button>
        <a href="/contact" class="btn-flat"><i class="material-icons left"></i>Cancel</a>
    </div>
</div>
