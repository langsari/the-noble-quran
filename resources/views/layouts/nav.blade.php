<ul class="navbar-nav mr-auto">
  <li class="nav-item">
 <a class="nav-link" href="{{ route('thai.index') }}">จัดการกุรอาน</a> 
</li>
  <li class="nav-item">
 <a class="nav-link" href="{{ route('qurantafseers.index') }}">จัดการตัฟซีร</a>    </li>

 <li class="nav-item">
 <a class="nav-link" href="{{ route('tafseers.index') }}">จัดการวิดีโอตัฟซีร</a> 
</li>

 @if (Auth::user()->is_admin=='1')
 <li class="nav-item">
   <a class="nav-link" href="{{ route('user.index') }}">จัดการผู้ใช้</a>
 </li>  
 <li class="nav-item">
   <a class="nav-link" href="{{ route('managenote') }}">จัดการโน้ต</a>
 </li> 
 @elseif (Auth::user()->is_admin=='2')
 <li class="nav-item">
     <a class="nav-link" href="{{ route('showquran') }}">ตรวจสอบสถานะกุนอาน</a>
   </li>
 <li class="nav-item">
     <a class="nav-link" href="{{ route('showvdotafseer') }}">ตรวจสอบสถานะวิดีโอตัฟซีร</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="{{ route('showtafseer') }}">ตรวจสอบสถานะตัฟซีร</a>
   </li>
   @endif
  </ul>
  