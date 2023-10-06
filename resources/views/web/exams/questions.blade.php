@extends('web.Layouts.master')
@section('styles')
<link href="{{ asset('web/assets/css/TimeCircles.css')}}" rel="stylesheet">

@endsection
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
                <form id="exam-submit-form" method="post" action="{{url("exams/submit/$exam->id")}}">

                <!-- blog post -->
                <div class="blog-post mb-5">
                    <p>
                        @foreach ($exam->questions as $index=>$question )


                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">{{$index+1}}- {{$question->title}}?</h3>
                            </div>
                            <div class="panel-body">
                                <div class="radio">
                                    <label>
                                      <input form="exam-submit-form" type="radio" name="answers[{{$question->id}}]" id="optionsRadios1" value="1">
                                      {{$question->option_1}}
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                      <input form="exam-submit-form" type="radio"name="answers[{{$question->id}}]"  id="optionsRadios2" value="2">
                                      {{$question->option_2}}
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                      <input form="exam-submit-form" type="radio" name="answers[{{$question->id}}]"id="optionsRadios3" value="3">
                                      {{$question->option_3}}
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                      <input form="exam-submit-form" type="radio" name="answers[{{$question->id}}]" id="optionsRadios3" value="4">
                                      {{$question->option_4}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        @endforeach



                    </p>
                </div>
                <!-- /blog post -->

                <div>
                    <button class="main-button icon-button pull-left">Submit</button>
                    <button class="main-button icon-button btn-danger pull-left ml-sm">Cancel</button>
                </div>
            </div>
            <!-- /main blog -->

   <!-- aside blog -->
   <div id="aside" class="col-md-3">

    <!-- exam details widget -->
    <ul class="list-group">
        <li class="list-group-item">Skill: {{$exam->skill->name}}</li>
        <li class="list-group-item">Questions: {{$exam->question_no}}</li>
        <li class="list-group-item">Duration: {{$exam->duration_mints}} mins</li>
        <li class="list-group-item">Difficulty:
            @for ($i=1;$i<=$exam->diffculty;$i++)
            <i class="fa fa-star"></i>
            @endfor

            @for($i=1;$i<=5-$exam->diffculty;$i++)
           <i class="fa fa-star-o"></i>
@endfor

    </ul>
    <!-- /exam details widget -->
    <div class="example" data-time="{{$exam->duration_mints *60}}">
        <!-- Your timer content here -->
    </div>


</div>
<!-- /aside blog -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</div>
<!-- /Blog -->


@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('web/assets/js/TimeCircles.js')}}"></script>
<script>
    $(".example").TimeCircles({
        time: {
            Days: { show: false },
        },
        count_past_zero: false,
    }).addListener(function(unit, value, total) { // Corrected the syntax here
        if (total <= 0) {
            alert("test");
        }
    });
</script>



@endsection
