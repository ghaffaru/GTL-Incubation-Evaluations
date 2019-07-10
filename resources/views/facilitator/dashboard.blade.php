@extends('facilitator.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">

        <form action="/facilitatorsurvey" method="post">
          @csrf
          @if (count($errors) > 0)
             @foreach ($errors as $error)
                {{ $error }}
             @endforeach
          @endif
          <h2 style="text-align:center">Day's Activities</h2>

          <div class="form-group">
              <label for="objectives">To what extent do you feel the sessions met its objectives?</label>

              <select name="objectives" class="form-control">
                <option value="">Select an option</option>
                <option value="Completely">Completely</option>
                <option value="Somewhat">Somewhat</option>
                <option value="Not at all">Not at all</option>
              </select>
          </div>

          <div class="form-group">
              <label for="explain">Please explain your response
              </label>
              <textarea name="explain" class="form-control"></textarea>
          </div>


          <div class="form-group">
              <label for="describe">Describe five(5) things would you do differently next time (think in terms of
                methodology used, time management, level of participation in the session)
              </label>
              <textarea name="describe" class="form-control"></textarea>
          </div>

          <div class="form-group">
              <label for="list">List any training techniques or activities that you felt helped to achieve the
                workshop objectives (e.g. role play, case studies, presentations etc.).
                Please name the session that they were used in.
              </label>
              <textarea name="list" class="form-control"></textarea>
          </div>

          <div class="form-group">
              <label for="materials">Were there any training materials that you felt helped achieve the session’s
                objectives? (e.g. handouts, examples etc.).
                Please name the session that they were used in.
              </label>
              <textarea name="materials" class="form-control"></textarea>
          </div>

          <div class="form-group">
              <label for="prepare">What additional materials would have been useful in helping you prepare for
                the program?
              </label>
              <textarea name="prepare" class="form-control"></textarea>
          </div>

          <div class="form-group">
              <label for="delivery">What additional materials would have been useful in the delivery of the
                program?
              </label>
              <textarea name="delivery" class="form-control"></textarea>
          </div>

          <div class="form-group">
              <label for="modules">What additional materials would have been useful in the delivery of the
                program?
              </label>
              <textarea name="modules" class="form-control"></textarea>
          </div>

              <input type="submit" class="btn btn-primary btn-block" value="Submit" />


        </form>

    </div>
    <div class="col-md-3"></div>
  </div>
@endsection
