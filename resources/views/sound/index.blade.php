@extends('layouts4.app')
@section('content')


<audio id="audio" autoplay controls>
    <source src="mp3/mp3.mp3" type="audio/mp3">
</audio>






<script>
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(30000);

//  5 segundos  -->
</script>









@endsection


