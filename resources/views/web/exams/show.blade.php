@extends('web.Layouts.master')
@section('content')


<!-- Hero-area -->
<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="category.html">Category name</a></li>
                    <li><a href="category.html">Skill name</a></li>
                    <li>{{$exam->name}}</li>
                </ul>
                <h1 class="white-text"> {{$exam->name}}</h1>
                <ul class="blog-post-meta">
                    <li>{{ carbon\carbon::parse($exam->created_at)->format('d,M,Y')}}</li>
                    <li class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> {{$exam->users()->count()}}</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Blog -->
<div id="blog" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- main blog -->
            <div id="main" class="col-md-9">

                <!-- blog post -->
                <div class="blog-post mb-5">
                    <p>
                        {{$exam->desc}}
                    </p>
                </div>
                <!-- /blog post -->

                <div>
                    <a href="{{ route('exam.questions', $exam->id) }}" class="main-button icon-button pull-left">Start Exam</a>

                </div>
            </div>
            <!-- /main blog -->

            <!-- aside blog -->
            <div id="aside" class="col-md-3">

                <!-- exam details widget -->
                <ul class="list-group">
                    <li class="list-group-item">Skill: {{$exam->skill->name}}</li>
                    <li class="list-group-item">Questions: {{$exam->question_no}}</li>
                    <li class="list-group-item">Duration: {{$exam->duration_mints}}mins</li>
                    <li class="list-group-item">Difficulty:
                        @for ($i=1;$i<=$exam->diffculty;$i++)
                        <i class="fa fa-star"></i>
                        @endfor

                        @for($i=1;$i<=5-$exam->diffculty;$i++)
                       <i class="fa fa-star-o"></i>
@endfor

                </ul>
                <!-- /exam details widget -->



            </div>
            <!-- /aside blog -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</div>
<!-- /Blog -->



		{{-- <!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li><a href="category.html">Category name</a></li>
							<li><a href="category.html">Skill name</a></li>
							<li>Exam name</li>
						</ul>
						<h1 class="white-text">Exam name</h1>
						<ul class="blog-post-meta">
							<li>18 Oct, 2017</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- blog post -->
						<div class="blog-post mb-5">
							<p>
                           {{$exam->desc}}
                            </p>
						</div>
						<!-- /blog post -->

                        <div>
                            <a href={{route('exam.questions',$exam->id)}} class="main-button icon-button pull-left">Start Exam</button>
                        </div>
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- exam details widget -->
                        <ul class="list-group">
                            <li class="list-group-item">Skill: {{$exam->skill->name}}</li>
                            <li class="list-group-item">Questions: {{$exam->question_no}}</li>
                            <li class="list-group-item">Duration: {{$exam->duration_mints}}mins</li>
                            <li class="list-group-item">Difficulty:
                             @for ($i=1;$i<=$exam->diffculty;$i++)
                             <i class="fa fa-star"></i>
                             @endfor

                             @for($i=1;$i<=5-$exam->diffculty;$i++)
                            <i class="fa fa-star-o"></i>
@endfor

                        </ul>
						<!-- /exam details widget -->



					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog --> --}}
    @endsection
