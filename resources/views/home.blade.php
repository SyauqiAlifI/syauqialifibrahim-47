<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<title>Schoolyo - Home</title>
<body>
  @include('layouts.style')
  @include('layouts.navbar')
  <section id="intro-sect" class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
      <h1 class="fs-1 fw-normal light-text m-0">Learn <span class="primary-text fw-bold">Fast</span> and Search <span class="primary-text fw-bold">Fast</span></h1>
      <h1 class="fs-1 fw-normal light-text">At <span class="primary-text">S</span><span class="yellowish-text">cho</span><span class="secondary-text">olyo</span></h1>
      <a href="" class="btn bg-primary fs-5 mt-4">Get Started</a>
    </div>
  </section>
  <section id="about-sect" class="position-relative sects">
    <div class="py-5">
      <div class="container">
        <div class="d-flex flex-column">
          <h1 class="sub-t fs-1 fw-bold light-text text-center mb-3">About</h1>
          <div class="row rounded-3 bg-light">
            <div class="col-md-6 p-4">
              <h1 class="fs-2 fw-bold mb-2">Learn Fast</h1>
              <p class="fs-5">
                We've facilitate you an easy way to learn about something that you wanna learn, so you can learn more faster than you do before, and you can share your experience or your knowledge with other people.
                <br>
                <br>
                Everyone that study or teaching here is always be a student, we share thoughts and experience together, we learn together and we teach together.
                <br>
                <br>
                'Cause the fastest way to learn is with someone that has already learnt and still learning.</p>
            </div>
            <div class="col-md-6 p-0">
              <img src="{{asset('images/ngaji.png')}}" alt="" id="ngaji-img">
            </div>
          </div>
          <br>
          <div class="row rounded-3 bg-light">
            <div class="col-md-6 p-0">
              <img src="{{asset('images/belajar.png')}}" alt="" id="ngaji-img">
            </div>
            <div class="col-md-6 p-4">
              <h1 class="fs-2 fw-bold mb-2">Search Fast</h1>
              <p class="fs-5">
                With a lot of subjects you can search subjects that you like in here, a simple search for you, and a simple subjects for you, you can find it easily!
                <br>
                <br>
                Features that we've made is simple but useful, try to search something you wanted and we'll find it for you, whatever the subject is, we could find it for you!
                <br>
                <br>
                All articles that you've made or other people's made should be simple, so you or others could search faster what they wanted!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.script')
</body>
</html>