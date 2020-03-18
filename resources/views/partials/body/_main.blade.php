<main class="main">
  <section class="main__students">
    @foreach($students as $student)
      <div class="main__students__student-card">
        <a href="{{ route('boolean.getStudentFromName', ['slug'=>$student['slug']]) }}">
          <div class="main__students__student-card__primary-info">
            <div class="student-card__primary-info__image">
              <img src="{{$student['img']}}" alt="immagine profilo studente">
            </div>
            <div class="student-card__primary-info__text">
              <h3>
                {{$student['name']}} <span>({{$student['eta']}} anni)</span>
              </h3>
              <p>
                Lavora in {{$student['company']}} come {{$student['job']}}
              </p>
            </div>
          </div>
          <div class="main__students__student-card__secondary-info">
            <p>
              {{$student['description']}}
            </p>
          </div>
        </a>
      </div>
    @endforeach
  </section>
</main>
