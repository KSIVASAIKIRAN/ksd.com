@extends('ke.header')

@section('content')

<style>

.ulinks a:hover{
    color: #000000;
}

</style>

<div class="about-slide">
	<h2>Gallery</h2>
	<a href="{{ url('/') }}">Home</a> <span>/</span> <a href="{{ url('keutubevideolinks') }}">Youtube Playlsit links</a>
</div>
<div class="inner-content">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2> Our Youtube Playlsit links</h2>
					<table width="100%" border="1">
  						<tbody>
   							<tr>
							  <th>S:No</th>
							  <th>Video Description</th>
							  <th>Youtube Video Link</th>
							</tr>
    						<tr>
							  <td>1</td>
							  <td>Devotional Playlsit</td>
							  <td class="ulinks"><a href="https://www.youtube.com/watch?v=SwzwmicMo0Y&list=PLb2OeBNKTzV8AZnK5S4L9IrgDaDMrusdk" target="_blank">https://www.youtube.com/watch?v=SwzwmicMo0Y&list=PLb2OeBNKTzV8AZnK5S4L9IrgDaDMrusdk</a></td>
							</tr>
    						<tr>
							  <td>2</td>
								<td>ఒరేయ్ బామర్ది Playlsit</td>
							  <td class="ulinks"><a href="https://www.youtube.com/watch?v=O1BZ-UNKuwU&list=PLb2OeBNKTzV9DPgoazVGlW3pyeGAIXB_w" target="_blank">https://www.youtube.com/watch?v=O1BZ-UNKuwU&list=PLb2OeBNKTzV9DPgoazVGlW3pyeGAIXB_w</a></td>
							</tr>
							<tr>
							  <td>3</td>
								<td>Live Streams Playlsit</td>
							  <td class="ulinks"><a href="https://www.youtube.com/@KandalaEntertainment/streams" target="_blank">https://www.youtube.com/@KandalaEntertainment/streams</a></td>
							</tr>
							<tr>
							  <td>4</td>
								<td>Shorts </td>
							  <td class="ulinks"><a href="https://www.youtube.com/@KandalaEntertainment/shorts" target="_blank">https://www.youtube.com/@KandalaEntertainment/shorts</a></td>
							</tr>
							<tr>
							  <td>5</td>
								<td>Community Link</td>
							  <td class="ulinks"><a href="https://www.youtube.com/@KandalaEntertainment/community" target="_blank">https://www.youtube.com/@KandalaEntertainment/community</a></td>
							</tr>
							<tr>
							  <td>6</td>
								<td>Our Channels</td>
							  <td class="ulinks"><a href="https://www.youtube.com/@KandalaEntertainment/channels" target="_blank">https://www.youtube.com/@KandalaEntertainment/channels</a></td>
							</tr>
							
  						</tbody>
					</table>

					
				</div>
			</div>
		</div>
	</div>	
</div>

@endsection