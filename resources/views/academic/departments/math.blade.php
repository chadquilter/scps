<div class="card">
  <div class="card-header">
    <h4>{{__('Math')}}</h4>
  </div>
  <div class="card-body shadow_only">
    <p>{{ __('Mathematics is the language of creation, and students learn to use math to describe, explain, and anticipate what they observe and see in nature. Like poets who beautifully convey imagery and scenery, mathematicians skillfully portray a creation of order, consistency, and beauty. Classes balance both computational and problem-solving skills and focus on practical applications with realistic scenarios and solutions.')}}</p>
    <hr class="style-two">

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Algebra I')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Algebra I')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('real numbers, simplifying and factoring polynomial expressions, and solving and understanding properties of linear and quadratic functions. Topics also expand to include solving systems of linear equations and inequalities. Algebra I is foundational for all advanced level math and science courses.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Algebra II')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Algebra II')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This course extends the mathematical content of Algebra I and Geometry. The major topics covered are the following functions: linear, quadratic, polynomial, rational, and radical. Also covered are solving polynomial equations, investigating conic sections, defining and applying exponential and logarithmic functions, and analyzing sequences and series. An introduction to triangle trigonometry is also covered as a preview for Precalculus.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Algebra 2H')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Algebra 2H')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This course extends the mathematical content of Algebra 1 and Geometry. Algebra 2 topics include linear functions, systems of linear equations and inequalities, quadratic functions, relations and functions, radical functions, exponential functions, logarithmic functions, polynomial functions, rational functions, trigonometric functions, sequences, series, statistics, probability, matrices, and determinants.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Geometry')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Geometry')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This course introduces the basic principles of Geometry and the development of proofs. It emphasizes and integrates logical and spatial visualization skills. The topics cover parallel lines and planes, congruent triangles, quadrilaterals, similar polygons, and circles. Students will find the area of plane figures and volumes of solids.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Pre-Calculus')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Pre-Calculus')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This course involves a rigorous study of trigonometry, vectors in two dimensions, and advanced algebraic topics such as polynomial and rational functions, exponential and logarithmic functions, analytic geometry, mathematical induction, sequences and series. The coursework is very applications oriented and will involve a great amount of work with word problems.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Pre-Calculus Honors')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Pre-Calculus Honors')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This honors course involves a rigorous study of trigonometry, vectors in two and three dimensions, and advanced algebraic topics such as polynomial and rational functions, exponential and logarithmic functions, analytic geometry, mathematical induction, sequences and series. The coursework is very applications oriented and will involve a great amount of work with word problems.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('Calculus AB')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('Calculus AB')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This course will cover aspects of trigonometry, precalculus, and calculus in order to prepare students for the rigors of a college calculus course. The main precalculus topics cover the following functions: polynomial, rational, trigonometric, exponential and logarithmic. The main calculus topics covered are limits, derivatives, applications of derivatives, and elementary integration.')}}
        </p>
      </div>
    </div>
    <br>

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('AP Calculus AB')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('AP Calculus AB')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This one year course covers the same material as the first semester of a college calculus course. The class will cover limits of functions, definition and applications of the derivative, definition and applications of the definite integral, techniques of integration, infinite series, inverse trigonometric and hyperbolic functions.')}}
        </p>
      </div>
    </div>
    <br>
    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('AP Calculus BC')}}">
    <div class="card mathdepartmentDiv">
      <div class="card-header">
        <h4>{{ __('AP Calculus BC')}}</h4>
      </div>
      <div class="card-body">
        <p>
          {{ __('This course will include, but not be limited to: Riemann sums, methods of integration, surface areas, lengths of curves, parametric equations, direction fields, differential equations, sequences and series, and MacLaurin and Taylor series.')}}
        </p>
      </div>
    </div>
    <br>


  </div>
</div>

<script>
$(".mathdepartmentDiv").hide();
$(".subdept-button").click(function() {
  $(this).next(".mathdepartmentDiv").toggle();
});
</script>
