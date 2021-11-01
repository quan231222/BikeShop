<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>

<body class="animsition">
	
	<!-- Header -->

    @include('header')

	<!-- Cart -->

    @include('cart')
    
    {{-- Phần nội dung thay đổi --}}
	@yield('content')
    {{-- Phần nội dung thay đổi --}}

    @include('footer')

</body>
</html>