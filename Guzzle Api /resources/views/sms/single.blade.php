<form method="POST" action="{{route('send-sms')}}"  >
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Messege</label>
    <textarea name="message" class="form-control" id="exampleInputPassword1"  cols="50" rows="10" required></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>