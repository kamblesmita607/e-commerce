@extends('master')
@section('pass_data_main')
<html lang="en">
<body>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Add User</h4>
            {{Form::open(['route'=>['admin.users.store'],'method' => 'post','class'=>'form-horizontal form-label-left']) }}

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                    Name
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" type="text"
                           class="form-control col-md-7 col-xs-12 @if($errors->has('name')) parsley-error @endif"
                           name="name" required>
                    @if($errors->has('name'))
                        <ul class="parsley-errors-list filled">
                            @foreach($errors->get('name') as $error)
                                <li class="parsley-required">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a class="btn btn-primary"
                       href="{{ URL::previous() }}"> {{ __('views.admin.users.edit.cancel') }}</a>
                    <button type="submit" class="btn btn-success"> {{ __('views.admin.users.edit.save') }}</button>
                </div>
            </div>
            {{ Form::close() }} 
          
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#testForm").parsley();
    });
</script>

   <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contact-form').on('submit', function(event){
        event.preventDefault();
       
        $('#name-error').text('');
        $('#email-error').text('');
        $('#mobile-number-error').text('');
        $('#subject-error').text('');
        $('#message-error').text('');

        name = $('#name').val();
        email = $('#email').val();
        mobile_number = $('#mobile_number').val();
        subject = $('#subject').val();
        message = $('#message').val();

        $.ajax({
        // url: "/test_page_submit",
         
        url: "/test_page_submit"
          type: "POST",
          data:{
              name:name,
              email:email,
              mobile_number:mobile_number,
              subject:subject,
              message:message,
          },
          success:function(response){
            console.log(response);
            if (response) {
              $('#success-message').text(response.success);
              $("#contact-form")[0].reset();
            }
          },
          error: function(response) {
              $('#name-error').text(response.responseJSON.errors.name);
              $('#email-error').text(response.responseJSON.errors.email);
              $('#mobile-number-error').text(response.responseJSON.errors.mobile_number);
              $('#subject-error').text(response.responseJSON.errors.subject);
              $('#message-error').text(response.responseJSON.errors.message);
          }
         });
        });
      </script>
 </body>
</html>
@endsection