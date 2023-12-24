<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="{{ URL::asset('frontend/css/project/project.css')}}" />
  <title>No Review</title>
</head>

<body>
  <section class="no_review_container">
    <div>
      <img src="{{ URL::asset('frontend/images/project/search.gif')}}" alt="search" />
      <h1>On rewiewing</h1>
      <div>The project is currently under reviewing stage,</div>
      <div>please try again later.</div>
      <div>
        <a href="{{route('front.project')}}">Go Back</a>
      </div>
    </div>
  </section>
</body>

</html>