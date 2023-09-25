<!DOCTYPE html>
<html lang="en">
    @include('web.layouts.head')

	<body>

		<!-- Header -->
        @include('web.layouts.header')


		<!-- /Header -->

        @yield('content')



		<!-- Footer -->
        @include('web.layouts.footer')

		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->

        @include('web.layouts.script')




	</body>
</html>
