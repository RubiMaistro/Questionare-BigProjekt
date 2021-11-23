
<div>
    @foreach($questions as $question)
    <div class="card-body" style="background-color: skyblue; margin: 1rem 0.5rem 1rem 0.5rem;">
        <h5 class="card-title">
            {{ $question->question }}
        </h5>
        <div class="row justify-content-center">
            <div class="card" style="width: 55%;">
                @if ( $question->question_subtyp == "Válaszokkal")
                    {{ $question->question_subtyp }}
                @endif
                @if ( $question->question_subtyp == "Igaz-hamis")
                    <div>igaz v hamis</div>
                @endif
                @if ( $question->question_subtyp == "Szabadszavas")
                    <input>
                @endif
                
            </div>
        </div>
    </div>
    @endforeach
</div>
