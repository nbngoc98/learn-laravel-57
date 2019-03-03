@include('backend.layouts.header')

@include('backend.layouts.menu_left')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
	@yield('content')
	</div>
	
@include('backend.layouts.footer')