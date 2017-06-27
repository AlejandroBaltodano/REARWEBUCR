@if($flash=session('message'))
<div class="alert alert-danger">
<p><strong>Oops!!</strong> Tiene algunos errores:</p>
<ul>
	<li><p>{{$flash}}</p></li>
</ul>


</div>
@endif