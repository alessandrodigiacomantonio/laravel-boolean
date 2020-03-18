@extends('layout')
@section('main')
  @if(count($students)>1)
    <select class="main__select-by-years">
      <option value="all">Tutti gli Studenti</option>
      <option value="under_30">Studenti sotto i 30 anni</option>
      <option value="between_30_50">Studenti tra i 30 e i 50 anni</option>
      <option value="over_50">Studenti sopra i 50 anni</option>
    </select>
  @endif
  <section class="main__students">
    @foreach($students as $student)
      <a class="main__students__student-card" href="{{ route('boolean.getStudentFromName', ['slug'=>$student['slug']]) }}">
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
    @endforeach
  </section>
@endsection
