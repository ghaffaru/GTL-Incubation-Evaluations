@extends ('layouts.app')

@section('content')

{{-- <div class="container"> --}}



    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">

        @if (session('message'))
          <h2> {{ session('message') }}</h2>
        @endif

          <form action="/survey" method="post">
            @csrf
              <div class="form-group">
                  <label for="rating">How would you rate today's program?</label>
                  <select name="rating" class="form-control" required>
                      <option value="">Select rating</option>
                      <option value="10">10</option>
                      <option value="9">9</option>
                      <option value="8">8</option>
                      <option value="7">7</option>
                      <option value="6">6</option>
                      <option value="5">5</option>
                      <option value="4">4</option>
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1">1</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="rating">Were you inspired by today's program?</label>
                  <select name="inspire" class="form-control" required>
                      <option value="">Select rating</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                  </select>

                </div>

                <div class="form-group">
                    <label for="best_part">What was the single best part of today's program?</label><br />
                    <input type="radio" name="best_part" value="The food was good" checked> The food was good<br />
                    <input type="radio" name="best_part" value="The facilitator was interactive">The facilitator was interactive<br />
                    <input type="radio" name="best_part" value="The learning materials were on point">The learning materials were on point<br />
                    <input type="radio" name="best_part" value="You learnt new things today">You learnt new things today<br />
                </div>

                <div class="form-group">
                  <label for="worst">What was your worst experience today?</label>
                    <textarea name="worst" class="form-control" required></textarea>
                </div>
                <h2 style="text-align:center">Evaluate your facilitators</h2>

                <div class="form-group">
                    <label for="interesting">Interesting & Entertaining</label>

                    <select name="interesting" class="form-control" required>
                      <option value="">Select an option</option>
                      <option value="Definitely">Definitely</option>
                      <option value="Mostly">Mostly</option>
                      <option value="Somewhat">Somewhat</option>
                      <option value="Not really">Not really</option>
                      <option value="Not at all">Not at all</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="relevant">Relevant to you</label>

                    <select name="relevant" class="form-control" required>
                      <option value="">Select an option</option>
                      <option value="Definitely">Definitely</option>
                      <option value="Mostly">Mostly</option>
                      <option value="Somewhat">Somewhat</option>
                      <option value="Not really">Not really</option>
                      <option value="Not at all">Not at all</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inspiring">Inspiring</label>

                    <select name="inspiring" class="form-control" required>
                        <option value="">Select an option</option>
                        <option value="Definitely">Definitely</option>
                        <option value="Mostly">Mostly</option>
                        <option value="Somewhat">Somewhat</option>
                        <option value="Not really">Not really</option>
                        <option value="Not at all">Not at all</option>
                    </select>
                </div>

                <h2 style="text-align:center">The House</h2>

                <div class="form-group">
                    <label for="satisfy">Were you satisfied with the house</label><br />
                    <input type="radio" name="satisfy" value="Yes" checked>Yes<br />
                    <input type="radio" name="satisfy" value="No">No<br />
                </div>

                <div class="form-group">
                    <label for="problem">Any problems? Share them</label>
                    <textarea name="problem" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="food">How was the quality of food?</label>
                    <select name="food" class="form-control" required>
                      <option value="">Select rating</option>
                      <option value="10">10</option>
                      <option value="9">9</option>
                      <option value="8">8</option>
                      <option value="7">7</option>
                      <option value="6">6</option>
                      <option value="5">5</option>
                      <option value="4">4</option>
                      <option value="3">3</option>
                      <option value="2">2</option>
                      <option value="1">1</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="food_selection">Was there a large enough selection of food?</label><br />
                    <input type="radio" name="food_selection" value="Heaps of choices" checked> Heaps of choices<br />
                    <input type="radio" name="food_selection" value="An adequate range">An adequate range<br />
                    <input type="radio" name="food_selection" value="Some choice, but not what I wanted">Some choice, but not what I wanted.<br />
                    <input type="radio" name="food_selection" value="Not enough">Not enough<br />
                </div>

                <div class="form-group">
                    <label for="changes">In your honest opinion, what are some of the most important changes you want to be made?</label><br />
                    <textarea name="changes" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <label for="thoughts">Final thoughts. Any other suggestions and final comments?</label> <br />
                    <textarea name="thoughts" class="form-control" required></textarea>
                </div>

                <input type="submit" class="btn btn-primary btn-block" value="Submit" />
          </form>

      </div>
      <div class="col-md-3"></div>
    </div>
@endsection
