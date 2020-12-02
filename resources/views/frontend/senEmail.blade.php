<div class="container-fluid">
<div class="row">
<div class="col-md-12">
    <form  class="contact-form" action="{{URL('sendmail')}}" method="POST">
            {{ csrf_field() }}
        
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <input required type="text" name="name" class="form-control" placeholder="Your Name">
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <input required type="text" name="email" class="form-control" placeholder="Your Email">
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <input required type="text" name="phone" class="form-control" placeholder="Phone">
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="form-group">
            <textarea required name="content" class="form-control" placeholder="Messager"></textarea>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <button required type="submit" class="btn mybtn2">Send Messager</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>