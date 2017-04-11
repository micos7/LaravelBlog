  @extends('main')

  @section('title','| Contact')
  
  @section('contact')
          <div class="row">
            <div class="col-md-12">
              <h1>Contact me</h1>
              <form class="" action="#" method="post">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" id="subject" name="subject">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message"></textarea>
                </div>
                <input type="submit"  value="Send message" class="btn btn-success">
              </form>
            </div>
          </div>
  @endsection
