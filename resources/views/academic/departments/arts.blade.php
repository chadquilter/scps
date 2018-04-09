<div class="card">
  <div class="card-header">
    <h1>{{__('Visual Performing Arts')}}</h1>
  </div>
  <div class="card-body shadow_only">
    <p class="lead">{{ __('Education is not only academic, but artistic, developing an appreciation for beauty, creativity, and excellence. Fine arts classes develop foundational knowledge and skills with constant practice in artistic production, expression, and performance. Visual and performing arts are constantly on display in performance throughout the school year.')}}</p>
    <hr class="style-two">

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Art I')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Art I')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('This course is designed to provide a broad view of art education. An awareness of the student’s artistic growth and the importance of culture and environment with respect to art lessons will be stressed. The curriculum is based on art production, art history, art criticism and aesthetics and interdisciplinary connections.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Art II')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Art II')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('Learning to appreciate and to evaluate art and looking at art strives to make individuals aware that all great works of art are part of a creative continuum. The students will review the basic foundations of art elements and design principles and then apply that knowledge to create artistic works of art from their own individuality. Coverage of the various art periods from pre-historic through contemporary art and the learning styles of well-known artist will be covered.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Art III')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Art III')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('Students use art elements and principles to develop skills and sensitivity in a variety of methods and techniques. They increase awareness of composition with abstract, non-objective, and realistic renderings. Students will use many drawing materials and tools with emphasis on perfecting individual approaches to drawing. Students will also explore commercial art by using the computer and photography.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('AP Studio Art')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('AP Studio Art')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('AP Studio art portfolios are designed for students who are seriously interested in the practical experience of art. Students must submit portfolios for evaluation at the end of the school year. Candidates prepare their portfolios through organized AP instruction. The student must show a fundamental competence and range of understanding in visual concerns.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Drama I')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Drama I')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('Drama is the communication of ideas and feelings in order to get a desired response. Drama I teaches the techniques and methods used in the performing arts as well as developing presentation and communication skills. Students learn about the development of theatre throughout history, watch and analyze dramas, present various speeches and performances, write an original play script, and design a theatrical set.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Music II Instrumental')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Music II Instrumental')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('This course provides students with hands-on experience on woodwind instruments to develop a greater depth of musical artistry. This class is a more advanced course in which students are expected to be proficient on their instrument. Students also learn the fundamental elements of music (rhythm, melody, harmony, timbre, and form), a variety of musical styles, composers, and historical periods.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Music II Chorale')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Music II Chorale')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('This course is designed to meet the California state standard for Visual and Performing Arts, Music. This class is a performing ensemble that will learn basic musicianship through choral music. It will cover the fundamental elements of music (rhythm, melody, harmony, timbre, and form) a variety of musical styles, composers, and historical periods. It also provides students with hands-on experience using Solfeggio and proper techniques in singing to develop a greater depth of musical artistry.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Chamber Choir')}}">
    <div class="card artdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('Chamber Choir')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          {{ __('This course is the advanced choral ensemble of the high school. This class will focus on choral literature for small ensembles. Students in Chamber Choir will also prepare repertoire for the HS Chorale in performances and festivals. This ensemble also provides students with hands-on experience using Solfeggio and proper techniques in singing to develop a greater depth of musical artistry. Previous musical experience is a requirement for this class and an audition is required.')}}
        </p>
      </div>
    </div>


  </div>
</div>

<script>
$(".artdepartmentDiv").hide();
$(".subdept-button").click(function() {
  $(this).next(".artdepartmentDiv").toggle();
});
</script>
