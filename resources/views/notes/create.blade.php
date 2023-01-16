@extends('notes.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<div class="row mt-2">
    <div class ="col-md-12">
      <h2>สร้างโน้ต</h2>
          <a href ="{{ route('notes.index') }}" class ="btn btn-success my-3"> กลับ </a>
    </div>      
</div> 

@if ($errors->any())
 <div class="alert alert-danger">
     <strong>อุปส์</strong>
     มีบางอย่างผิดพลาด <br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
 <!-- Note -->
 <form action="{{ route('notes.store') }}" method="post">
    @csrf
 <button type="button" class="open-button "  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">โน๊ต</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">สร้างโน้ต</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" name="title" >
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">คำอธิบาย :</label>
            <textarea class="form-control"name="description"></textarea>
          </div>
          <!-- <div class="form-group">
            <label for="recipient-name" class="control-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" name="datasurah_id" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" name="id" >
          </div>
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" name="users_id" >
          </div>
         -->
        
       

          <p class="cautions">*กรุณาเข้าสู่ระบบก่อนสร้างโน้ต*</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-success">บันทึก</button>

       
      </div>
      
    </div>
  </div>
</div>
</form>
<!-- <script>
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
</script> -->
@endsection


