<main class="main">
  <section class="main__students">
    @foreach($students as $student)
      <div class="main__students__student-card">
        <div class="main__students__student-card__primary-info">
          <img src="{{$student['img']}}" alt="immagine profilo studente">
          <h3>
            {{$student['name']}} <span>({{$student['eta']}} anni)</span>
          </h3>
          <p>
            Lavora in {{$student['company']}} come {{$student['job']}}
          </p>
        </div>
        <div class="main__students__student-card__secondary-info">
          <p>
            {{$student['description']}}
          </p>
        </div>
      </div>
    @endforeach
  </section>
</main>
